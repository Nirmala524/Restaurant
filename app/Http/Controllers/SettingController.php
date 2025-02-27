<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $data = Setting::find(1);

        return view('admin.setting', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = setting::find(1);
       
        $request->validate([
            'email' => 'required ',
            'contact' => 'required',
            'desc' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'Open' => 'required',
            'openhours' => 'required',
            'insname' => 'required',
            'newsletter' => 'required',
            'detail' => 'required',
            'map' => 'required',
        ]);
        
       
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;
        $data['desc'] = $request->desc;
        $data['twitter'] = $request->twitter;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;
        $data['Open'] = $request->Open;
        $data['openhours'] = $request->openhours;
        $data['insname'] = $request->insname;
        $data['newsletter'] = $request->newsletter;
        $data['detail'] = $request->detail;
        $data['map'] = $request->map;

        $data->save();
        return redirect('admin/setting');
    }
}
