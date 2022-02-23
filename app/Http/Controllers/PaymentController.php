<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Models\Payment;

class PaymentController extends Controller
{
    private function get_total_price() {     
        $total_price = 0;   
        $cart = session()->get('cart');
        if(isset($cart)) {
            foreach ($cart  as $id => $details) {
                $total_price += $details['price'] * $details['quantity'];
            }
        }
        return $total_price;
    }

    public function card_index() {
        $total_price = $this->get_total_price();
        return view('payment.card',["total_price"=>$total_price]);
    }

    public function card_pay(Request $request) {
        $total_price = $this->get_total_price();
        Stripe\Stripe::setApiKey(env('STRIP_SECRETKEY'));
        $charge = Stripe\Charge::create ([
                "amount" => $total_price,
                "currency" => "jpy",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
        if($charge['status'] == 'succeeded')
        {
            $payment = new Payment();
            $payment->charge_id = $charge['id'];
            $payment->amount = $charge['amount'];
            $payment->user_id = auth()->user()->id;
            $payment->save();
            Session::flash('success', '支払いは正常に処理されました。');
            session()->put('cart', []);
        }
        else
        {
            Session::flash('error', 'お支払いが失敗しました。');
        }

        return back();
    }

    public function bank_index() {
        return view('payment.bank');
    }
    
}
