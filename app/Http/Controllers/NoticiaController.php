<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use App\Models\Noticia;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::orderBy('idNoticia', 'desc')->get();
        return view('noticias.index', compact('noticias'));
    }

    public function show(Noticia $noticia){
        $comentarios = $noticia->comentarios()->orderBy('created_at', 'asc')->get();
        return view('noticias.show', compact('noticia', 'comentarios'));
    }

    public function create(){
        return view('noticias.create');
    }

    public function edit(Noticia $noticia){
        return view('noticias.edit', compact('noticia'));
    }

    public function store(StoreNoticiaRequest $request){
        $post = new Post();
        $post->idUser = Auth::id();
        $post->categoriaPost = 'noticia';
        $post->save();

        $noticia = new Noticia();
        $noticia->idPost = $post->idPost;
        $noticia->tituloNoticia = $request->tituloNoticia;
        $noticia->resumenNoticia = $request->resumenNoticia;
        $noticia->contenidoNoticia = $request->contenidoNoticia;

        if ($request->hasFile('imgCard')) {
            $file = $request->file('imgCard');
            $filename = time() . '_card.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $noticia->imgCard = $filename;
        }

        if ($request->hasFile('imgPortada')) {
            $file = $request->file('imgPortada');
            $filename = time() . '_portada.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $noticia->imgPortada = $filename;
        }

        $noticia->save();

        return redirect(route('home'))->with('success', 'Noticia creada exitosamente');
    }

    public function update(UpdateNoticiaRequest $request, Noticia $noticia){
            $noticia->post->update([
                'categoriaPost' => 'noticia',
            ]);

            $noticia->update([
                'tituloNoticia' => $request->tituloNoticia,
                'resumenNoticia' => $request->resumenNoticia,
                'contenidoNoticia' => $request->contenidoNoticia,
            ]);

            if ($request->hasFile('imgCard')) {
                $file = $request->file('imgCard');
                $filename = time() . '_card.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/images', $filename);
                $noticia->update(['imgCard' => $filename]);
            }

            if ($request->hasFile('imgPortada')) {
                $file = $request->file('imgPortada');
                $filename = time() . '_portada.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/images', $filename);
                $noticia->update(['imgPortada' => $filename]);
            }

            return redirect(route('home'))->with('success', 'Noticia actualizada exitosamente');
    }
}
