@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit Services</h3>
                <div class="tile-body">
                    <form action="{{url('admin/service/update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" placeholder="Enter title" value="{{$data->id}}">
                            
                        </div>
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{$data->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">desc</label>
                            <input class="form-control" type="text" name="desc" placeholder="Enter desc" value="{{$data->desc}}">
                            @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">icon</label>
                            <input class="form-control" type="text" name="icon" placeholder="Enter icon" value="{{$data->icon}}">
                            @error('icon')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
                                    class="fa fa-fw fa-lg fa-check-circle"></i>update</button>
                         
                         
                                </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
