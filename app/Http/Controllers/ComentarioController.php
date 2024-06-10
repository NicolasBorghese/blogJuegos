<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    public function store(Request $request){

        $comentario = new Comentario();
        $comentario->contenidoComentario = $request->contenidoComentario;
        $comentario->idPost = $request->idPost;
        $comentario->idUser = Auth::id();
        $comentario->save();

        return redirect()->back()->with('success', 'Comentario agregado correctamente');
    }

}
