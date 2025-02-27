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
                    <form action="{{ url('admin/setting/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Enter email"
                                value="{{ $data->email }}">
                            @error('email')
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
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter name"
                                value="{{ $data->name }}">
                            @error('name')
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
                            <label class="control-label">Twitter</label>
                            <input class="form-control" type="text" name="twitter" placeholder="Enter twitter"
                                value="{{ $data->twitter }}">
                            @error('twitter')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Facebook</label>
                            <input class="form-control" type="text" name="facebook" placeholder="Enter facebook"
                                value="{{ $data->facebook }}">
                            @error('facebook')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Instagram</label>
                            <input class="form-control" type="text" name="instagram" placeholder="Enter instagram"
                                value="{{ $data->instagram }}">
                            @error('instagram')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Open Name</label>
                            <input class="form-control" type="text" name="Open" placeholder="Enter open"
                                value="{{ $data->Open }}">
                            @error('open')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Open Hours</label>

                            <textarea name="openhours" id="editior">{{ $data->openhours }}</textarea>
                            @error('openhours')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label"> InstagramName</label>
                            <input class="form-control" type="text" name="insname" placeholder="Enter insname"
                                value="{{ $data->insname }}">
                            @error('insname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">New letter</label>
                            <input class="form-control" type="text" name="newsletter" value="{{ $data->newsletter }}">
                            @error('newsletter')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Detail</label>
                            <input class="form-control" type="text" name="detail" value="{{ $data->detail }}">
                            @error('detail')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">Map</label>
                            <input class="form-control" type="text" name="map" value="{{ $data->map }}">
                            @error('map')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
