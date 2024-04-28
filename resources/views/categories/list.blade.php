@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/category/list.css') }}">
@section('content')
    <div id="title">
        <p>List Categories</p>
    </div>
    <div id="more">
        <a href="/Store/List"><button type="button"><img src="{{ asset('img/icons/more.png') }}"></button></a>
    </div>
    <div class="row">
        @foreach ($category as $category)
            <div id="card">
                <div id="nameCategory">
                    <input type="text" name="" id="" value="{{ $category->nameCategory }}" readonly>
                </div>
                <div id="stateCategory">
                    <label>State Category:</label>
                    <input type="text" name="" id="" value="{{ $category->stateCategory }}" readonly>
                </div>
                <div id="continue">
                    <a href="{{ route('product.show', ['idStore' => $category->idStores]) }}"><button type="button">
                            <img src="{{ asset('img/icons/continue.png') }}">
                        </button></a>
                </div>
                <div id="subCategorys">
                    <a href="{{ route('category.show', ['categoryId' => $category->idCategory]) }}">
                        <button type="button">Add Subcategory</button>
                    </a>
                </div>
                <div id="update">
                    <a href="{{ route('category.update', ['id' => $category->idCategory]) }}"><button type="button"><img
                                src="{{ asset('img/icons/update.png') }}"></button></a>
                </div>
                <div id="delete">
                    <form action="{{ route('category.delete', ['id' => $category->idCategory]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"><img src="{{ asset('img/icons/delete.png') }}"></button>
                    </form>
                </div>
        @endforeach
    </div>
@endsection
