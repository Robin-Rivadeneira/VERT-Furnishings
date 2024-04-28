<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;

class CategoryController
{
    public function Show($id)
    {
        $category = Store::findOrFail($id);
        return view('categories/add',  ['category' => $category]);
    }

    public function Send(Request $request, $id)
    {
        $request->validate([
            'nameCategory' => 'required|string',
        ]);

        $category = new Category();
        $category->nameCategory = $request->input('nameCategory');
        $category->stateCategory = 'active';
        $category->idStores = $id;

        $category->save();

        return redirect('/Category/List/'+$id)->with('success', 'Category created successfully.');
    }

    public function List()
    {
        $category = Category::where('stateCategory', 'active')->get();
        return view('categories/list', ['category' => $category]);
    }

    public function ShowUpdate($id)
    {
        $category = Category::findOrFail($id);
        return view('categories/edit', ['category' => $category]);
    }

    public function Update(Request $request, $id)
    {
        $request->validate([
            'nameCategory' => 'required|string',
            'stateCategory' => 'required|string'
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'nameCategory' => $request->input('nameCategory'),
            'stateCategory' => $request->input('stateCategory')

        ]);

        return redirect('/Category/List')->with('success', 'Category Update successfully.');
    }

    public function Delete($id)
    {
        $category = Category::findOrFail($id);

        if (!$category) {
            return redirect()->route('category.list')->with('error', 'Store not found.');
        }

        $category->stateCategory = 'inactive';

        $category->save();

        return redirect('/Category/List')->with('success', 'Category Update successfully.');
    }
}
