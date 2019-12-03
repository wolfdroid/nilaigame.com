@extends('layouts.app')

@section('content')

<div class="content">
    <div class="title m-b-md">
        Edit Product
    </div>
    {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Product Name')}}
            {{Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Product Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::number('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <div class="form-group">
            {{Form::label('developer_id', 'Developer ID')}}
            {{Form::number('developer_id', $product->developer_id, ['class' => 'form-control', 'placeholder' => 'Developer ID'])}}
        </div>
        <div class="form-group">
            {{Form::label('publisher_id', 'Publisherr ID')}}
            {{Form::number('publisher_id', $product->publisher_id, ['class' => 'form-control', 'placeholder' => 'Publisher ID'])}}
        </div>
        <div class="form-group">
            {{Form::label('release', 'Release Date')}}
            {{Form::date('release', $product->release, ['class' => 'form-control', 'placeholder' => 'Release Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $product->description, ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>

@endsection