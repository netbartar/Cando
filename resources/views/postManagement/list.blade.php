@extends('layout.app')

@section('title')
    {{'Post List Page'}}
@endsection

@section('content')
    <h1>Post List Page</h1>
    <br>
    <div class="col-sm-6">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td><{{$post->id}}</td>
                    <td><a href="{{route('post.show',$post->id)}}"> {{$post->title}}</a></td>
                    <td>{{$post->created_at}}</td>
                </tr>

            @endforeach
        </table>
    </div>

@endsection
