@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/category/add.css') }}">
@section('content')
    <div id="title">
        <p>Add Categories</p>
    </div>
    <form action="{{ route('category.send', ['id' => $category->idStore]) }}" method="post">
        <div id="nameCategory">
            <label>Name Category:</label>
            <input type="text" name="nameCategory" id="" required>
        </div>
        <div id="save">
            <button type="submit">Save</button>
        </div>
    </form>
@endsection
