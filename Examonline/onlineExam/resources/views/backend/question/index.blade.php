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
						<div class="module">
							<div class="module-head">
								<h3>All Questions</h3>
							</div>
							<div class="module-body">
								<table class="table table-striped">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Question</th>
									  <th>Quiz</th>
									  <th>Create</th>
									  <th></th>
									  <th></th>
									  <th></th>
                                    </tr>
								  </thead>
								  <tbody>
                                    @if(count($questions)>0)
                                        @foreach($questions as $key=>$question)
									<tr>
									    <td>{{$key+1}}</td>
									    <td>{{$question->question}}</td>
									    <td>{{$question->quiz->name}}</td>
                                        <td>{{date('F d,Y',strtotime($question->created_at))}}</td>
                                        <td>
                                            <a href="{{route('question.show',[$question->id])}}">
                                                <button class="btn btn-info">View</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('question.edit',[$question->id])}}">
                                                <button class="btn btn-primary">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="delete-form{{$question->id}}" 
                                                    method="POST" action="{{route('question.destroy',[$question->id])}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                            </form>
                                            <a href="#" onclick="
                                                if(confirm('Do you want to delete?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form{{$question->id}}').submit()
                                                }else{
                                                    event.preventDefault();
                                                }
                                                ">
                                                <input type="submit" value="Delete" class="btn btn-danger">    
                                            </a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    @else
                                  </tbody>
                                  <td class="alert alert-primary" role="alert">
                                      <strong>No Question To Display</strong>
                                  </td>
                                  @endif
                                </table>
                                <div class="pagination pagination-centered">
                                    {{$questions->links()}}
                                </div>
                                
						</div>	
					<br/>			
					</div><!--/.content-->
				</div><!--/.span9-->      
@endsection