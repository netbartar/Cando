@extends('layout.master')

@section('title')
    product details

@endsection

@section('content')
    <br><br>
    <div class="card card-nav-tabs">
        <h4 class="card-header card-header-info">{{$product->title}}</h4>
        <div class="card-body">
            <h4 class="card-title">price: {{$product->price}}</h4>
            <h4 class="card-title">count: {{$product->total_count}}</h4>
            <h4 class="card-title">category: {{$product->category}}</h4>
            <p class="card-text">{{$product->description}}.</p>
        </div>
    </div>
@endsection
