<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::orderBy('idReview', 'desc')->get();
        return view('reviews.index', compact('reviews'));
    }

    public function show(Review $review){
        $comentarios = $review->comentarios()->orderBy('created_at', 'asc')->get();
        return view('reviews.show', compact('review', 'comentarios'));
    }

    public function create(){
        return view('reviews.create');
    }

    public function edit(Review $review){
        return view('reviews.edit', compact('review'));
    }

    public function store(StoreReviewRequest $request){
        $post = new Post();
        $post->idUser = Auth::id();
        $post->categoriaPost = 'review';
        $post->save();

        $review = new Review();
        $review->idPost = $post->idPost;
        $review->nombreJuego = $request->nombreJuego;
        $review->resumenReview = $request->resumenReview;
        $review->contenidoReview = $request->contenidoReview;
        $review->puntajeJuego = $request->puntajeJuego;
        $review->generoJuego = $request->generoJuego;

        if ($request->hasFile('imgCard')) {
            $file = $request->file('imgCard');
            $filename = time() . '_card.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $review->imgCard = $filename;
        }

        if ($request->hasFile('imgPortada')) {
            $file = $request->file('imgPortada');
            $filename = time() . '_portada.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $review->imgPortada = $filename;
        }

        $review->save();

        return redirect(route('home'))->with('success', 'Review creada exitosamente');
    }

    public function update(UpdateReviewRequest $request, Review $review){

        $review->nombreJuego = $request->nombreJuego;
        $review->resumenReview = $request->resumenReview;
        $review->contenidoReview = $request->contenidoReview;
        $review->puntajeJuego = $request->puntajeJuego;
        $review->generoJuego = $request->generoJuego;

        if ($request->hasFile('imgCard')) {
            $file = $request->file('imgCard');
            $filename = time() . '_card.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $review->imgCard = $filename;
        }

        if ($request->hasFile('imgPortada')) {
            $file = $request->file('imgPortada');
            $filename = time() . '_portada.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $review->imgPortada = $filename;
        }

        $review->save();

        return redirect(route('home'))->with('success', 'Review actualizada exitosamente');
    }
}
