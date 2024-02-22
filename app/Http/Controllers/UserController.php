<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
        return view('frontend.index');
    }

    public function Profile(){
        return view('dashboard');
    }
    public function Checkout(){

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('frontend.checkout',compact('adminData'));
    }
    public function CheckoutDone(){

    
        return view('frontend.checkoutdone');
    }
}
