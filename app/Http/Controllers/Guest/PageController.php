<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\film;

class PageController extends Controller {
    
    function home() {

        $film = film::all();

        dump($film);

        return view('home',[
            "film" => $film,
        ]);
    }

}