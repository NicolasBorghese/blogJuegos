<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuentaRequest;
use App\Http\Requests\UpdateCuentaRequest;
use App\Models\Noticia;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CuentaController extends Controller
{
    public function registrarse(){
        return view('cuenta.registrarse');
    }

    public function ingresar(){
        return view('cuenta.ingresar');
    }

    public function edit(){
        $user = Auth::user();
        return view('cuenta.edit', compact('user'));
    }

    public function store(StoreCuentaRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->rol = 'lector';
        $user->imgUsuario = 'imgUsuario0.jpg';
        $user->save();
        Auth::login($user);
        return redirect(route('home'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if($request->filled('name')){
            if($user->name != $request->name){
                $request->validate([
                    'name' => 'min:3|string|max:25'
                ]);
                $user->name = $request->name;
            }
        }

        if($request->filled('email')){
            if($user->email != $request->email){
                $request->validate([
                    'email' => 'required|string|email|max:255|unique:users,email,'
                ]);
                $user->email = $request->email;
            }
        }

        if($request->filled('password')){
            if($request->password != ""){
                $request->validate([
                    'password' => 'min:4'
                ]);
                $user->password = Hash::make($request->password);
            }
        }

        if ($request->hasFile('imgUsuario')) {
            if ($user->imgUsuario) {
                Storage::delete('public/images/' . $user->imgUsuario);
            }
            $file = $request->file('imgUsuario');
            $filename = time() . '_profile.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $user->imgUsuario = $filename;
        }

        $user->save();

        return redirect()->route('cuenta.edit', $user->id)->with('success', 'Perfil actualizado correctamente');
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
