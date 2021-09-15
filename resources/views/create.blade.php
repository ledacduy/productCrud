@extends('layouts')
@section('title')
    add new product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2>ADD NEW PRODUCT</h2>
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
            <form action="{{ route('product.store')}}" method="post">
                @csrf
                <div class="col-sm-4">
                    Name: <input type="text" name="name" placeholder="name" class="form-control" > <br>
                    Category: <input type="text" name="category" placeholder="category" class="form-control" ><br>
                    Brand: <input type="text" name="brand" placeholder="brand" class="form-control" > <br>
                    Price: <input type="text" name="price" placeholder="price" class="form-control" ><br>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </form>
        </div>
    </div>
@endsection