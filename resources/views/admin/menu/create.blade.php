@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Add New Menu</h3>
                <div class="tile-body">
                    <form action="{{ url('admin/menu/store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Menu</label>
                            <input class="form-control" type="text" name="menu" placeholder="Enter menu" value="{{old('menu')}}">
                            @error('menu')
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
