<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\shop\CartController;
use App\Http\Controllers\shop\MainController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\backend\SmsController;
use App\Http\Controllers\client\ClientController;
use App\Http\Controllers\commande\CommandeController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//tout le monde
Route::POST('/panier/commande{id}/add',[CommandeController::class,'store'])->name('store_Commande');
Route::get('/panier/commande/{id}',[CommandeController::class,'form'])->name('myForm');
Route::post('/number_save',[SmsController::class,'store'])->name('store_number');
Route::get('/number',[SmsController::class,'create'])->name('number');
Route::get('/', [MainController::class,'index']
)->name('homee');
Route::get('/panier/etat',[CommandeController::class,'etat'])->name('etatcommande');
//client
Route::get('/texting',[CartController::class,'text'])->name('texting');
Route::get('/commande',[CommandeController::class,'index'])->name('commande');
Route::get('/pay',[PaymentController::class,'index'])->name('payment');
Route::get('/produit/{id}',[MainController::class,'produit'])->name('produit');
Route::get('/categorie/{id}',[MainController::class,'categorieVue'])->name('categorie');
Route::get('/tag/{id}',[MainController::class,'tagvue'])->name('categorieTag');
Route::post('/panier/add/{id}',[CartController::class,'add'])->name('panier');
Route::get('/panier',[CartController::class,'indexC'])->name('index_carte');
Route::get('/panier/{id}',[CartController::class,'supprimer'])->name('supprimer');

Route::get('/client',[ClientController::class,'index'])->name('client');
Route::post('/client',[ClientController::class,'store'])->name('registration');
Route::get('/connection',[ClientController::class,'login'])->name('login');
Route::post('/vers',[ClientController::class,'vers'])->name('log');


//admin
Route::middleware('auth','isAdmin')->group(function()
{ Route::get('/admin/allcommande/{id}',[AdminController::class,'voiretat'])->name('voiretat');
    Route::post('/admin/etat/post',[AdminController::class,'storetat'])->name('storetat');
    Route::get('/admin/etat/{id}',[AdminController::class,'showetat'])->name('showetat');
Route::get('/admin/allCommande',[AdminController::class,'allcommande'])->name('allcommande');
Route::get('/categorieAll',[AdminController::class,'categorieAll'])->name('categorieall');
Route::post('/categorie_ad',[AdminController::class,'store'])->name('categoriead');
Route::get('/categorie',[AdminController::class,'categorie'])->name('categoriecre');
Route::get('/admin',[AdminController::class,'create'])->name('admin');
Route::get('/admin/{id}',[AdminController::class,'show'])->name('show');
Route::get('/produits',[AdminController::class,'produit'])->name('produitc');
Route::get('/produits/{id}',[AdminController::class,'produitvers'])->name('produitcate');
Route::POST('/save',[AdminController::class,'storeP'])->name('produitStore');
Route::get('/allClient',[AdminController::class,'showClients'])->name('showclients');
Route::PUT('/up_to_date/{id}/',[AdminController::class,'up_date'])->name('admin_edit_client');
Route::delete('/adminDeleteClient/{id}',[AdminController::class,'admindelete'])->name('admin_delete_client');
Route::get('/allClient/{id}',[Admincontroller::class,'showeditpage'])->name('editpageclient');
Route::get('/AllProduit',[AdminController::class,'showPr'])->name('showPr');
Route::delete('/AllProduit/{id}',[AdminController::class,'destroyPr'])->name('destroyPr');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
