<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index($slug_film_adi){
        $film = Film::where('slug', $slug_film_adi)->firstOrFail();
        $filmadi = Film::where('film_adi', $film->film_adi)->get();
        $oyuncu = Film::select('oyuncu1','oyuncu2','oyuncu3')->get();
        return view('film', compact('film','oyuncu'));
    }
}
