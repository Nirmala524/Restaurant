<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = Menu::all();

        return view('admin.menu.index', compact('data'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'menu' => 'required',


        ]);

        $input['status'] = 1;
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = substr(str_shuffle(str_repeat($characters, 5)), 0, 5);
        $input['class_id'] = $randomString;


        Menu::create($input);
        return redirect('admin/menu')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {

        $data = Menu::find($id);

        return view('admin.menu.edit', compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([

            'menu' => 'required',

        ]);

        $data = Menu::find($request->id);
        $data['menu'] = $request->menu;
        // $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // $randomString = substr(str_shuffle(str_repeat($characters, 5)), 0, 5);
        // $data['class_id'] = $randomString;
        


        $data->save();
        return redirect('admin/menu')->with('status', 'Recored Updated Successfuly!');
    }
    public function destory($id)
    {

        $data = Menu::find($id);
        if (isset($data)) {
            $data->delete();
            return redirect('admin/menu')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
