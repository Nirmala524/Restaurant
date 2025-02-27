@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit customer</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/book/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" placeholder="Enter title"
                                value="{{ $data->id }}">

                        </div>

                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name"
                                value="{{ $data->name }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Enter email"
                                value="{{ $data->email }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input class="form-control" type="number" name="phone" placeholder="Enter phone"
                                value="{{ $data->phone }}">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>           

                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <input class="form-control" type="date" name="date" placeholder="Enter date"
                                value="{{ $data->date }}">
                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Time</label>
                            <input class="form-control" type="time" name="time" placeholder="Enter date"
                            value="{{ $data->time }}">
                        @error('time')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                          
                        </div>

                        <div class="form-group">
                            <label class="control-label">Person</label>

                            <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="person" id="" class="form-control">
                                    <option value="">Person</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">status</label>
                            <div class="toggle-flip">
                                <label>
                                    <input type="checkbox" name="status" value="{{ $data->status }}"><span
                                        class="flip-indecator" data-toggle-on="Active" data-toggle-off="Inactive"></span>
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
