@extends('backend.layouts.master')

    @section('title','create Question')

    @section('content')
    <div class="span9">
        <div class="content">
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                </div>
            @endif
            <form action="{{route('exam.assign')}}" method="post">
                @csrf
                <div class="module">
                    <div class="module-head">
                        <h3>Assign Quiz</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <label class="control-label">Choose Question</label>
                            <div class="controls">
                                <select name="quiz_id" class="span8 @error('quiz') is-invalid @enderror" required>
                                    @foreach(App\Model\Quiz::all() as $quiz)
                                    <option value="{{$quiz->id}}">{{$quiz->name}}</option>
                                    @endforeach

                                </select>
                                @error('question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>      
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label">Choose Question</label>
                            <div class="controls">
                                <select name="user_id" class="span8 @error('user') is-invalid @enderror" required>
                                    @foreach(App\User::where('is_admin','0')->get() as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach

                                </select>
                                @error('question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>      
                        </div>

                        <div class="controls">
                                <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection