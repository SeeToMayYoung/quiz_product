@extends('master')

@section('judul','Valorant Store')

@section('konten')
<p class="top-nav">VALORANT STORE</p>
<div class="container">
    @foreach ($product as $item)
        @if (($item['rarity'] == 'R'))
            <div class="product-container rbox">
                <a href='/product/{{$item['id']}}' >
                    <img class="product-pic" src="{{ asset('images/' . $item['img']) }}" alt="">
                    <h1>{{$item['name']}}</h1>
                    <p class="rarity-price">{{$item['rarity']}} // {{$item['price']}} VP</p>
                </a>
            </div>
        @elseif (($item['rarity'] == 'SR'))
            <div class="product-container srbox">
                <a href='/product/{{$item['id']}}' >
                    <img class="product-pic" src="{{ asset('images/' . $item['img']) }}" alt="">
                    <h1>{{$item['name']}}</h1>
                    <p class="rarity-price">{{$item['rarity']}} // {{$item['price']}} VP</p>
                </a>
            </div>
        @elseif(($item['rarity'] == 'SSR'))
            <div class="product-container ssrbox">
                <a href='/product/{{$item['id']}}' >
                    <img class="product-pic" src="{{ asset('images/' . $item['img']) }}" alt="">
                    <h1>{{$item['name']}}</h1>
                    <p class="rarity-price">{{$item['rarity']}} // {{$item['price']}} VP</p>
                </a>
            </div>
        @endif
    @endforeach
</div>
@endsection
