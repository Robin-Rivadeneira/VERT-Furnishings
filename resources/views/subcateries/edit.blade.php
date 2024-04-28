@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/category/add.css') }}">
@section('content')
    <div id="container">
        <div id="title">
            <p>Update Sub Categories</p>
        </div>
        <form action="{{ route('subCategory.update', ['id' => $subCategory->idSubCategory]) }}" method="post">
            <div id="nameCategory">
                <label>Sub Category:</label>
                <input type="text" name="nameSubCategory" id="" value="{{$subCategory->nameSubCategory}}">
            </div>
            <div id="stateCategory">
                <label>State:</label>
                <input type="text" name="stateSubCategory" id="" value="{{$subCategory->stateSubCategory}}">
            </div>
            <div id="save">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
