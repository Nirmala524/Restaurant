@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New Team Member</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/team/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Role</label>
                            <input class="form-control" type="text" name="role" placeholder="Enter role"
                                value="{{ old('role') }}">
                            @error('role')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">Twitter</label>
                            <input class="form-control" type="text" name="twitter" placeholder="Enter twitter"
                                value="twitter">
                            @error('twitter')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Facebook</label>
                            <input class="form-control" type="text" name="facebook" placeholder="Enter facebook"
                                value="Facebook">
                            @error('facebook')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Google</label>
                            <input class="form-control" type="text" name="google" placeholder="Enter google"
                                value="google">
                            @error('google')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">Instagram</label>
                            <input class="form-control" type="text" name="instagram" placeholder="Enter instagram"
                                value="instagram">
                            @error('instagram')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                       
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        

                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a
                                class="btn btn-secondary" href="#"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
