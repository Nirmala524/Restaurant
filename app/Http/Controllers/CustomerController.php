<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::paginate(4);
        return view('admin.customer.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.customer.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();


        $request->validate([
            'name' => 'required | min:3 |max:20 ',
            'user' => 'required | max:30',
            'desc' => 'required |max :300',
            'image' => 'required |mimes:jpeg,png,jpg',




        ]);

        $input['status'] = 1;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('customer', $imageName);
        $input['image'] = $imageName;

        Customer::create($input);
        return redirect('admin/customer/')->with('status', 'Recored  Created Successfuly!');
    }


    public function edit($id)
    {
        $data = Customer::find($id);
        return view('admin.customer.edit', ['data' => $data]);
    }


    public function update(Request $request)
    {
        $data = Customer::find($request->id);
        $request->validate([
            'name' => 'required | min:3 |max:20 ',
            'user' => 'required | max:30',
            'desc' => 'required |max :300',

        ]);
        $image = $request->file('image');

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required | mimes:jpeg,png,jpg,gif,svg',

            ]);
            if (file_exists(public_path('storage/customer/' . $data->image))) {
                unlink(public_path('storage/customer/' . $data->image));
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('customer', $imageName);

            request()->image->move(public_path('image/customer/'), $imageName);
            $data['image'] = $imageName;
        }
        $data['name'] = $request->name;
        $data['user'] = $request->user;
        $data['desc'] = $request->desc;

        $data['status'] = isset($request->status) ? 1 : 0;

        $data->save();
        return redirect('admin/customer/')->with('status', 'Recored Updated Successfuly!');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        $data = Customer::find($id);
        if (isset($data)) {

            if (file_exists(public_path('storage/customer/' . $data->image))) {
                unlink(public_path('storage/customer/' . $data->image));
            }
            $data->delete();
            return redirect('admin/customer/')->with('delete', 'Recored Deleted Successfuly!');
        } else {
            return "record not found";
        }
    }
}
