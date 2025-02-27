<?php

namespace App\Http\Controllers;

use App\Models\ourservice;
use Illuminate\Http\Request;

class OurserviceController extends Controller
{
    public function index()
    {
        $data = ourservice::find(1);

        return view('admin.ourservice.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = ourservice::find(1);
        $request->validate([
            'name' => 'required',
            'title' => 'required ',
           
        ]);
       
        $data['name'] = $request->name;
        $data['title'] = $request->title;
       
       $data->save();
        return redirect('admin/ourservice/');
    }
}
