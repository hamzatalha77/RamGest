<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\FornisseurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EntreeController;
use App\Http\Controllers\SortieController;
use App\Http\Controllers\ReteurController;
use App\Http\Controllers\LoginController;
use App\Models\Categorie;
use App\Models\Stock;
use App\Models\Entree;
use App\Models\Sortie;
use App\Models\Fornisseur;
use App\Models\Client;
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

Route::get('/', function () {
    return redirect(route('login'));
});
Route::get('logout',[LoginController::class,'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    $stocks=Stock::all();
    $pieces=Stock::get()->sum('quantite');
    $todayDate = date("Y-m-d");
    $sortie_pieces=Sortie::whereDate('created_at',$todayDate)->get()->sum('quantite');
    $entree_pieces=Entree::whereDate('created_at',$todayDate)->get()->sum('quantite');
    $montant= DB::table('stocks')
    ->select(DB::raw('sum(prix * quantite) as total'))
    ->first();
    $categories=Categorie::all();
    $fornisseurs=Fornisseur::all();
    return view('stock')->with('stocks',$stocks)->with('categories',$categories)->with('fornisseurs',$fornisseurs)
                        ->with('pieces',$pieces)->with('montant',$montant)
                        ->with('sortie_pieces',$sortie_pieces)->with('entree_pieces',$entree_pieces);
})->name('dashboard');

Route::get('/choice', function () {
    $clients=Client::all();
    return view('choice')->with('clients',$clients);
})->name('choice');
Route::resource('stock',StockController::class);
Route::resource('reteur',ReteurController::class);
Route::resource('entree',EntreeController::class);
Route::resource('sortie',SortieController::class);
Route::resource('fornisseur',FornisseurController::class);
Route::resource('client',ClientController::class);
Route::resource('categorie',CategorieController::class);
Route::post('/facture_reteur',[ReteurController::class,'facture_reteur'])->name('facture_reteur');
Route::post('/facture_entree',[EntreeController::class,'facture_entree'])->name('facture_entree');
Route::post('/facture_sortie',[SortieController::class,'facture_sortie'])->name('facture_sortie');
// Route::get('/register', function () {
//     return redirect(route('login'));
// });
