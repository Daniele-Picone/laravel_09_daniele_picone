<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage']
)->name('homepage');

Route::get('/aggiungiArticoli', [ArticleController::class,'showForm'])->name('add.articles')->middleware('auth');

Route::post( '/articles_create' , [ArticleController::class, 'store'])->name('articles.storage');

Route::get('articoli' , [ArticleController::class, 'articles'])->name('articles');

Route::get('/article/dettagli/{id}', [ArticleController::class, 'dettaglio'])->name('article.detail');

Route::get('welcome/lounge', [PublicController::class, 'lounge'])->name('lounge');


// Rotte per update articolo 

Route::get('/article/update/{id}', [ArticleController::class, 'edit'])->name('article.edit');

Route::put('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');

// Rotte per cancellare articolo
Route::delete('/article/delete/{id}', [ArticleController::class, 'delete'])->name('articles.delete');

// annunci 
Route::get('/aggiungiAnnunci', [PublicController::class, 'annunci_form'])->name('annunci.form')->middleware('auth');
Route::post( '/annunci/create' , [PublicController::class, 'annunci_storage'])->name('annunci.storage');
Route::get('annunci' , [PublicController::class, 'annunci'])->name('annunci');



Route::delete('/annunci/delete/{id}', [PublicController::class, 'delete_annunci'])->name('annunci.delete');