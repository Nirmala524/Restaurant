<?php

namespace App\Http\Controllers;

use App\Models\Happy;
use Illuminate\Http\Request;

class HappyController extends Controller
{
    public function index()
    {
        $data = Happy::all();

        return view('admin.happy.index', compact('data'));
    }
    public function create()
    {
        return view('admin.happy.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'number' => 'required',

        ]);
        $input['status'] = 1;
        Happy::create($input);
        return redirect('admin/happy')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {

        $data = Happy::find($id);

        return view('admin.happy.edit', compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'number' => 'required',

        ]);

        $data = Happy::find($request->id);
        $data['name'] = $request->name;
        $data['number'] = $request->number;
        $data['status'] = isset($request->status) ? 1 : 0;
        $data->save();
        return redirect('admin/happy')->with('status', 'Recored Updated Successfuly!');
    }
    public function destory($id)
    {

        $data = Happy::find($id);
        if (isset($data)) {
            $data->delete();
            return redirect('admin/happy')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
