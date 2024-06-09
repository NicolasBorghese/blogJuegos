<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();
        $user1->id = '1';
        $user1->name = 'admin';
        $user1->email = 'admin@mail.com';
        $user1->password = bcrypt('1234');

        $user1->rol = 'administrador';
        $user1->imgUsuario = 'imgUsuario1.jpg';
        $user1->habilitado = true;
        $user1->save();
        //----------------------------------------------------------------------------

        $user2 = new User();
        $user2->id = '2';
        $user2->name = 'autor';
        $user2->email = 'autor@mail.com';
        $user2->password = bcrypt('1234');

        $user2->rol = 'autor';
        $user2->imgUsuario = 'imgUsuario2.jpg';
        $user2->habilitado = true;
        $user2->save();
        //----------------------------------------------------------------------------

        $user3 = new User();
        $user3->id = '3';
        $user3->name = 'lector';
        $user3->email = 'lector@mail.com';
        $user3->password = bcrypt('1234');

        $user3->rol = 'lector';
        $user3->imgUsuario = 'imgUsuario3.jpg';
        $user3->habilitado = true;
        $user3->save();
        //----------------------------------------------------------------------------

    }
}
