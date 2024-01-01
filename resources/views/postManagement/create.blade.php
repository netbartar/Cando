@extends('layout.master')
@section('title')
    Create New Post
@endsection

@section('content')
    <br><br>
    <h1>create new post</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-6">
            <form method="POST" action="{{route('post.store')}}">
                @csrf
                <div class="form-group">
                    <label for="title">title: </label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
                </div>
                @if($errors->has('title'))
                    <span class="text-danger">{{$errors->first('title')}}</span>
                @endif


                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
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
