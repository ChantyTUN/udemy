@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                </div>
            @endif
            
                <form action="{{route('departments.store')}}" method="post">@csrf

              <div class="card">
                <div class="card-header">Create New Department</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                         @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                          @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>
@endsection
