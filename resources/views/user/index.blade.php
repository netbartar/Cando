@extends('layout.master')

@section('title')
    list of user

@endsection

@section('content')
    <br><br>
    <h1>list of user</h1>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        @if(count($users))
            @foreach($users as $key=>$user)
                <tr>
                    <td class="text-center">{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
