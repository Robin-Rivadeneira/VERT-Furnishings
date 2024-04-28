@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/product/add.css') }}">
@section('content')
    <div id="title">
        <p>Add Product</p>
    </div>
    <form action="{{ route('product.send', ['id' => $categoryid->idStores]) }}" method="post" enctype="multipart/form-data">
        <div id="productImage">
            <label>Product Image:</label>
            <div id="cambioImagen">
                <img src="{{ asset('img/icons/noimagen.png') }}" id="imagenPrevisualizacion" />
            </div>
            <input type="file" name="productImage" id="seleccionArchivos" accept="image/*" required />
        </div>
        <div id="productName">
            <label>Product Name:</label>
            <input type="text" name="productName" id="">
        </div>
        <div id="productDescription">
            <label>Description:</label>
            <textarea name="productDescription" id=""></textarea>
        </div>
        <div id="productPrice">
            <label> Quantity:</label>
            <input type="text" name="availableQuantity" id="">
        </div>
        <div id="availableQuantity">
            <label>Product Price:</label>
            <input type="text" name="productPrice" id="">
        </div>
        <div id="productCategory">
            <label> Category:</label>
            <select name="idCategory" id="">
                @foreach ($category as $category)
                    <option value="{{ $category->idCategory }}">{{ $category->nameCategory }}</option>
                @endforeach
            </select>
        </div>
        <div id="productSubCategory">
            <label> Sub Category:</label>
            <select name="idSubCategory" id="">
                @foreach ($subcategory as $subcategory)
                    <option value="{{ $subcategory->idSubCategory }}">{{ $subcategory->nameSubCategory }}</option>
                @endforeach
            </select>
        </div>
        <div id="save">
            <button type="submit">Save</button>
        </div>
    </form>
@endsection
