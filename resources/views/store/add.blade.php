@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/store/add.css') }}">
@section('content')
    <div id="title">
        <p>Add Store's</p>
    </div>
    <form action="{{ route('store.send') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div id="dates">
            <div id="ImgStore">
                <label>Store's' Image:</label>
                <div id="cambioImagen">
                    <img src="{{ asset('img/icons/noimagen.png') }}" id="imagenPrevisualizacion" />
                </div>
                <input type="file" name="ImgStore" id="seleccionArchivos" accept="image/*" required />
            </div>
            <div id="storeName">
                <label>Store's Name:</label>
                <input type="text" name="storeName" id="" required>
            </div>
            <div id="directory">
                <label>Store's Directory:</label>
                <input type="text" name="directory" id="">
            </div>
            <div id="cellphone">
                <label>store's cellphone:</label>
                <input type="text" name="cellphone" id="">
            </div>
            <div id="save">
                <button type="submit">Save</button>
            </div>
        </div>
    </form>
@endsection
