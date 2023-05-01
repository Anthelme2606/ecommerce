<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function parent()
    {
        return $this->belongsTo('App\Models\Category','parent_id');
    }
    public function children()
    {
        return $this->hasMany('App\Models\Category','parent_id');
    }
    public function produitparent(){
        return $this->hasMany('App\Models\Produit','cate_id');
    }
    public function produitchild(){
        return $this->hasManyThrough('App\Models\Produit','App\Models\Category','parent_id','cate_id');
    }
    public function produits(){
       $parent =  $this->produitparent()->with('category')->get()->merge($this->produitchild()->with('category')->get());
       return $parent;
    }
    

}
