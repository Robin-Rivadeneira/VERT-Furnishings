<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $primaryKey = 'idCategory';
    protected $table = 'categories';

    protected $fillable = [
        'nameCategory', 'stateCategory'
    ];

    protected $hiden = [];

    public $timestamps = false;
}
