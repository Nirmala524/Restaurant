@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New Service</h3>
                <div class="tile-body">
                    <form action="{{url('admin/service/store')}}" method="POST" enctype="multipart/form-data">
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
                            <label class="control-label">desc</label>
                            <input class="form-control" type="text" name="desc" placeholder="Enter desc"
                                value="{{ old('desc') }}">
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">icon</label>
                            <input class="form-control" type="text" name="icon" placeholder="Enter icon"
                                value="{{ old('icon') }}">
                            @error('icon')
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
