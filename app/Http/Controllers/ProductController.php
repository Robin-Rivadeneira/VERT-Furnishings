<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController
{
    public function Show($id)
    {
        $categoryid = Category::where('idStores', $id)->first();
        $category = Category::where('idStores', $id)->get();
        $subCategory = SubCategory::all();
        return view('products/add', ['categoryid' => $categoryid, 'category' => $category, 'subcategory' => $subCategory]);
    }

    public function Send(Request $request, $id)
    {
        $request->validate([
            'productImage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'productName' => 'required|string',
            'productDescription' => 'nullable|string',
            'productPrice' => 'required|numeric',
            'availableQuantity' => 'nullable|integer',
            'idCategory' => 'nullable|exists:categories,idCategory',
            'idSubCategory' => 'nullable|exists:subcategories,idSubCategory',
        ]);

        $imagenProducto = $request->file('productImage');
        $nombreImagen = $imagenProducto->getClientOriginalName();
        $imagenProducto->move(public_path('img/product/'), $nombreImagen);


        $product = new Products();
        $product->productImage = $nombreImagen;
        $product->productName = $request->input('productName');
        $product->productDescription = $request->input('productDescription');
        $product->productPrice = $request->input('productPrice');
        $product->availableQuantity = $request->input('availableQuantity');
        $product->idCategory = $request->input('idCategory');
        if ($request->has('idSubCategory') && $request->input('idSubCategory') != null) {
            $product->idSubCategory = $request->input('idSubCategory');
        } else {
            $product->idSubCategory = null;
        }
        $product->productStatus = 'active';
        $product->idStore = $id;
        $product->save();

        return redirect('/Product/List/' . $id)->with('success', 'Product created successfully.');
    }


    public function ShowUpdate($id)
    {
        $category = Category::all();
        $subCategory = SubCategory::all();
        $product = Products::findOrFail($id);
        return view('products/edit', ['product' => $product, 'category' => $category, 'subCategory' => $subCategory]);
    }

    public function Update(Request $request, $id)
    {
        $request->validate([
            'productImage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'productName' => 'required|string',
            'productDescription' => 'nullable|string',
            'productPrice' => 'required|numeric',
            'availableQuantity' => 'nullable|integer',
            'idCategory' => 'nullable|exists:categories,idCategory',
            'idSubCategory' => 'nullable|exists:subcategories,idSubCategory',
        ]);

        $product = Products::findOrFail($id);

        if ($request->hasFile('productImage')) {
            $imagenProducto = $request->file('productImage');
            $nombreImagen = time() . '.' . $imagenProducto->getClientOriginalExtension();
            $imagenProducto->move(public_path('img/product'), $nombreImagen);

            if (file_exists(public_path('img/product') . '/' . $product->productImage)) {
                unlink(public_path('img/product') . '/' . $product->productImage);
            }

            $product->productImage = $nombreImagen;
        }

        $product->productName = $request->input('productName');
        $product->productDescription = $request->input('productDescription');
        $product->productPrice = $request->input('productPrice');
        $product->availableQuantity = $request->input('availableQuantity');
        $product->idCategory = $request->input('idCategory');
        $product->idSubCategory = $request->input('idSubCategory');
        $product->save();

        return redirect('/Product/List/'. $product->idStore)->with('success', 'Product updated successfully.');
    }

    public function ShowDetail($id)
    {
        $product = Products::FindOrFail($id);
        return view('products/detail', ['product' => $product]);
    }

    public function List($id)
    {
        $categoryid = Category::where('idStores', $id)->first();
        $product = Products::where('idStore', $id)->get();
        return view('products/list', ['product' => $product], ['categoryid' => $categoryid]);
    }

    public function Delete($id)
    {
        $product = Products::findOrFail($id);

        if (!$product) {
            return redirect()->route('Product.list')->with('error', 'Product not found.');
        }

        $product->productStatus = 'inactive';

        $product->save();
    }
}
