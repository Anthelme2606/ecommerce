<?php
namespace App\Http\ViewComposers;
use App\Models\Category;
use App\Models\Produit;

use Illuminate\View\View;


class profileComposer
{
 public function compose(View $vue)
 {
    $tab=['ligne'=>1,'parent_id'=>NULL];
  $vue->with('categorie',Category::where($tab)->get());
 }
 
}
