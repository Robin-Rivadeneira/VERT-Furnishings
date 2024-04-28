<?php

namespace App\Http\Controllers;

use App\Models\Store;

class IndexController
{
    public function index(){
        $stores = Store::all();
        return view('index', ['stores'=>$stores]);
    }
}