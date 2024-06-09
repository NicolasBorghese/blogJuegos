<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $noticias = Noticia::orderBy('idNoticia', 'desc')->take(4)->get();
        $reviews = Review::orderBy('idReview', 'desc')->take(5)->get();

        return view('home', compact('noticias', 'reviews'));
    }
}
