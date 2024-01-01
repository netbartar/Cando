@extends('layout.master')

@section('title')
    create new product

@endsection

@section('content')
    <br><br>
    <h1>create new product</h1>
    <form method="POST" action="{{route('user.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
            @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email">
            @if($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" >
            @if($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="role_id">Category</label>
            <select class="form-control" id="role_id" name="role_id">
                @if($roles)
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('role_id'))
                <span class="text-danger">{{$errors->first('role_id')}}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
