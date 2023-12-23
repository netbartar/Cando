@extends('layout.app')

@section('title')
   {{"details of $title"}}
@endsection

@section('content')
    @if($post)
        <h1>{{$post->title}}</h1>
        <br>
        <ul>
            <li>{{$post->id}}</li>
            <li>{{$post->title}}</li>
            <li>{{$post->body}}</li>
            <li>{{$post->created_at}}</li>
        </ul>
    @else
        <p>This post not found.</p>
    @endif
@endsection
