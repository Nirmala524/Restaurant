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
                    <form action="{{url('admin/title/update')}}" method="POST" >
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
                            <label class="control-label">CName</label>
                            <input class="form-control" type="text" name="cname" placeholder="Enter cname"
                                value="{{ $data->cname }}">
                            @error('cname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">CTitle</label>
                            <input class="form-control" type="text" name="ctitle" placeholder="Enter ctitle"
                                value="{{ $data->ctitle }}">
                            @error('ctitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">HName</label>
                            <input class="form-control" type="text" name="hname" placeholder="Enter hname"
                                value="{{ $data->hname }}">
                            @error('hname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">HTitle</label>
                            <input class="form-control" type="text" name="htitle" placeholder="Enter htitle"
                                value="{{ $data->htitle }}">
                            @error('htitle')
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
                            <label class="control-label">BTitle</label>
                            <input class="form-control" type="text" name="btitle" placeholder="Enter btitle"
                                value="{{ $data->btitle }}">
                            @error('btitle')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label">FName</label>
                            <input class="form-control" type="text" name="fname" placeholder="Enter fname"
                                value="{{ $data->fname }}">
                            @error('fname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">FTitle</label>
                            <input class="form-control" type="text" name="ftitle" placeholder="Enter ftitle"
                                value="{{ $data->ftitle }}">
                            @error('ftitle')
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
