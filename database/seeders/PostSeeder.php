<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post1 = new Post();
        $post1->idPost = 1;
        $post1->idUser = 2;
        $post1->categoriaPost = 'review';
        $post1->habilitado = true;
        $post1->save();

        $post2 = new Post();
        $post2->idPost = 2;
        $post2->idUser = 2;
        $post2->categoriaPost = 'review';
        $post2->habilitado = true;
        $post2->save();

        $post3 = new Post();
        $post3->idPost = 3;
        $post3->idUser = 2;
        $post3->categoriaPost = 'review';
        $post3->habilitado = true;
        $post3->save();

        $post4 = new Post();
        $post4->idPost = 4;
        $post4->idUser = 2;
        $post4->categoriaPost = 'review';
        $post4->habilitado = true;
        $post4->save();

        $post5 = new Post();
        $post5->idPost = 5;
        $post5->idUser = 2;
        $post5->categoriaPost = 'review';
        $post5->habilitado = true;
        $post5->save();

        $post6 = new Post();
        $post6->idPost = 6;
        $post6->idUser = 2;
        $post6->categoriaPost = 'review';
        $post6->habilitado = true;
        $post6->save();

        $post7 = new Post();
        $post7->idPost = 7;
        $post7->idUser = 2;
        $post7->categoriaPost = 'review';
        $post7->habilitado = true;
        $post7->save();

        $post8 = new Post();
        $post8->idPost = 8;
        $post8->idUser = 2;
        $post8->categoriaPost = 'review';
        $post8->habilitado = true;
        $post8->save();

        $post9 = new Post();
        $post9->idPost = 9;
        $post9->idUser = 2;
        $post9->categoriaPost = 'review';
        $post9->habilitado = true;
        $post9->save();

        $post10 = new Post();
        $post10->idPost = 10;
        $post10->idUser = 2;
        $post10->categoriaPost = 'review';
        $post10->habilitado = true;
        $post10->save();

        $post11 = new Post();
        $post11->idPost = 11;
        $post11->idUser = 2;
        $post11->categoriaPost = 'noticia';
        $post11->habilitado = true;
        $post11->save();

        $post12 = new Post();
        $post12->idPost = 12;
        $post12->idUser = 2;
        $post12->categoriaPost = 'noticia';
        $post12->habilitado = true;
        $post12->save();

        $post13 = new Post();
        $post13->idPost = 13;
        $post13->idUser = 2;
        $post13->categoriaPost = 'noticia';
        $post13->habilitado = true;
        $post13->save();

        $post14 = new Post();
        $post14->idPost = 14;
        $post14->idUser = 2;
        $post14->categoriaPost = 'noticia';
        $post14->habilitado = true;
        $post14->save();

        $post15 = new Post();
        $post15->idPost = 15;
        $post15->idUser = 2;
        $post15->categoriaPost = 'noticia';
        $post15->habilitado = true;
        $post15->save();

        $post16 = new Post();
        $post16->idPost = 16;
        $post16->idUser = 2;
        $post16->categoriaPost = 'noticia';
        $post16->habilitado = true;
        $post16->save();

        $post17 = new Post();
        $post17->idPost = 17;
        $post17->idUser = 2;
        $post17->categoriaPost = 'noticia';
        $post17->habilitado = true;
        $post17->save();

        $post18 = new Post();
        $post18->idPost = 18;
        $post18->idUser = 2;
        $post18->categoriaPost = 'noticia';
        $post18->habilitado = true;
        $post18->save();

        $post19 = new Post();
        $post19->idPost = 19;
        $post19->idUser = 2;
        $post19->categoriaPost = 'noticia';
        $post19->habilitado = true;
        $post19->save();

        $post20 = new Post();
        $post20->idPost = 20;
        $post20->idUser = 2;
        $post20->categoriaPost = 'noticia';
        $post20->habilitado = true;
        $post20->save();

    }
}
