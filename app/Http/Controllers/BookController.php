<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserCheck;
use App\Models\Book;
use App\Models\CustomLogin;
use App\Models\Multi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class BookController extends Controller
{
  public function index()
  {
    $data = Book::all();
    return view('admin.Book.index', compact('data'));
  }
  public function store(Request $request)
  {
    $user = Session::get('email');
    if (!isset($user)) {
      return redirect('customlogin');
    }

    $input = $request->all();
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'date' => 'required',
      'time' => 'required',
      'person' => 'required',
    ]);
    $input['status'] = 1;
    Book::create($input);
    return redirect('/')->with('status', 'Recored  Created Successfuly!');
  }
  public function edit($id)
  {
    $data = Book::find($id);
    return view('admin.book.edit', compact('data'));
  }
  public function update(Request $request)
  {
    $data = Book::find($request->id);
    $request->validate([
      'name' => 'required ',
      'email' => 'required ',
      'phone' => 'required ',
      'date' => 'required ',
      'time' => 'required ',
      'person' => 'required ',
    ]);

    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['date'] = $request->date;
    $data['time'] = $request->time;
    $data['person'] = $request->person;
    $data['status'] = isset($request->status) ? 1 : 0;
    $data->save();
    return redirect('admin/book/')->with('status', 'Recored Updated Successfuly!');
  }
  public function destory($id)
  {
    $data = Book::find($id);
    if (isset($data)) {
      $data->delete();
      return redirect('admin/book/')->with('delete', 'Recored Deleted Successfuly!');
    } else {
      return "record not found";
    }
  }

}
