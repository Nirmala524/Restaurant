<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::paginate(1);

        return view('admin.blog.index',compact('data'));
    }
    public function create()
    {
        return view('admin.blog.create');
    }
    public function store(Request $request)
    {

        $input = $request->all();


        $request->validate([
            'name' => 'required ',
            'title' => 'required ',
            'date' => 'required ',
            'detail' => 'required ',
            'image' => 'required |mimes:jpeg,png,jpg',
        ]);

        $input['role'] = 1;
        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('blog', $imageName);
        $input['image'] = $imageName;
       

        Blog::create($input);
        return redirect('admin/blog/')->with('status', 'Recored  Created Successfuly!');
    }
    public function edit($id)
    {
        $data = Blog::find($id);
        return view('admin.blog.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data = Blog::find($request->id);
        $request->validate([
            'name' => 'required ',
            'title' => 'required ',
            'date' => 'required ',
            'detail' => 'required ',
        ]);
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/blog/' . $data->image))) {
                unlink(public_path('storage/blog/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('blog', $imageName);

            request()->image->move(public_path('image/blog/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['date'] = $request->date;
        $data['detail'] = $request->date;
        $data['role'] = isset($request->role) ? 1 : 0;
        $data['status'] = isset($request->status) ? 1 : 0;


        $data->save();
        return redirect('admin/blog/')->with('status', 'Recored Updated Successfuly!');
    }

    public function destory($id)
    {

        $data = Blog::find($id);
        if (isset($data)) {

            if (file_exists(public_path('storage/blog/' . $data->image))) {
                unlink(public_path('storage/blog/' . $data->image));
            }
            $data->delete();
            return redirect('admin/blog/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
    

}
