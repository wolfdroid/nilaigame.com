@extends('layouts.app')

@section('content')

<div class="content">
    <div class="title m-b-md">
        <h1>Products</h1>
    </div>
    <hr>
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="card">
            <h3><a href="/nilaigame2/public/products/{{$product->id}}">{{$product->name}}</a></h3>
            <small>Released on {{$product->release}}</small>
            <h3>Score: {{$product->avg_score}}</h3>
            </div>
            <br>
        @endforeach
        {{$products->links()}}
    @else 
        <p>No Products found</p>
    @endif
</div>

@endsection