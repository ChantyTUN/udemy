@extends('backend.layouts.master')

    @section('title','Index User')

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
								<h3>All Users</h3>
							</div>
							<div class="module-body">
								<table class="table table-striped">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Name</th>
									  <th>Email</th>
									  <th>Password</th>
									  <th>Occupation</th>
									  <th>Addree</th>
									  <th>Phone</th>
									  <th></th>
									  <th></th>
                                    </tr>
								  </thead>
								  <tbody>
                                    @if(count($users)>0)
                                        @foreach($users as $key=>$user)
									<tr>
									    <td>{{$key+1}}</td>
									    <td>{{$user->name}}</td>
									    <td>{{$user->email}}</td>
									    <td>{{$user->visible_password}}</td>
									    <td>{{$user->occupation}}</td>
									    <td>{{$user->address}}</td>
									    <td>{{$user->phone}}</td>
                                       
                                        <td>
                                            <a href="{{route('user.edit',[$user->id])}}">
                                                <button class="btn btn-primary">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="delete-form{{$user->id}}" 
                                                    method="POST" action="{{route('user.destroy',[$user->id])}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                            </form>
                                            <a href="#" onclick="
                                                if(confirm('Do you want to delete?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form{{$user->id}}').submit()
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
                                      <strong>No User To Display</strong>
                                  </td>
                                  @endif
                                </table>
                                <div class="pagination pagination-centered">
                                    {{$users->links()}}
                                </div>
                                
						</div>	
					<br/>			
					</div><!--/.content-->
				</div><!--/.span9-->      
@endsection