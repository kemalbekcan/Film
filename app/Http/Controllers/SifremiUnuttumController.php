<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SifremiUnuttumController extends Controller
{
    public function index(){
        return view('sifremiunuttum');
    }
}
