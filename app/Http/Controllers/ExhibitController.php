<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Exhibit;

class ExhibitController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $exhibits = Exhibit::latest()->where('user_id', auth()->user()->id)->paginate(12);
        return view('exhibit.index', compact('exhibits'))
            ->with('i', (request()->input('page', 1) - 1) * 12);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exhibit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $message = [
            'photos.required'       => '画像: 未入力項目があります。',
            'title.required'        => '商品タイトル: 未入力項目があります。',
            'description.required'  => '商品説明: 未入力項目があります。',
            'price.required'        => '価格: 未入力項目があります。',
            'price.min'             => '価格: 100円以上である必要があります。',
            'quantity.required'        => '数量: 未入力項目があります。',
       ];
        $request->validate([
            'photos' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:100',
            'quantity' => 'required|numeric|min:0',
        ],$message);
       
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        $exhibit = Exhibit::create($data);
        $path = storage_path('tmp/uploads/');
        
        foreach ($request->input('photos', []) as $file) {
            $exhibit->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos');
        }

        return redirect()->route('exhibit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exhibit = Exhibit::where('id',$id)->first();
        return view('exhibit.show', compact('exhibit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exhibit = Exhibit::where("id", $id)->first();
        return view('exhibit.edit', compact('exhibit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exhibit = Exhibit::where("id", $id)->first();
        $message = [
            'photos.required'       => '画像: 未入力項目があります。',
            'title.required'        => '商品タイトル: 未入力項目があります。',
            'description.required'  => '商品説明: 未入力項目があります。',
            'price.required'        => '価格: 未入力項目があります。',
            'price.min'             => '価格: 100円以上である必要があります。',
            'quantity.required'        => '数量: 未入力項目があります。',
       ];
        $request->validate([
            'photos' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:100',
            'quantity' => 'required|numeric|min:0',
        ],$message);
       
        $data = $request->except('_token');
        $exhibit->update($data);

        $path = storage_path('tmp/uploads/');
        if (count($exhibit->photos) > 0) {
            foreach ($exhibit->photos as $media) {
                if (!in_array($media->file_name, $request->input('photos', []))) {
                    $media->delete();
                }
            }
        }
        $media = $exhibit->photos->pluck('file_name')->toArray();
        foreach ($request->input('photos', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $exhibit->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos');
            }
        }

        return redirect()->route('exhibit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exhibit::where("id", $id)->delete();
        return redirect()->route('exhibit.index')
        ->with('status',  config('myconfig.delete_complete'));     
    }
}
