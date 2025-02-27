@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit data</h3>
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="tile-body">
                    <form action="{{url('admin/multi/update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name"
                                value="{{ $data->name }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      
                        <div class="form-group">
                            <label class="control-label">MName</label>
                            <input class="form-control" type="text" name="mname" placeholder="Enter mname"
                                value="{{ $data->mname }}">
                            @error('mname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">SName</label>
                            <input class="form-control" type="text" name="sname" placeholder="Enter sname"
                                value="{{ $data->sname }}">
                            @error('sname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                                                              
                        <div class="form-group">
                            <label class="control-label">BName</label>
                            <input class="form-control" type="text" name="bname" placeholder="Enter bname"
                                value="{{ $data->bname }}">
                            @error('bname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      
                        <div class="form-group">
                            <label class="control-label">CName</label>
                            <input class="form-control" type="text" name="cname" placeholder="Enter cname"
                                value="{{ $data->cname }}">
                            @error('cname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image" >
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img style="width: 200px;" src="{{asset('storage/multi/'.$data->image)}}" alt="">
                        </div>
                                                                
                       <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>update</button>&nbsp;&nbsp;&nbsp;<a
                                class="btn btn-secondary" href="#"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>


                        </div>
                    </form> 
                </div>
            </div>
        </div>
    @endsection
