@extends('backend.layouts.master')

    @section('title','create quiz')

    @section('content')
    <div class="span9">
        <div class="content">
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                </div>
            @endif
            <form action="{{route('quiz.update',[$quiz->id])}}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="module">
                    <div class="module-head">
                        <h3>Create Quiz</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <label class="control-label">Quiz Name</label>
                            <div class="controls">
                                <input type="text" name="name" class="span8 @error('name') is-invalid @enderror" placeholder="name of quiz" value="{{$quiz->name}}" required autocomplete="name" autofocus>
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <textarea name="description" cols="30" rows="10" class="span8 @error('description') is-invalid @enderror" required autocomplete="description">{{$quiz->description}}</textarea>
                                @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <label class="control-label">Minutes</label>
                            <div class="controls">
                                <input type="text" name="minutes" class="span8 @error('minutes') is-invalid @enderror" value="{{$quiz->minutes}}"  required autocomplete="minutes">
                                @error('minutes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="controls">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection