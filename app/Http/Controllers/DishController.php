<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Menu;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        $data = Dish::paginate(8);
        return view('admin.dish.index', compact('data'));
    }
    public function create()
    {
        $menu = Menu::all();
        // dd($menu);
        return view('admin.dish.create', compact('menu'));
    }
    public function store(Request $request)
    {
        $input = $request->all();


        $request->validate([
            'name' => 'required | min:3',
            'title' => 'required ',
            'price' => 'required',
            'menu_id' => 'required',

            'image' => 'required |mimes:jpeg,png,jpg,webp,avif',
        ]);

        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('dish', $imageName);
        $input['image'] = $imageName;
        $class = Menu::find($request->menu_id);
        $input['class'] = $class->class_id;

        Dish::create($input);
        return redirect('admin/dish/')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {
        $data = Dish::find($id);
        $menu = Menu::all();
        return view('admin.dish.edit', compact('data', 'menu'));
    }
    public function update(Request $request)
    {
        $data = Dish::find($request->id);
        $request->validate([
            'name' => 'required | min:3 ',
            'title' => 'required ',
            'price' => 'required',
            'menu_id' => 'required',
        ]);
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/dish/' . $data->image))) {
                unlink(public_path('storage/dish/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('dish', $imageName);

            $data['image'] = $imageName;
        }
        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['price'] = $request->price;
        $data['menu_id'] = $request->menu_id;
        $class = Menu::find($request->menu_id);
        $data['class'] = $class->class_id;
        // $data['class'] = $request->menu_id;

        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/dish/')->with('status', 'Recored Updated Successfuly!');
    }
    public function destory($id)
    {

        $data = Dish::find($id);
        if (isset($data)) {

            if (file_exists(public_path('storage/dish/' . $data->image))) {
                unlink(public_path('storage/dish/' . $data->image));
            }
            $data->delete();
            return redirect('admin/dish/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
