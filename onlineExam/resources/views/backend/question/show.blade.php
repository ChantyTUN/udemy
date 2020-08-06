@extends('backend.layouts.master')
    
    @section('title','create Question')

    @section('content')

        <div class="span9">
            <div class="cotent">
            
                <div class="module">
                    <div class="module-head">
                    
                    </div>

                    <div class="module-body">

                        <p><h3 class="heading">{{$question->question}}</h3></p>
                    
                    <div class="module-body table">
                        <table class="table table-message">
                            <tbody>
                                @foreach($question->answers as $key=>$answer)
                            <tr>
                                <td class="cell-author hidden-phone hidden-tablet">
                                    {{$key+1}}. {{$answer->answer}}
                                    @if($answer->is_correct)
                                    <span class="badge badge-success pull-right">
                                        correct
                                    @endif
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                        </div>
                        <div class="module-foot">
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </div>

                    </div>
                    
                    </div>
                </div>
            </div>
        </div>


@endsection