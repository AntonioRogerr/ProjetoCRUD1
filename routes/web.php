<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->name('contatos.destroy');

Route::put('/contatos/{id}', [ContatoController::class, 'update'])->name('contatos.update');

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
