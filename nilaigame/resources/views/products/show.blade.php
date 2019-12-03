@extends('layouts.app')

@section('content')
<!-- 
{{$ave = App\Review::select('product_id', DB::raw('avg(score) as avg_score'))
        ->where('product_id', $product->id)
        ->groupBy('product_id')
        ->first()}}
        
{{$reviews = App\Review::where('product_id', $product->id)->get()}}

{{$users = App\User::select('id as user_id', 'name as user_name')->get()}}

-->
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
        <h3>Score: {{$ave->avg_score}}</h3>
    </div> 
    <div style="background-color:lightred">
        @foreach($reviews as $review)
        <div class="card">
            <h3>{{$user = App\User::where('id', $review->user_id)->value('name')}}</h3>
            <h3>{{$review->score}}</h3>
            <p>{{$review->comment}}</p>
        </div>
        <br>
    @endforeach
    </div>
    <hr>
    @auth
    {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('score', 'score')}}
            {{Form::number('score', '', ['class' => 'form-control', 'placeholder' => 'score', 'min'=>1, 'max'=>10])}}
        </div>
        <!-- temporary -->
        {{Form::hidden('product_id', $product->id) }}
        
        <div class="form-group">
            {{Form::label('comment', 'comment')}}
            {{Form::textarea('comment', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Please describe what you liked or disliked about this product and wheter you recommend it to others'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}    
    @endauth

    <a href="/nilaigame2/public/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
    
    {!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
</div>
@endsection  