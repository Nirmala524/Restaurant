<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index()
    {
        $data = Title::find(1);

        return view('admin.title.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $data = Title::find(1);
        $request->validate([
            'name' => 'required ',
            'title' => 'required',
            'cname' => 'required',
            'ctitle'=>'required',
            'hname' => 'required',
            'htitle'=>'required',
            'bname' => 'required',
            'btitle'=>'required',
            'fname' => 'required',
            'ftitle'=>'required',
            
        ]);
      
      
        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['cname'] = $request->cname;
        $data['ctitle'] = $request->ctitle;
        $data['hname'] = $request->hname;
        $data['htitle'] = $request->htitle;
        $data['bname'] = $request->bname;
        $data['btitle'] = $request->btitle;
        $data['fname'] = $request->fname;
        $data['ftitle'] = $request->ftitle;

       $data->save();
        
        return redirect('admin/title');
    }

}
