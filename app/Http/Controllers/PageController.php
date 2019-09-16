<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coffee;
use App\blog;
class PageController extends Controller
{
    //
    public function coffee() {
        // $coffee = coffee::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        // return view('home',compact('coffee'));
        $coffees = coffee::all();
        return view('home',compact('coffees'));
    }

    public function coffeeDetail(Request $req){
        $coffee = coffee::find($req->id);
        $coffees = coffee::all();
        return view('coffee_detail',[
            "coffee" => $coffee,
            "coffees" => $coffees,
            //"discount_tour" => $discountTours
            ]);
    }

    public function blog() {
        //$blog = blog::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        $coffees = coffee::all();
        $blogs = blog::all();
        return view('blog',[
            "blogs" => $blogs,
            "coffees" => $coffees,
            //"discount_tour" => $discountTours
            ]);
    }

    public function blogDetail(Request $req) {
        $blog = blog::find($req->id);
        $coffees = coffee::all();
        //$blog = blog::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        return view('blog_detail',[
            "blog" => $blog,
            "coffees" => $coffees,
            //"discount_tour" => $discountTours
            ]);
    }

    public function home() {
        //$blog = blog::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        $coffees = coffee::all();
        $blogs = blog::all();
        return view('home',[
            "blogs" => $blogs,
            "coffees" => $coffees,
            //"discount_tour" => $discountTours
            ]);
        //return view('home');
    }

    public function product(){
        $coffees = coffee::all();
        return view('product',compact('coffees'));
    }

    public function introduce(){
        return view('introduce');
    }

    public function contact(){
        return view('contact');
    }

    public function addImages(){
        return view('admin.addImages');
    }
    
}
