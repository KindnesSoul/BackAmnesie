<?php
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::get('/saga/liste')->name('listeSagas');
Route::get("/saga/new")->name("preNewSagas");
Route::put("/saga/new/{id?}")->name("createUpdateSagas");
Route::delete("saga/supprimer/{id}")->name("deleteSagas");

Route:: get("/livre/liste/{Titre}")->name("listeLivre");
Route::get("/livre/new")->name("preNewLivres");
Route::put("/livre/new/{id?}")->name("createUpdateLivres");
Route::delete("/livre/supprimer/{id}")->name("deleteLivres");


Route::get('/blogJournal/liste')->name('listeBlogJournaux');

Route::get('/blogJournal/new/')->name('preNewBlogJournaux');
Route::put("/blogJournal/new/{id?}")->name("createUpdateBlogJournaux");
Route::delete("/blogJournal/supprimer/{id}")->name('deleteBlogJournaux');

Route::get('/message/liste/{titre}')->name('listeMessage'); //plutot que mettre un id mettre le titre du blog ou du livre
Route::put("/message/{id?}")->name('createUpdateBlogJournaux');
Route::delete("/message/supprimer")->name("deleteMessage");
