<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        $filmler = Film::all();
        return view('anasayfa',compact('filmler'));
    }
}
