<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $primaryKey = 'idSubCategory';
    protected $table = 'sub_categories';

    protected $fillable = [
        'nameSubCategory', 'stateSubCategory'
    ];

    protected $hiden = [];

    public $timestamps = false;
}
