@extends('layout.master')

@section('title')
    list of products

@endsection

@section('content')
    <br><br>
    <h1>list of products</h1>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Title</th>
            <th>Category</th>
            <th>price</th>
            <th class="text-right">Count</th>
            <th class="text-right">Status</th>
            <th class="text-right">Actions</th>
        </tr>
        </thead>
        <tbody>
        @if(count($products))
            @foreach($products as $key=>$product)
                <tr>
                    <td class="text-center">{{$key+1}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td class="text-right">{{$product->total_count}}</td>
                    <td class="text-right">{{$product->is_active ? 'active' : 'de activate'}}</td>

                    <div class="row">
                        <td class="td-actions text-right">
                            <a href="{{route('product.show',$product->id)}}">
                                <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                    <i class="now-ui-icons users_single-02"></i>
                                </button>
                            </a>
                            <a href="{{route('product.edit',$product->id)}}">
                                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                            </a>
                            <form method="POST" action="{{route('product.delete',$product->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                            </form>
                            <a href="{{route('product.activation',$product->id)}}">
                                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                    <i class="business_chart-bar-32"></i>
                                </button>
                            </a>
                        </td>
                    </div>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
