<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Customer;
use App\Models\Dish;
use App\Models\Happy;
use App\Models\Menu;
use App\Models\Multi;
use App\Models\ourservice;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Title;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $data = Slider::all();
        $about = About::find(1);
        $happy = Happy::all();
        $dish = Dish::where('menu_id', 1)->limit(6)->get();
        $limitdish = Dish::where('menu_id', 1)->limit(4)->get();
        $service = Service::all();
        $ourservice = ourservice::find(1);
        $team = Team::all();
        $customer = Customer::all();
        $title = Title::find(1);
        $multi = Multi::find(1);
        $blog = Blog::limit(3)->get();
        return view('front.home', compact('data', 'dish', 'limitdish', 'service', 'ourservice', 'about', 'team', 'customer', 'happy', 'title', 'multi', 'blog'));
    }
    public function about()
    {
        $multi = Multi::find(1);
        $about = About::find(1);
        $happy = Happy::all();
        $service = Service::all();
        $ourservice = ourservice::find(1);
        $team = Team::all();
        $customer = Customer::all();
        $title = Title::find(1);
        return view('front.about', compact('multi', 'service', 'ourservice', 'about', 'team', 'customer', 'happy', 'title'));
    }

    public function menu()
    {
        $multi = Multi::find(1);
        $menus = Menu::all();
        $dishes = Dish::all();
        // $menu=Dish::where('menu_id',1)->get(); 
        // $wine=Dish::where('menu_id',6)->get();
        return view('front.menu', compact('multi', 'menus', 'dishes'));
    }
    public function fetchdish($id)
    {
        $dish = Dish::where('menu_id', $id)->where('status', 1)->get();
        // dd($dish['image']);
        if (isset($dish)) {
            return response()->json([
                'dishs' => $dish,
                'status' => 200,
            ], 200);
        } else {
            return response()->json(['message' => 'dish not found'], 404);
        }
    }
    public function fetchallhdish()
    {
        $dish = Dish::where('status', 1)->get();
        // dd($dish['image']);

        if (isset($dish)) {
            return response()->json([
                'dishs' => $dish,
                'status' => 200,
            ], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    public function blog()
    {
        $multi = Multi::find(1);
        $blog = Blog::all();
        return view('front.blog', compact('multi', 'blog'));
    }

    public function contact()
    {
        $multi = Multi::find(1);
        return view('front.contact', compact('multi'));
    }

    public function reservation()
    {
       $multi=Multi::find(1);
        return view('front.reservation', compact('multi'));
    }
    public function singleblog($id)
    {
        $blog = Blog::find($id);
        $recentblog=Blog::orderByDesc('id')->limit(4)->get();
        $multi = Multi::find(1);
        return view('front.singleblog',compact('blog','multi','recentblog'));
    }

    public function shopdetail()
    {
        return view('front.shop-detail');
    }



}
