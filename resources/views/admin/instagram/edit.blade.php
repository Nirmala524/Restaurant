@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit image</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/instagram/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" placeholder="Enter title"
                                value="{{ $data->id }}">

                        </div>
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img style="width: 200px;" src="{{ asset('storage/instagram/' . $data->image) }}" alt="">
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
