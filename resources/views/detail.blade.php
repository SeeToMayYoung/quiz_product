@extends('master')

@section('judul','Skin Detail')

@section('konten')
    <a class="top-nav" href="/"><< BACK TO STORE LIST</a>
    @if (($item['rarity'] == 'R'))
        <div class="product-container rbox">
            <a href='/product/{{$item['id']}}' >
                <img class="product-pic" src="{{ asset('images/' . $item['img']) }}" alt="">
                <h1>Name: {{$item['name']}}</h1>
                <p class="rarity-price">Rarity: {{$item['rarity']}}</p>
                <p class="rarity-price">Price: {{$item['price']}} VP</p>
                <p class="product-desc">{{$item['desc']}}</p>
            </a>
        </div>
        @elseif (($item['rarity'] == 'SR'))
        <div class="product-container srbox">
            <a href='/product/{{$item['id']}}' >
                <img class="product-pic" src="{{ asset('images/' . $item['img']) }}" alt="">
                <h1>Name: {{$item['name']}}</h1>
                <p class="rarity-price">Rarity: {{$item['rarity']}}</p>
                <p class="rarity-price">Price: {{$item['price']}} VP</p>
                <p class="product-desc">{{$item['desc']}}</p>
            </a>
        </div>
        @elseif(($item['rarity'] == 'SSR'))
        <div class="product-container ssrbox">
            <a href='/product/{{$item['id']}}' >
                <img class="product-pic" src="{{ asset('images/' . $item['img']) }}" alt="">
                <h1>Name: {{$item['name']}}</h1>
                <p class="rarity-price">Rarity: {{$item['rarity']}}</p>
                <p class="rarity-price">Price: {{$item['price']}} VP</p>
                <p class="product-desc">{{$item['desc']}}</p>
            </a>
        </div>
    @endif
@endsection
