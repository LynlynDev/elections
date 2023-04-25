<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;

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

    Route::get('/', function () {
        return view('welcome');
        });
    Route::get('/region_create', function () {                          //le chemin d'accès qui s'affichera sur l'URL
        return view('index');                                           //le nom du fichier blade dans lequel la route doit nous rediriger
        });

    

    Route::get("/region_create", [RegionController::class, "index"]);
    Route::post("/region_insert", [RegionController::class, "store"]);
    Route::get("/region_liste", [RegionController::class, "create"]);
    Route::get("/region_delete/{id}", [RegionController::class, "destroy"]);
    Route::get("/form_update_region/{id}", [RegionController::class, "edit"]);
    




















// Route::post('/region_insert', function () {                        //le chemin d'accès qui s'affichera sur l'URL
    // return view('formulaire_region');                              //le nom du fichier blade dans lequel la route doit nous rediriger
    // // return "Nous avons bien reçu votre région qui est : " . request('region');
    // });


    // Route::get('/formulaire_region', function () {                          //le chemin d'accès qui s'affichera sur l'URL
    //     return view('formulaire_region');                                           //le nom du fichier blade dans lequel la route doit nous rediriger
    // });
    // Route::post('/formulaire_region', function () {                          //le chemin d'accès qui s'affichera sur l'URL
    //     return view('formulaire_region');                                           //le nom du fichier blade dans lequel la route doit nous rediriger
    // });
// Route::post('region_insert', 'RegionController@formulaire_region');






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get("/region_create", [app\Http\Controllers\RegionController:class, "formulaire_region"])->name('formulaire_region');
// Route::post('/region_insert', function () {
//     return "Nous avons bien reçu votre région qui est : " . request('region');
// });

