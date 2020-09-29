@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">All Roles</li>
              </ol>
            </nav>
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                </div>
            @endif
           
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th> Delete</th>
                    
                    </tr>
                </thead>

                <tbody>
                @if(count($roles)>0)
                        @foreach($roles as $key => $role)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>
                        <td><a href="{{route('roles.edit', [$role->id])}}"><i class="fas fa-edit"></i></a></td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#myModal{{$role->id}}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
<!-- Modal -->
<div class="modal fade" id="myModal{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="{{route('roles.destroy', [$role->id])}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <div class="modal-content">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
            <h6 class="modal-title" id="myModalLabel">Modal {{$role->name}}</h6>
        </div>
        <div class="modal-body">
        Do you want to delete?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">Cancel</button>
            <button type="Submit" class="btn btn-sm btn-danger">Delete </button>
        </div>
        </div>
    </form>
  </div>
</div>
<!-- End Modal -->
                    </tr>
                        @endforeach
                    @else
                    <td>No Role to Display</td>
                    @endif
                
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
