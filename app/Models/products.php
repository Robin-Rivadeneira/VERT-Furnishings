<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $primaryKey = 'idProduct';
    protected $table = 'products';

    protected $fillable = [
        'productImage', 'productName', 'productDescription', 'productPrice', 'availableQuantity', 'productCategory', 'productStatus'
    ];

    protected $hidden = [];

    public $timestamps = false;
}
