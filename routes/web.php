<?php

use App\Http\Controllers\Administration\AdminController;
use App\Http\Controllers\Administration\OrdersController;
use App\Http\Controllers\Administration\ProductsController;
use App\Http\Controllers\Administration\UsersController;
use App\Http\Controllers\Administration\VendorsController;
use App\Http\Controllers\App\AppController;
use App\Http\Controllers\App\BlogController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Shop\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', [AppController::class, 'index'])->name('accueil');
Route::get('vendeurs', [AppController::class, 'vendor'])->name('vendeur');
Route::get('vendeur/{vendeur_id}', [AppController::class, 'singleVendor'])->name('singleVendor');
Route::get('a-propos', [AppController::class, 'a_propos'])->name('a_propos');
Route::get('contact', [AppController::class, 'contact'])->name('contact');
Route::get('boutique', [ShopController::class, 'index'])->name('shop');
Route::get('boutique/{product_id}', [ShopController::class, 'singleProduct'])->name('product');
Route::get('panier', [ShopController::class, 'panier'])->name('panier');
Route::get('checkout', [ShopController::class, 'checkout'])->name('checkout');
Route::get('list-souhait', [ShopController::class, 'liste_souhait'])->name('liste_souhait');

// ------------------------------------------ Gestion des comptes utilisateurs -------------------------------------------------------

Route::get('se-connecter', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('compte-client', [ClientController::class, 'index'])->name('compte.client');
Route::get('super-admin', [AdminController::class, 'index'])->name('super.admin');

// ---------------------------------------------- Gestion des utilisateurs -----------------------------------------------------------

Route::get('utilisateurs', [UsersController::class, 'users'])->name('admin.utilisateurs');
Route::get('detail-utilisateur/{id_utilisateur}', [UsersController::class, 'userProfile'])->name('admin.detail.utilisateurs');


// ----------------------------------------------- Gestion des Vendeurs --------------------------------------------------------------

Route::get('agents-commerciaux', [VendorsController::class, 'vendor'])->name('admin.agents.commerciaux');
Route::get('detail-agent-commercial/{id_agent}', [VendorsController::class, 'vendorProfile'])->name('admin.detail.agent.commercial');


// ----------------------------------------------- Gestion des Commandes -------------------------------------------------------------

Route::get('commandes', [OrdersController::class, 'commandes'])->name('admin.commandes');
Route::get('nouvelle-commande', [OrdersController::class, 'ajoutCommande'])->name('admin.ajout.commande');
Route::get('detail-commande', [OrdersController::class, 'detailCommande'])->name('admin.detailCommande');
Route::get('historique-commande', [OrdersController::class, 'historiqueCommande'])->name('admin.historique.Commande');
Route::get('facture', [OrdersController::class, 'invoice'])->name('admin.invoice');

// ----------------------------------------------- Gestion des Produits --------------------------------------------------------------

Route::get('mes-produits', [ProductsController::class, 'produits'])->name('admin.produits');
Route::get('nouveau-produit', [ProductsController::class, 'ajouterProduit'])->name('admin.ajouter.produit');
Route::get('detail-produit/{id_produit}', [ProductsController::class, 'detailProduit'])->name('admin.detail.produit');

Route::get('categorie', [ProductsController::class, 'categorie'])->name('admin.categorie');
Route::get('sous-categorie', [ProductsController::class, 'sousCategorie'])->name('admin.sous.categorie');

// ----------------------------------------------- -------------------- --------------------------------------------------------------

Route::get('commentaires', [AdminController::class, 'reviews'])->name('admin.reviews');
Route::get('marques', [AdminController::class, 'brands'])->name('admin.brand');
Route::get('compte-client', [ClientController::class, 'index'])->name('compte.client')
    ->middleware('auth');
// Route::resource('panier','CartController')->only(['index','store', 'update', 'destroy']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


//contactForm
//Route::get('/contact', 'App\Http\Controllers\ContactForm@createform');
Route::post('/contact', 'App\Http\Controllers\ContactForm@contactform');
//Route::get('contact', [AppController::class, 'contact'])->name('contact');
