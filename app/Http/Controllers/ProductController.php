<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibit;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category = "all";
        
        $query = Exhibit::latest();
        if($request->has("category"))
        {
            $category = $request->category;
            if($category != "all")
            {
                $query->where('category', $category);
            }
        }
        if($request->has("search_title"))
        {
            $title = $request->search_title;           
            $query ->where('title', 'like', '%'.$title.'%');
        }  
        $exhibits = $query->paginate(8);
        return view('product.index', compact('exhibits', 'category'))
            ->with('i',(request()->input('page', 1) - 1) * 8);
    }

    public function show($id)
    {
        $exhibit = Exhibit::where('id',$id)->first();
        return view('product.show', compact('exhibit'));
    }

    public function cart()
    {
        return view('product.cart');
    }


    public function addCart($id)
    {
        $product = Exhibit::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->thumbnail
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('cart_success', '商品がカートに正常に追加されました！');
    }

        /**
     * Write code on Method
     *
     * @return response()
     */
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('cart_success', 'カートが正常に更新されました。');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('cart_success', '製品が正常に削除されました。');
        }
    }
}
