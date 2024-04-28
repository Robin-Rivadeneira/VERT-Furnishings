<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('Category')->group(function(){
    Route::get('Add/{idStores}',[CategoryController:: class, 'Show'])->name('category.see');
    Route::post('Add/{id}',[CategoryController:: class, 'Send'])->name('category.send');
    Route::get('List/{id}',[CategoryController:: class, 'List']);
    Route::get('Update/{id}',[CategoryController:: class, 'ShowUpdate']);
    Route::post('Update/{id}',[CategoryController:: class, 'Update'])->name('category.update');
    Route::delete('Delete/{id}', [CategoryController::class, 'Delete'])->name('category.delete');
});
