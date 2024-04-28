@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/product/add.css') }}">
@section('content')
    <div id="title">
        <p>Detail Product</p>
    </div>
    <form action="{{ route('product.send', ['id' => $product->idProduct]) }}" method="post" enctype="multipart/form-data">
        <div id="productImage">
            <div id="cambioImagen">
                <img src="{{ asset('img/product/'. $product->productImage) }}" id="imagenPrevisualizacion" />
            </div>
        </div>
        <div id="productName">
            <label>Product Name:</label>
            <input type="text" name="productName" id="" value="{{$product->productName}}">
        </div>
        <div id="productDescription">
            <label>Description:</label>
            <textarea name="productDescription" id="">{{$product->productDescription}}</textarea>
        </div>
        <div id="availableQuantity">
            <label> Quantity:</label>
            <input type="text" name="availableQuantity" id="" value="{{$product->availableQuantity}}">
        </div>
        <div id="productPrice">
            <label>Product Price:</label>
            <input type="text" name="productPrice" id="" value="{{$product->productPrice}}">
        </div>
        <div id="save">
            <a href="{{ route('product.update', ['id' => $product->idProduct]) }}"><button type="button"><img
                        src="{{ asset('img/icons/update.png') }}"></button></a>
        </div>
    </form>
@endsection
