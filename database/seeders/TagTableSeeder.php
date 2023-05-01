<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tag2=new Tag();
        $tag2->nom="humour";
        $tag2->save();

        
        $tag3=new Tag();
        $tag3->nom="take care";
        $tag3->save();

        
        $tag4=new Tag();
        $tag4->nom="commentaire";
        $tag4->save();

        
        $tag=new Tag();
        $tag->nom="festival";
        $tag->save();
    }
}
