@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Register employee
                    
                </li>
              </ol>
            </nav>
<form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">@csrf

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">General Information</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Mobile number </label>
                        <input type="text" name="mobile_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                         <select name="department_id" name="department_id">
                            @foreach(App\Department::all() as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Start date</label>
                        <input type="date" name="start_from" class="form-control" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login Information</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role_id" name="role_id">
                            @foreach(App\Role::all() as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    
                </div>

            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary " type="submit">Submit</button>
            </div>
        </div>
      
    </div>
</form>
</div>
    
@endsection
