@extends('layout.master')

@section('title')
    list of Roles

@endsection

@section('content')
    <br><br>
    <h1>list of Roles</h1>
    <div class="row">
        <div class="col-sm-3">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Title</th>
                </tr>
                </thead>
                <tbody>
                @if(count($roles))
                    @foreach($roles as $key=>$role)
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            <td>{{$role->name}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
