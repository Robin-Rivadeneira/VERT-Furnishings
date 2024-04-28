@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/store/add.css') }}">
@section('content')
    <div id="title">
        <p>Update Store's</p>
    </div>
    <form action="{{ route('store.update', ['id' => $store->idStore]) }}" method="post">
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
                <input type="text" name="storeName" id="" value="{{ $store->storeName }}">
            </div>
            <div id="directory">
                <label>Store's Directory</label>
                <input type="text" name="directory" id="" value="{{ $store->directory }}">
            </div>
            <div id="cellphone">
                <label>store's cellphone</label>
                <input type="text" name="cellphone" id="" value="{{ $store->cellphone }}">
            </div>
            <div id="save">
                <button type="submit">Update</button>
            </div>
        </div>
    </form>
@endsection
