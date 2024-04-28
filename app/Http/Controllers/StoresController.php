<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoresController
{
    public function Show()
    {
        return view('store/add');
    }

    public function Send(Request $request)
    {

        $request->validate([
            'storeName' => 'required|string',
            'directory' => 'nullable|string',
            'cellphone' => 'nullable|string',
            'ImgStore' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($request->hasFile('ImgStore')) {
            $imagenProducto = $request->file('ImgStore');
            $nombreImagen = $imagenProducto->getClientOriginalName();
            $imagenProducto->move(public_path('img/store'), $nombreImagen);
        } else {
            $nombreImagen = null;
        }

        $store = new Store();
        $store->ImgStore = $nombreImagen;
        $store->storeName = $request->input('storeName');
        $store->directory = $request->input('directory');
        $store->cellphone = $request->input('cellphone');
        $store->stateStore = 'active';

        $store->save();

        return redirect('/Store/List')->with('success', 'Store created successfully.');
    }

    public function List()
    {
        $stores = Store::where('stateStore', 'active')->get();
        return view('index', ['stores' => $stores]);
    }

    public function ShowUpdate($id)
    {
        $store = Store::findOrFail($id);
        return view('store/edit', ['store' => $store]);
    }

    public function Update(Request $request, $id)
    {
        $request->validate([
            'ImgStore' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'storeName' => 'required|string',
            'directory' => 'nullable|string',
            'cellphone' => 'nullable|string',
        ]);

        $store = Store::findOrFail($id);

        if ($request->hasFile('ImgStore')) {
            $imagenProducto = $request->file('ImgStore');
            $nombreImagen = time() . '.' . $imagenProducto->getClientOriginalExtension();
            $imagenProducto->move(public_path('img/store'), $nombreImagen);

            if (file_exists(public_path('img/store') . '/' . $store->imageName)) {
                unlink(public_path('img/store') . '/' . $store->imageName);
            }

            $store->imageName = $nombreImagen;
        }


        $store->update([
            'storeName' => $request->input('storeName'),
            'directory' => $request->input('directory'),
            'cellphone' => $request->input('cellphone'),
        ]);

        return redirect('/Store/List')->with('success', 'Store updated successfully.');
    }

    public function Delete($id)
    {
        $store = Store::findOrFail($id);

        if (!$store) {
            return redirect()->route('store.list')->with('error', 'Store not found.');
        }

        $store->stateStore = 'inactive';

        $store->save();

        return redirect('/Store/List')->with('success', 'Store deleted successfully.');
    }
}
