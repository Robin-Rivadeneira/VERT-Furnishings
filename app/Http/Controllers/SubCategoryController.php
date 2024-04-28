<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController
{
    public function Show($id)
    {
        $category = Category::FindOrFail($id);
        return view('subcateries/add', ['category' => $category]);
    }

    public function Send(Request $request, $id)
    {

        $request->validate([
            'nameSubCategory' => 'required|string',
        ]);

        $subCategory = new SubCategory();
        $subCategory->nameSubCategory = $request->input('nameSubCategory');
        $subCategory->stateSubCategory = 'active';
        $subCategory->category_id = $id;

        $subCategory->save();

        return redirect('/SubCategory/List'. $id)->with('success', 'Sub Category created successfully.');
    }

    public function List($id)
    {
        $category = Category::where('idStores',$id)->first();
        $subCategory = SubCategory::where('stateSubCategory', 'active')->get();
        return view('subcateries/list', ['subCategory' => $subCategory], ['category' => $category]);
    }

    public function ShowUpdate($id)
    {
        $subCategory = SubCategory::FindOrFail($id);
        return view('subcateries/edit', ['subCategory' => $subCategory]);
    }

    public function Update(Request $request, $id)
    {
        $request->validate([
            'nameSubCategory' => 'required|string',
            'stateSubCategory' => 'required|string'
        ]);

        $subCategory = SubCategory::FindOrFail($id);
        $subCategory->Update([
            'nameSubCategory' => $request->input('nameSubCategory'),
            'stateSubCategory' => $request->input('stateSubCategory')
        ]);

        return redirect('/SubCategory/List'. $subCategory->category_id)->with('success', 'Sub Category update successfully.');
    }

    public function Delete($id)
    {
        $subCategory = SubCategory::findOrFail($id);

        if (!$subCategory) {
            return redirect()->route('subCategory.list')->with('error', 'Store not found.');
        }

        $subCategory->stateSubCategory = 'inactive';

        $subCategory->save();

        return redirect('/SubCategory/List'. $subCategory->category_id)->with('success', 'Sub Category Update successfully.');
    }
}
