@extends('layout.master')

@section('title')
    create new Role

@endsection

@section('content')
    <br><br>
    <h1>create new Role</h1>
    <form method="POST" action="{{route('roles.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter title">
            @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
