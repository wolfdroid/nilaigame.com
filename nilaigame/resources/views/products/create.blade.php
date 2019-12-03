@extends('layouts.app')

@section('content')

<div class="content">
    <div class="title m-b-md">
        Post Product
    </div>
    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Product Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Product Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <div class="form-group">
            {{Form::label('developer_id', 'Developer ID')}}
            {{Form::number('developer_id', '', ['class' => 'form-control', 'placeholder' => 'Developer ID'])}}
        </div>
        <div class="form-group">
            {{Form::label('publisher_id', 'Publisherr ID')}}
            {{Form::number('publisher_id', '', ['class' => 'form-control', 'placeholder' => 'Publisher ID'])}}
        </div>
        <div class="form-group">
            {{Form::label('release', 'Release Date')}}
            {{Form::date('release', '', ['class' => 'form-control', 'placeholder' => 'Release Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>

@endsection