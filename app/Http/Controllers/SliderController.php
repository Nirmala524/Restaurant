<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $data = Slider::all();
        return view('admin.slider.index', compact('data'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {

        $input = $request->all();


        $request->validate([
            'name' => 'required | min:3 ',
            'title' => 'required ',
            'image' => 'required |mimes:jpeg,png,jpg',
        ]);

        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('slider', $imageName);
        $input['image'] = $imageName;
       

        Slider::create($input);
        return redirect('admin/slider/')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {
        $data = Slider::find($id);
        return view('admin.slider.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data = Slider::find($request->id);
        $request->validate([
            'name' => 'required | min:3 |max:20',
            'title' => 'required ',
        ]);
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/slider/' . $data->image))) {
                unlink(public_path('storage/slider/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('slider', $imageName);

            request()->image->move(public_path('image/slider/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/slider/')->with('status', 'Recored Updated Successfuly!');
    }
    
    public function destory($id)
    {

        $data = Slider::find($id);
        if (isset($data)) {

            if (file_exists(public_path('storage/slider/' . $data->image))) {
                unlink(public_path('storage/slider/' . $data->image));
            }
            $data->delete();
            return redirect('admin/slider/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
