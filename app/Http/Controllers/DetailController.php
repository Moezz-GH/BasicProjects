<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{

    public function Details(){
        return view('frontend.details');
    }
}
