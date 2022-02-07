<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\configController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\tvaController;
use App\Http\Controllers\kwtherController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AccueilController;

use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\StockController;

use App\Http\Controllers\ConfigurationController;


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




Route::get('/ajoutfacture', [AchatController::class, 'facture']);
Route::get('/liste_fournisseur', [AchatController::class, 'fournisseur']);
Route::get('/liste_facture', [AchatController::class, 'factures']);


Route::get('/liste_bon_reception', [AchatController::class, 'receptionn']);
Route::get('/ajoutbon_reception', [AchatController::class, 'reception']);
Route::get('/suivi', [AchatController::class, 'suivi1']);

Route::get('/ajoutfournisseur', [AchatController::class, 'addfournisseur']);
Route::get('/modiffournisseur/{id}/', [AchatController::class, 'update']);


// get formulaire and add fournisseur and send the data 
Route::get('add-fournisseur',[AchatController::class, 'DisplForFour']);
Route::post('fournisseurpost', [AchatController::class, 'addfournisseurpost']);
Route::get('deletefournisseur/{id}', [AchatController::class, 'Deletlistefou']);
Route::get('deletefour/{id}', [AchatController::class, 'Deletefou']);
Route::get('deletelfact/{id}', [AchatController::class, 'deletefacture']);

// update data 
Route::get('/updatelfact/{id}',  [AchatController::class, 'MoUpdatefacture']);
Route::post('update-facture/{id}', [AchatController::class, 'Updatefacture']);

Route::get('updatelfour/{id}', [AchatController::class, 'MoUpdatefourinsseur']);
Route::post('updatelfournisseur/{id}', [AchatController::class, 'updatefournisseur']);

Route::get('updatelcmd/{id}', [AchatController::class, 'MoUpdateCmd']);
Route::post('Update-Commande/{id}', [AchatController::class, 'UpdateCommande']);



// get formulaire and add and delet  commande and send the data 
Route::get('/ajoutcommande', [AchatController::class, 'addcommande']);
Route::post('/commandepost', [AchatController::class, 'addcommandepost']);
Route::get('/liste_commande_fournisseur', [AchatController::class, 'commande']);




