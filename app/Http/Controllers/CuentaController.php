<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuentaRequest;
use App\Models\Noticia;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CuentaController extends Controller
{
    public function registrarse(){
        return view('cuenta.registrarse');
    }

    public function ingresar(){
        return view('cuenta.ingresar');
    }

    public function store(StoreCuentaRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //$user->password = Hash::make($request->password);
        $user->rol = 'lector';
        $user->imgUsuario = 'imgUsuario0.jpg';
        $user->save();
        Auth::login($user);
        return redirect(route('home'));
    }

    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            //'habiitado' => true
        ];
        //$remember = ($request->has('remember') ? true : false);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect(route('home'));
        } else {
            return redirect(route('cuenta.ingresar'));
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('home'));
    }

    public function reviews(){

        $idUser = Auth::id();
        $reviews = Review::whereHas('post', function ($query) use ($idUser) {
            $query->where('idUser', $idUser);
        })->orderBy('idReview', 'desc')->get();
        return view('cuenta.reviews', compact('reviews'));
    }

    public function noticias(){

        $idUser = Auth::id();
        $noticias = Noticia::whereHas('post', function ($query) use ($idUser) {
            $query->where('idUser', $idUser);
        })->orderBy('idNoticia', 'desc')->get();
        return view('cuenta.noticias', compact('noticias'));
    }
}
