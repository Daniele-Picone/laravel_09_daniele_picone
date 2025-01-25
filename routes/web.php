<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage']
)->name('homepage');

Route::get('/aggiungiArticoli', [PublicController::class,'showForm'])->name('add.articles')->middleware('auth');

Route::post( '/articles_create' , [PublicController::class, 'store'])->name('articles.storage');

Route::get('articoli' , [PublicController::class, 'articles'])->name('articles');

Route::get('/article/dettagli/{id}', [PublicController::class, 'dettaglio'])->name('article.detail');

Route::get('welcome/lounge', [PublicController::class, 'lounge'])->name('lounge');
