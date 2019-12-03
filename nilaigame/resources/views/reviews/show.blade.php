@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">
        <h1>{{$product->name}}</h1>
    </div>
    <div style="background-color:lightblue">
        <small>Release Date {{$product->release}}</small>
        <h3>Price: {{$product->price}}</h3>
        <h3>Developer: {{$product->developer_id}}</h3>
        <h3>Publisher: {{$product->publisher_id}}</h3>
        <p>Description: {{$product->description}}</p>
    </div> 
    <hr>
    <a href="/nilaigame2/public/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
    
    {!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
</div>
@endsection  