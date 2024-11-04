<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::controller(NoteController::class)->group(function () {
    Route::get('/', 'index')->name('notes.index');
    Route::get('/create', 'create')->name('notes.create');
    Route::get('/show/{id}', 'show')->name('notes.show');
    Route::get('/edit/{id}', 'edit')->name('notes.edit');

    Route::post('/store', 'store')->name('notes.store');
    Route::put('/update/{id}', 'update')->name('notes.update');
    Route::delete('/store/{id}', 'destroy')->name('notes.destroy');
});