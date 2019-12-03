@extends('layouts.app')

@section('content')

<div class="content">
    <div class="title m-b-md">
        Post Review
    </div>
    {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('score', 'score')}}
            {{Form::number('score', '', ['class' => 'form-control', 'placeholder' => 'score', 'min'=>1, 'max'=>10])}}
        </div>
        <!-- temporary  -->
        <div class="form-group">
            {{Form::label('product_id', 'product_id')}}
            {{Form::number('product_id', '', ['class' => 'form-control', 'placeholder' => 'product id'])}}
        </div>      
        <div class="form-group">
            {{Form::label('comment', 'comment')}}
            {{Form::textarea('comment', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Please describe what you liked or disliked about this product and wheter you recommend it to others'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>

@endsection