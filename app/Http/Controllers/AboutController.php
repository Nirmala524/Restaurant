<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::find(1);

        return view('admin.about.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = About::find(1);
        $request->validate([
            'name' => 'required ',
            'title' => 'required',
            'desc' => 'required',
            'detail'=>'required',
            'date' => 'required',
            'contact' => 'required',
            
        ]);
        $image = $request->file('fimg');


        if (isset($request->fimg)) {
            $request->validate([
                'fimg' => 'required',

            ]);
            if (file_exists(public_path('storage/about/' . $data->fimg))) {
                unlink(public_path('storage/about/' . $data->fimg));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('about', $imageName);

            request()->fimg->move(public_path('image/about/'), $imageName);
            $data['fimg'] = $imageName;
        }
        $image2 = $request->file('simg');

        if (isset($request->simg)) {
            $request->validate([
                'simg' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/about/' . $data->simg))) {
                unlink(public_path('storage/about/' . $data->simg));
            }

            $NewimageName = time() . '.' . $image2->getClientOriginalExtension();
            $image2->storeAs('about', $NewimageName);

            request()->simg->move(public_path('image/about/'), $NewimageName);
            $data['simg'] = $NewimageName;
        }
        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $data['detail'] = $request->detail;
        $data['date'] = $request->date;
        $data['contact'] = $request->contact;
        $data->update();
        return redirect('admin/about');
    }

}
