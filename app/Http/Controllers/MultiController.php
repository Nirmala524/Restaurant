<?php

namespace App\Http\Controllers;

use App\Models\Multi;
use Illuminate\Http\Request;

class MultiController extends Controller
{
    public function index()
    {
        $data = Multi::find(1);
        return view('admin.multi.index', compact('data'));

    }
    public function update(Request $request)
    {
        $data = Multi::find(1);
        $request->validate([
            'name' => 'required',
            'mname' => 'required',
            'sname' => 'required',
            'cname' => 'required',
            'bname' => 'required',
        ]);
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/multi/' . $data->image))) {
                unlink(public_path('storage/multi/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('multi', $imageName);

            request()->image->move(public_path('image/multi/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['name'] = $request->name;
        $data['mname'] = $request->mname;
        $data['sname'] = $request->sname;
        $data['cname'] = $request->cname;
        $data['bname'] = $request->bname;

        $data->save();
        return redirect('admin/multi/')->with('status', 'Recored Updated Successfuly!');
    }

}
