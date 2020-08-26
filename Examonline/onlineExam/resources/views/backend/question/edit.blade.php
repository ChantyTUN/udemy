@extends('backend.layouts.master')

    @section('title','Update Question')

    @section('content')
    <div class="span9">
        <div class="content">
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                </div>
            @endif
            <form action="{{route('question.update',[$question->id])}}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="module">
                    <div class="module-head">
                        <h3>Update Question</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <label class="control-label">Choose Question</label>
                            <div class="controls">
                                <select name="quiz" class="span8 @error('quiz') is-invalid @enderror" required>
                                    @foreach(App\Model\Quiz::all() as $quiz)
                                    <option value="{{$quiz->id}}"
                                        @if($quiz->id==$question->quiz_id)
                                            selected
                                        @endif
                                    >{{$quiz->name}}</option>
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
                                <input type="text" name="question" class="span8 @error('question') is-invalid @enderror" placeholder="name of quiz" value="{{$question->question}}" required autocomplete="question">
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
                                @foreach($question->answers as $key=>$answer)
                                <input type="text" name="options[]" value="{{$answer->answer}}" require="">
                                <input type="radio" name="correct_answer" value="{{$key}}"
                                    @if($answer->is_correct)
                                        {{'checked'}}
                                    @endif
                                >&nbsp;<span>Is Correct answer</span>
                                @endforeach
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