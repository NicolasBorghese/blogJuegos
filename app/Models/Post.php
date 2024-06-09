<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Defino la tabla a la que se relaciona en la base de datos por seguridad
    protected $table = "posts";

    protected $primaryKey = 'idPost';

    protected $fillable = [
        'idUser',
        'categoriaPost',
        'habilitado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function noticia()
    {
        return $this->hasOne(Noticia::class, 'idPost');
    }

    public function review()
    {
        return $this->hasOne(Review::class, 'idPost');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'idPost');
    }
}
