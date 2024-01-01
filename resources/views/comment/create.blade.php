@extends('layout.master')
@section('title')
    Create New comment
@endsection

@section('content')
    <br><br>
    <h1>create comment for {{$post->title}}</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-6">
            <form method="POST" action="{{route('comment.store',$post->id)}}">
                @csrf
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea name="comment" class="form-control" id="comment" rows="3"></textarea>
                </div>
                @if($errors->has('comment'))
                    <span class="text-danger">{{$errors->first('comments')}}</span>
                @endif
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
