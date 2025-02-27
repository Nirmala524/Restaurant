@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit Dish</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/dish/update') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter title"
                                value="{{$data->title}}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">price</label>
                            <input class="form-control" type="number" name="price" placeholder="Enter price"
                                value="{{$data->price}}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Menu</label>

                            <select class="form-control" name="menu_id">
                                @foreach ($menu as $item)
                                    <option value="{{ $item->id }}">{{ $item->menu }}</option>
                                @endforeach
                            </select>

                            @error('menu')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image" >
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img  src="{{asset('storage/dish/'.$data->image)}}" alt="">
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
