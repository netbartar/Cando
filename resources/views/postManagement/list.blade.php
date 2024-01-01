@extends('layout.master')

@section('title')
    {{'Post List Page'}}
@endsection

@section('content')
    <br><br>
    <h1>Post List Page</h1>
    <br>
    <div class="col-sm-6">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            @foreach($posts as $key=>$post)
                <tr>
                    <td>{{$key+1}}</td>
                    <td><a href="{{route('post.show',$post->id)}}"> {{$post->title}}</a></td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <button type="submit" class="btn btn-primary">
                            <a class="text-white" href="{{route('post.edit',$post->id)}}"> edit</a>
                        </button>
                        <form method="POST" action="{{route('post.delete',$post->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >delete</button>
                        </form>

                    </td>
                </tr>

            @endforeach
        </table>
    </div>

@endsection
