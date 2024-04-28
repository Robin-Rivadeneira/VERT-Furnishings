@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/category/add.css') }}">
@section('content')
    <div id="title">
        <p>Update Categories</p>
    </div>
    <form action="{{ route('category.update', ['id' => $category->idCategory]) }}" method="post">
        <div id="nameCategory">
            <label>Name Category:</label>
            <input type="text" name="nameCategory" id="" value="{{ $category->nameCategory }}">
        </div>
        <div id="stateCategory">
            <label>State Category:</label>
            <input type="text" name="stateCategory" id="" value="{{ $category->stateCategory }}">
        </div>
        <div id="save">
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
