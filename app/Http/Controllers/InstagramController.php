<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function index()
    {
        $data = Instagram::all();
        return view('admin.instagram.index', compact('data'));
    }
    public function create()
    {
        return view('admin.instagram.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $image = $request->file('image');
        $imagName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('instagram', $imagName);
        $input['image'] = $imagName;
        $input['status'] = 1;
        Instagram::create($input);
        return redirect('admin/instagram/')->with('status', 'Record Created Successfuly!');
    }

    
    public function edit($id)
    {
        $data = Instagram::find($id);
        return view('admin.instagram.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data = Instagram::find($request->id);
       
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/instagram/' . $data->image))) {
                unlink(public_path('storage/instagram/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('instagram', $imageName);

            request()->image->move(public_path('image/slider/'), $imageName);
            $data['image'] = $imageName;
        }
       
        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/instagram/')->with('status', 'Recored Updated Successfuly!');
    }
    
    public function destory($id)
    {

        $data = Instagram::find($id);
        if (isset($data)) {

            if (file_exists(public_path('storage/instagram/' . $data->image))) {
                unlink(public_path('storage/instagram/' . $data->image));
            }
            $data->delete();
            return redirect('admin/instagram/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
