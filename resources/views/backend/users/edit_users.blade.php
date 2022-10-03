@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                <h4 class="box-title">Edit User</h4>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form method="post" action="{{ route('user.update', $editData->id) }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <h5>User Role <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="usertype" id="usertype" class="form-control">
                                                    <option value="" selected="" disabled="">Select Role</option>
                                                    <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected": "")}}>Admin</option>
                                                    <option value="User"  {{ ($editData->usertype == "User" ? "selected": "")}}>User</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <h5>User Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input value="{{$editData->name}}" type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                        <div class="row">
                            <div class="col-md-6" >
                                <div class="form-group">
                                    <h5>User Email <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input value="{{$editData->email}}" type="email" name="email" class="form-control">
                                    </div>
                                </div>
                            </div> 
{{-- 
                            <div class="col-md-6" >
                                <div class="form-group">
                                    <h5>Password<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input value="{{$editData->password}}" type="password" name="password" class="form-control">
                                    </div>
                                </div>
                            </div> --}}
                        </div> 
                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
      </div>
</div>
@endsection
