@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit Team Member</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/team/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" placeholder="Enter id" value="{{$data->id}}">
                            
                        </div>
                        <div class="form-group">
                            <label class="control-label">Name:</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{$data->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Role</label>
                            <input class="form-control" type="text" name="role" placeholder="Enter role"
                                value="{{$data->role}}">
                            @error('role')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">Twitter</label>
                            <input class="form-control" type="text" name="twitter" placeholder="Enter twitter"
                                value="{{$data->twitter}}">
                            @error('twitter')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Facebook</label>
                            <input class="form-control" type="text" name="facebook" placeholder="Enter facebook"
                                value="{{$data->facebook}}">
                            @error('facebook')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Google</label>
                            <input class="form-control" type="text" name="google" placeholder="Enter google"
                                value="{{$data->google}}">
                            @error('google')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Instagram</label>
                            <input class="form-control" type="text" name="instagram" placeholder="Enter instagram"
                                value="{{$data->instagram}}">
                            @error('instagram')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image" >
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img  src="{{asset('storage/team/'.$data->image)}}" alt="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">status</label>
                            <div class="toggle-flip">
                                <label>
                                  <input type="checkbox" name="status" value="{{$data->status}}"><span class="flip-indecator" data-toggle-on="Active" data-toggle-off="Inactive"></span>
                                </label>
                              </div>
                           
                        </div>
                      
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>update</button>&nbsp;&nbsp;&nbsp;
                         
                         
                                </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
