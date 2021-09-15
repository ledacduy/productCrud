@extends('layouts')
@section('title')
    products list
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-success" href="{{ route('product.create')}}">add new product</a>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p> {{ $message }} </p>
            </div>
        @endif
        <div class="row">
            <table class="table table-dark">
                <tr>
                    <th>no</th>
                    <th>name</th>
                    <th>category</th>
                    <th>brand</th>
                    <th>price</th>
                    <th>option</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <th>{{$product->id}}</th>
                    <th>{{$product->name}}</th>
                    <th>{{$product->category}}</th>
                    <th>{{$product->brand}}</th>
                    <th>{{$product->price}}</th>
                    <th>
                        <form action="{{ route('product.destroy',$product->id) }}" method="post">
                                <a href=" {{ route('product.edit', $product->id)}} " class="btn btn-primary">EDIT</a>
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <input type="submit" class="btn btn-danger delete-user" value="Delete">
                        </form>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection