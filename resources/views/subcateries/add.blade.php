@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/category/add.css') }}">
@section('content')
    <div id="container">
        <div id="title">
            <p>Add Sub Categories</p>
        </div>
        <form action="{{ route('subCategory.send', ['categoryId' => $category->idCategory]) }}" method="post">
            <div id="nameCategory">
                <label>Sub Category:</label>
                <input type="text" name="nameSubCategory" id="" required>
            </div>
            <div id="save">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
