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

        if($request->filled('rol')){
            if($user->rol != $request->rol){
                $user->rol = $request->rol;
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
                if($user->imgUsuario != 'imgUsuario0.jpg'){
                    Storage::delete('public/images/' . $user->imgUsuario);
                }

            }
            $file = $request->file('imgUsuario');
            $filename = time() . '_profile.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $filename);
            $user->imgUsuario = $filename;
        }

        $user->save();

        return redirect()->route('cuenta.edit', $user->id)->with('success', 'Perfil actualizado correctamente');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::validate($credentials)) {
            Auth::attempt($credentials);
            $request->session()->regenerate();
            return redirect(route('home'));
        } else {
            // La contraseña es incorrecta o el correo electrónico no existe
            return redirect(route('cuenta.ingresar'))->with('error', 'Las credenciales proporcionadas son incorrectas.');
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

    public function users(){
        $users = User::orderBy('id', 'asc')->get();
        return view('cuenta.users', compact('users'));
    }
}
