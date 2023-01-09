<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view(view: 'home');
    }

    public function about(){
        return view(view:'about');
    }

    public function listaFilms(){

        $movies = Movie::all();

        return view(view:'lista-films', data: compact('movies'));
    }
}
