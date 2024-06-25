<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;


Route::get('/contatos/search', [ContatoController::class, 'search'])->name('contatos.search');
Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->where('id', '[0-9]+')->name('contatos.destroy');
Route::put('/contatos/{id}', [ContatoController::class, 'update'])->where('id', '[0-9]+')->name('contatos.update');
Route::get('/contatos/{id}/edit', [ContatoController::class, 'edit'])->where('id', '[0-9]+')->name('contatos.edit');
Route::post('/contatos', [ContatoController::class, 'store'])->name('contatos.store');
Route::get('/contatos/create', [ContatoController::class, 'create'])->name('contatos.create');
Route::get('/contatos', [ContatoController::class, 'index'])->name('contatos.index');

// Route::fallback(function () {
//    return "Erro!"; 
// });

Route::get('/', function () {
    return view('welcome');
});
