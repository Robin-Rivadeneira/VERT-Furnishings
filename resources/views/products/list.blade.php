@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/store/list.css') }}">
@section('content')
    <div id="title">
        <p>List Store's </p>
    </div>
    <div id="more">
        <a href="/Category/List/{{$categoryid->idStores}}"><button type="button"><img src="{{ asset('img/icons/more.png') }}"></button></a>
    </div>
    <div class="row">
        @foreach ($product as $product)
            <a href="/Product/Detail/{{$product->idProduct}}">
                <div id="card">
                    <div id="imgStore">
                        <img src="{{ asset('img/product/' . $product->productImage) }}">
                    </div>
                    <div id="dates">
                        <div id="storeName">
                            <input type="text" name="productName" id="" value="{{ $product->productName }}"
                                readonly>
                        </div>
                        <div id="directory">
                            <input type="text" name="availableQuantity" id=""
                                value="{{ $product->availableQuantity }}" readonly>
                        </div>
                        <div id="cellphone">
                            <input type="text" name="productPrice" id="" value="{{ $product->productPrice }}$"
                                readonly>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
