@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/product/add.css') }}">
@section('content')
    <div id="title">
        <p>Update Product</p>
    </div>
    <form action="{{ route('product.update', ['id' => $product->idProduct]) }}" method="post" enctype="multipart/form-data">
        <div id="productImage">
            <label>Product Image:</label>
            <div id="cambioImagen">
                <img src="{{ asset('img/product/'. $product->productImage) }}" id="imagenPrevisualizacion" />
            </div>
            <input type="file" name="productImage" id="seleccionArchivos" accept="image/*" required />
        </div>
        <div id="productName">
            <label>Product Name:</label>
            <input type="text" name="productName" id="" value="{{$product->productName}}">
        </div>
        <div id="productDescription">
            <label> Description:</label>
            <textarea name="productDescription" id="">{{$product->productDescription}}</textarea>
        </div>
        <div id="productPrice">
            <label> Quantity:</label>
            <input type="text" name="availableQuantity" id=""  value="{{$product->availableQuantity}}">
        </div>
        <div id="availableQuantity">
            <label> Price:</label>
            <input type="text" name="productPrice" id="" value="{{$product->productPrice}}">
        </div>
        <div id="productCategory">
            <label>Category:</label>
            <select name="idCategory" id="">
                @foreach ($category as $category)
                    <option value="{{ $category->idCategory }}">{{ $category->nameCategory }}</option>
                @endforeach
            </select>
        </div>
        <div id="productSubCategory">
            <label>Sub Category:</label>
            <select name="idSubCategory" id="">
                @foreach ($subCategory as $subCategory)
                    <option value="{{ $subCategory->idSubCategory }}">{{ $subCategory->nameSubCategory }}</option>
                @endforeach
            </select>
        </div>
        <div id="save">
            <button type="submit">Update</button>
        </div>
    </form>
    <script src="{{ asset('js/preview.js') }}"></script>
@endsection
