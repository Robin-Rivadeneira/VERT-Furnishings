<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('Product')->group(function(){
    Route::get('Add/{idStore}',[ProductController:: class, 'Show'])->name('product.show');
    Route::post('Add/{id}',[ProductController:: class, 'Send'])->name('product.send');
    Route::get('List/{id}',[ProductController:: class, 'List']);
    Route::get('Detail/{id}',[ProductController:: class, 'ShowDetail']);
    Route::get('Update/{id}',[ProductController:: class, 'ShowUpdate']);
    Route::post('Update/{id}',[ProductController:: class, 'Update'])->name('product.update');
    Route::delete('Delete/{id}', [ProductController::class, 'Delete'])->name('product.delete');
});
