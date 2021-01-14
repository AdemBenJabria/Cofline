<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Cofline\Blog\Http\Controllers\PostController;

//Loyout
Route::get('/test',[PostController::class,'test'])->name("test");
Route::get('/a',[PostController::class,'index'])->name('posts.index');
Route::post('/b',[PostController::class,'create'])->name('posts.create');
Route::get('/c',[PostController::class,'store'])->name('posts.store');
Route::get('/d',[PostController::class,'destroy'])->name('posts.destroy');
Route::get('/e',[PostController::class,'update'])->name('posts.update');


