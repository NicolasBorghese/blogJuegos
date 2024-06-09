<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    //Defino la tabla a la que se relaciona en la base de datos por seguridad
    protected $table = "noticias";

    protected $primaryKey = 'idNoticia';

    protected $fillable = [
        'idPost',
        'tituloNoticia',
        'resumenNoticia',
        'contenidoNoticia',
        'imgCard',
        'imgPortada',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'idPost');
    }
}
