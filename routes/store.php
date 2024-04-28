<?php

use App\Http\Controllers\StoresController;
use Illuminate\Support\Facades\Route;

Route::prefix('Store')->group(function(){
    Route::get('Add',[StoresController:: class, 'Show']);
    Route::post('Add',[StoresController:: class, 'Send'])->name('store.send');
    Route::get('List',[StoresController:: class, 'List']);
    Route::get('Update/{id}',[StoresController:: class, 'ShowUpdate']);
    Route::post('Update/{id}', [StoresController::class, 'Update'])->name('store.update');
    Route::delete('Delete/{id}', [StoresController::class, 'Delete'])->name('store.delete');
});
