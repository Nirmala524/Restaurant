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
                    <form action="{{url('admin/about/update')}}" method="POST" enctype="multipart/form-data">
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
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter title"
                                value="{{ $data->title }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       
                       
                         <div class="form-group">
                            <label class="control-label">Description</label>
                            <input class="form-control" type="text" name="desc" placeholder="Enter Description"
                                value="{{ $data->desc }}">

                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Details</label>
                            <input class="form-control" type="text" name="detail" placeholder="Enter detail"
                                value="{{ $data->detail }}">

                            @error('detail')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <input class="form-control" type="datetime-local" name="date" placeholder="Enter date"
                                value="{{ $data->date }}">

                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contact</label>
                            <input class="form-control" type="number" name="contact" placeholder="Enter contact"
                                value="{{ $data->contact }}">

                            @error('contact')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Image1</label>
                            <input class="form-control" type="file" name="fimg" >
                            @error('fimg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img style="width: 200px;" src="{{asset('storage/about/'.$data->fimg)}}" alt="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Image2</label>
                            <input class="form-control" type="file" name="simg" >
                            @error('simg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img style="width: 200px;" src="{{asset('storage/about/'.$data->simg)}}" alt="">
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
