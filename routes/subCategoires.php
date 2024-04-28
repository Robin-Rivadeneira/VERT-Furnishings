<?php

use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('SubCategory')->group(function(){
    Route::get('Add/{categoryId}', [SubCategoryController::class, 'Show'])->name('category.show');
    Route::post('Add/{categoryId}',[SubCategoryController:: class, 'Send'])->name('subCategory.send');
    Route::get('List/{id}',[SubCategoryController:: class, 'List']);
    Route::get('Update/{id}',[SubCategoryController:: class, 'ShowUpdate']);
    Route::post('Update/{id}',[SubCategoryController:: class, 'Update'])->name('subCategory.update');
    Route::delete('Delete/{id}', [SubCategoryController::class, 'Delete'])->name('subCategory.delete');
});
