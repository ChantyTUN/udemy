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
            <form action="{{route('question.store')}}" method="post">
                @csrf
                <div class="module">
                    <div class="module-head">
                        <h3>Create Question</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <label class="control-label">Choose Question</label>
                            <div class="controls">
                                <select name="quiz" class="span8 @error('quiz') is-invalid @enderror" required>
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
                            <label class="control-label">Question Name</label>
                            <div class="controls">
                                <input type="text" name="question" class="span8 @error('question') is-invalid @enderror" placeholder="name of quiz" value="{{old('question')}}" required autocomplete="question" autofocus>
                                @error('question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>  
                        </div>

                        <div class="control-group">
                            <label class="control-label">Options</label>
                            <div class="controls">
                                @for($i=0;$i<4;$i++)
                                <input type="text" name="options[]" value="{{old('options.[$i]')}}" class="span7 @error('options') is-invalid @enderror" placeholder="Option{{$i+1}}" require="">
                                <input type="radio" name="correct_answer" value="{{$i}}">&nbsp;<span>Is Correct answer</span>
                                @endfor
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