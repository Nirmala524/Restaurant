@extends('admin.index')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Data Table</h1>
            <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
    </div>
    <p><a class="btn btn-primary icon-btn" href="{{ url('admin/dish/create') }}"><i class="fa fa-plus"></i>Add dish </a></p>

    @if (session('status'))
        <div class="alert alert-success col-md-8">
            <div class="bs-component">
                <div class="alert alert-dismissible alert-suceess">
                    <button class="close" type="button" data-dismiss="alert">
                    </button>
                    <h1>{{ session('status') }}</h1>
                </div>
            </div>
        </div>
    @endif
    @if (session('delete'))
        <div class="alert alert-danger">
            <div class="bs-component">
                <div class="alert alert-dismissible alert-suceess">
                    <button class="close" type="button" data-dismiss="alert">
                    </button>
                    <h1>{{ session('delete') }}</h1>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>title</th>
                                <th>price</th>
                                <th>Menu</th>
                                <th>Image</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->MenuName->menu }}</td>


                                    <td><img style="width: 100px;" src="{{ asset('storage/dish/' . $item->image) }}"
                                            alt=""></td>
                                    
                                    <td><span class="badge btn badge-{{ $item->status == 1 ? 'success' : 'danger' }}">
                                            {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                        </span></td>
                                    <td>
                                        <a href="{{ url('admin/dish/edit/' . $item->id) }}" class="btn btn-primary"><i
                                                class="fa fa-pencil-square-o"></i></a>
                                        <a href="{{ url('admin/dish/delete/' . $item->id) }}" class="btn btn-danger"><i
                                                class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
