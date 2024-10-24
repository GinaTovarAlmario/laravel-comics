<?php

use Illuminate\Support\Facades\Route;

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

// rotta per la homepage

Route::get('/', function () {
    return view('pages.home');
})->name("home-page");

// nuova rotta per andare a visualizzare la pagina index di comics

Route::get('/comics', function () {
    // devo recuperare i dati
    $comics = config("db");

    return view('comics.index', compact("comics"));
})->name("comics.index");

// una nuova rotta per la visualizzazione del singolo comic
Route::get('/comics/{index}', function(string $index){
    $comics = config('db');
    if (isset($comics[$index])){
        // prendo il singolo elemento
        $comic = $comics[$index];
        // ritorno la view dell'elemento considerato
        return view ('comics.show',compact('comic'));
    } else {
        // mostra un errore
        abort(404);
    }
})->name("comics.show");
