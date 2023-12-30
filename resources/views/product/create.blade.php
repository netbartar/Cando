@extends('layout.master')

@section('title')
    create new product

@endsection

@section('content')
    <br><br>
    <h1>create new product</h1>
    <form method="POST" action="{{route('product.store')}}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
            @if($errors->has('title'))
                <span class="text-danger">{{$errors->first('title')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" id="price">
            @if($errors->has('price'))
                <span class="text-danger">{{$errors->first('price')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="total_count">Total Count</label>
            <input type="number" name="total_count" class="form-control" id="total_count" >
            @if($errors->has('total_count'))
                <span class="text-danger">{{$errors->first('total_count')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
                <option value="technology">Technology</option>
                <option value="sport">Sport</option>
            </select>
            @if($errors->has('category'))
                <span class="text-danger">{{$errors->first('category')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            @if($errors->has('description'))
                <span class="text-danger">{{$errors->first('description')}}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
