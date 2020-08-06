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
								<h3>All Quiz</h3>
							</div>
							<div class="module-body">
								<table class="table table-striped">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Name</th>
									  <th>Description</th>
									  <th>Minutes</th>
									  <th>Action</th>
                                    </tr>
								  </thead>
								  <tbody>
                                    @if(count($quizzes)>0)
                                        @foreach($quizzes as $key=>$quiz)
									<tr>
									    <td>{{$key+1}}</td>
									    <td>{{$quiz->name}}</td>
									    <td>{{$quiz->description}}</td>
                                        <td>{{$quiz->minutes}}</td>
                                        <td>
                                            <a href="{{route('quiz.edit',[$quiz->id])}}">
                                                <button class="btn btn-primary">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="delete-form{{$quiz->id}}" 
                                                    method="POST" action="{{route('quiz.destroy',[$quiz->id])}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                            </form>
                                            <a href="#" onclick="
                                                if(confirm('Do you want to delete?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form{{$quiz->id}}').submit()
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
                                      <strong>No Data To Display</strong>
                                  </td>
                                  @endif
                                </table>
                                
						</div>	
					<br/>			
					</div><!--/.content-->
				</div><!--/.span9-->      
@endsection