<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
        $cate=new Category();
        $cate->nom="Series Tv";
        $cate->ligne=1;
        $cate->save();

        $cate2=new Category();
        $cate2->nom="Jeux video";
        $cate2->ligne=1;
        $cate2->save();

        $cate3=new Category();
        $cate3->nom="Films";
        $cate3->ligne=1;
        $cate3->save();

        $cate4=new Category();
        $cate4->nom="Sports";
        $cate4->ligne=1;
        $cate4->save();

        $cate5=new Category();
        $cate5->nom="Musique";
        $cate5->ligne=1;
        $cate5->save();
        */
        
        $cate5=new Category();
        $cate5->nom="Les goonies";
        $cate5->ligne=1;
        $cate5->parent_id=1;

        $cate5->save();

        
        $cate5=new Category();
        $cate5->nom="Star Wars";
        $cate5->ligne=1;
        $cate5->parent_id=3;
        $cate5->save();

        
        $cate5=new Category();
        $cate5->nom="superman";
        $cate5->ligne=1;
        $cate5->parent_id=2;
        $cate5->save();

        
        $cate5=new Category();
        $cate5->nom="Star trek";
        $cate5->ligne=1;
        $cate5->parent_id=1;
        $cate5->save();

        $cate5=new Category();
        $cate5->nom="GTA";
        $cate5->ligne=1;
        $cate5->parent_id=4;
        $cate5->save();

        $cate5=new Category();
        $cate5->nom="Tomb Raider";
        $cate5->ligne=1;
        $cate5->parent_id=4;
        $cate5->save();

        
    }
}
