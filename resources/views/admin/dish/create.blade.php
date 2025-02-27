@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New Dishes</h3>
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
                    <form action="{{ url('admin/dish/store') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter title"
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <input class="form-control" type="number" name="price" placeholder="Enter price"
                                value="{{ old('price') }}">
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
