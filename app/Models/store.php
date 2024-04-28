<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $primaryKey = 'idStore';
    protected $table = 'stores';

    protected $fillable = [
        'ImgStore', 'storeName', 'directory', 'cellphone', 'stateStore'
    ];

    protected $hidden = [];

    public $timestamps = false;
}
