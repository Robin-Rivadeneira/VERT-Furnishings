@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/store/list.css') }}">
@section('content')
    <div id="title">
        <p>List Store's </p>
    </div>
    <div id="more">
        <a href="/Store/Add"><button type="button"><img src="{{ asset('img/icons/more.png') }}"></button></a>
    </div>
    <div class="row">
        @foreach ($stores as $store)
            <div id="card">
                <div id="imgStore">
                    <img src="{{ asset('img/store/' . $store->ImgStore) }}">
                </div>
                <div id="dates">
                    <div id="storeName">
                        <input type="text" name="storeName" id="" value="{{ $store->storeName }}" readonly>
                    </div>
                    <div id="directory">
                        <input type="text" name="directory" id="" value="{{ $store->directory }}" readonly>
                    </div>
                    <div id="cellphone">
                        <input type="text" name="cellphone" id="" value="{{ $store->cellphone }}" readonly>
                    </div>
                    <div id="continue">
                        <a href="{{ route('category.see', ['idStores' => $store->idStore]) }}">
                            <button type="button">
                                <img src="{{ asset('img/icons/continue.png') }}">
                            </button>
                        </a>
                    </div>
                    <div id="update">
                        <a href="{{ route('store.update', ['id' => $store->idStore]) }}"><button type="button"><img
                                    src="{{ asset('img/icons/update.png') }}"></button></a>
                    </div>
                    <div id="delete">
                        <form action="{{ route('store.delete', ['id' => $store->idStore]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"><img src="{{ asset('img/icons/delete.png') }}"></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
