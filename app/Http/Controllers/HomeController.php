<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Notifications\SmsNotification ;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        //return view('home');
        return redirect()->route('exhibit.index');
    }

    public function sms ()  {
        $user = User::find(1);         
        $user->notify(new SmsNotification());
    }
}
