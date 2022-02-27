<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCont extends Controller
{
    public function ContactUs(){
        return view('contact');
    }
}
