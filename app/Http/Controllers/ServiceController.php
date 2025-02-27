<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::all();
        return view('admin.service.index', compact('data'));
    }
    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {

        $input = $request->all();


        $request->validate([
            'name' => 'required | min:3 ',
            'desc' => 'required | max:200',
           'icon'=>'required',
        ]);

        $input['status'] = 1;
       
       

        Service::create($input);
        return redirect('admin/service/')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {
        $data = Service::find($id);
        return view('admin.service.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data = Service::find($request->id);
        $request->validate([
            'name' => 'required | min:3 ',
            'desc' => 'required |max:200',
            'icon' => 'required ',
        ]);
       
        $data['name'] = $request->name;
        $data['desc'] = $request->desc;
        $data['icon'] = $request->icon;
        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/service/')->with('status', 'Recored Updated Successfuly!');
    }
    
    public function destory($id)
    {

        $data = Service::find($id);
        if (isset($data)) {

           
            $data->delete();
            return redirect('admin/service/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
