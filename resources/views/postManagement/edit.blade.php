@extends('layout.app')
@section('title')
    Update post
@endsection

@section('content')
    <h1>update {{$post->title}}</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-6">
            <form method="POST" action="{{route('post.update',$post->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">title: </label>
                    <input type="text" name="title" class="form-control" id="title"
                           aria-describedby="emailHelp" placeholder="Enter title" value="{{$post->title}}">
                </div>
                @if($errors->has('title'))
                    <span class="text-danger">{{$errors->first('title')}}</span>
                @endif


                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control" id="body" rows="3">{{$post->body}}</textarea>
                </div>
                @if($errors->has('body'))
                    <span class="text-danger">{{$errors->first('body')}}</span>
                @endif
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
