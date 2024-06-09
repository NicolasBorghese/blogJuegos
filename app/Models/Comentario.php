<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    //Defino la tabla a la que se relaciona en la base de datos por seguridad
    protected $table = "comentarios";

    protected $primaryKey = 'idComentario';

    protected $fillable = [
        'idUser',
        'idPost',
        'contenidoComentario',
        'fechaDeshabilitado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'idPost');
    }
}
