@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/category/list.css') }}">
@section('content')
    <div id="title">
        <p>List Sub Categories</p>
    </div>
    <div id="more">
        <a href="/Category/List/{{$category->idStores}}"><button type="button"><img src="{{ asset('img/icons/more.png') }}"></button></a>
    </div>
    @foreach ($subCategory as $subCategory)
        <div id="card">
            <div id="nameCategory">
                <label>Name Sub Category:</label>
                <input type="text" name="" id="" value="{{ $subCategory->nameSubCategory }}" readonly>
            </div>
            <div id="stateCategory">
                <label>State Sub Category:</label>
                <input type="text" name="" id="" value="{{ $subCategory->stateSubCategory }}" readonly>
            </div>
            <div id="update">
                <a href="{{ route('subCategory.update', ['id' => $subCategory->idSubCategory]) }}"><button
                        type="button"><img src="{{ asset('img/icons/update.png') }}"></a>
            </div>
            <div id="delete">
                <form action="{{ route('subCategory.delete', ['id' => $subCategory->idSubCategory]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit"><img src="{{ asset('img/icons/delete.png') }}"></button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
