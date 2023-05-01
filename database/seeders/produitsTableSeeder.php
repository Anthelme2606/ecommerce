<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt wakanda";
        $produit->photo="chemise.jpg";
        $produit->cate_id=5;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt wakanda";
        $produit->photo="chemise.jpg";
        $produit->cate_id=5;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt Sheyi";
        $produit->photo="chemise.jpg";
        $produit->cate_id=2;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt Drogba";
        $produit->photo="chemise.jpg";
        $produit->cate_id=1;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt wakanda";
        $produit->photo="chemise.jpg";
        $produit->cate_id=1;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt Messi";
        $produit->photo="chemise.jpg";
        $produit->cate_id=1;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt wakanda1.0";
        $produit->photo="chemise.jpg";
        $produit->cate_id=3;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt cristiano";
        $produit->photo="chemise.jpg";
        $produit->cate_id=4;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt wakanda2";
        $produit->photo="chemise.jpg";
        $produit->cate_id=1;
        $produit->save();

        $produit=new Produit();
        $produit->nom="T-shirt";
        $produit->prix=250;
        $produit->description="T-shirt Marc Tison";
        $produit->photo="chemise.jpg";
        $produit->cate_id=2;
        $produit->save();
    }
}
