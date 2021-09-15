@extends('layouts')
@section('title')
    edit
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2>EDIT PRODUCT</h2>
        </div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <form action="{{ route('product.update', $product->id)}}" method="post">
                @csrf
                <div class="col-sm-4">
                    Name: <input type="text" name="name" value="{{$product->name}}"  class="form-control" > <br>
                    Category: <input type="text" name="category" value="{{$product->category}}"  class="form-control" ><br>
                    Brand: <input type="text" name="brand" value="{{$product->brand}}"  class="form-control" > <br>
                    Price: <input type="text" name="price" value="{{$product->price}}"  class="form-control" ><br>
                    <button type="submit" class="btn btn-primary">EDIT</button>
                </div>
            </form>
        </div>
    </div>
@endsection