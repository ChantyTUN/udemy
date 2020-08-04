@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{Session::get('message')}}</strong>
            </div>    
        @endif
            <div class="card">
                <div class="card-header">Update Food</div>

                    <div class="card-body">
                    <form action="{{route('food.update',[$food->id])}}" method="post" enctype="multipart/form-data"> 
                        @csrf
                        {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$food->name}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$food->description}}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{$food->price}}">
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Category</label>
                    <select name="category" class="form-control @error('category') is-invalid @enderror">
                            <option value="">--Select Category--</option>
                        @foreach(App\Model\Category::all() as $category)
                            <option value="{{$category->id}}"
                                @if($category->id==$food->category_id)
                                    selected
                                @endif
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                    </div>

                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
