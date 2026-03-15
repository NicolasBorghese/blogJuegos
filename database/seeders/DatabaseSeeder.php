<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(NoticiaSeeder::class);
        $this->call(ComentarioSeeder::class);

        // Resetear secuencias de PostgreSQL al máximo ID insertado
        // (necesario porque los seeders insertan IDs fijos y la secuencia no se actualiza sola)
        DB::statement("SELECT setval(pg_get_serial_sequence('users', 'id'), MAX(id)) FROM users");
        DB::statement("SELECT setval(pg_get_serial_sequence('posts', 'idPost'), MAX(\"idPost\")) FROM posts");
        DB::statement("SELECT setval(pg_get_serial_sequence('noticias', 'idNoticia'), MAX(\"idNoticia\")) FROM noticias");
        DB::statement("SELECT setval(pg_get_serial_sequence('reviews', 'idReview'), MAX(\"idReview\")) FROM reviews");
        DB::statement("SELECT setval(pg_get_serial_sequence('comentarios', 'idComentario'), MAX(\"idComentario\")) FROM comentarios");
    }
}
