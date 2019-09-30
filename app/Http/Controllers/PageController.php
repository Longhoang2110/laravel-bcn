<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coffee;
use App\blog;
use App\display;
use App\category;
use App\content;
use App\address;
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
        $address = address::all();

        return view('coffee_detail',[
            "coffee" => $coffee,
            "coffees" => $coffees,
            "address" =>$address,

            //"discount_tour" => $discountTours
            ]);
    }

    public function blog() {
        //$blog = blog::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        $coffees = coffee::all();
        $address = address::all();

        $category =category::where([
            ['type', '=','0' ]
        ])->get();
        $blogs = blog::all();
        return view('blog',[
            "blogs" => $blogs,
            "coffees" => $coffees,
            "category" =>$category,
            "address" =>$address,

            //"discount_tour" => $discountTours
            ]);
    }

    public function blogDetail(Request $req) {
        $blog = blog::find($req->id);
        $coffees = coffee::all();
        $address = address::all();
        $category =category::where([
            ['type', '=','0' ]
        ])->get();

        //$blog = blog::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        return view('blog_detail',[
            "blog" => $blog,
            "coffees" => $coffees,
            "address" =>$address,
            "category" =>$category,


            //"discount_tour" => $discountTours
            ]);
    }


    public function home() {
        //$blog = blog::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        $coffees = coffee::all();
        $blogs = blog::all();
        $displays = display::all();
        $address = address::all();

        return view('home',[
            "blogs" => $blogs,
            "coffees" => $coffees,
            "displays"=>$displays,
            "address" =>$address,

            //"discount_tour" => $discountTours
            ]);
        //return view('home');
    }

    public function product(){
        $coffees = coffee::all();
        $blog = blog::all();
        $address = address::all();
        $category =category::where([
            ['type', '=','1' ]
        ])->get();
        return view('product',[
            "category" =>$category,
            "coffees" =>$coffees,
            "address" =>$address,
            "blog" =>$blog,
            "nameCate" => "Tất cả sản phẩm" 
        ]);
        // return view('product',compact('coffees'));

    }

    public function introduce(){
        $address = address::all();

        return view('introduce',[
            "address" => $address,
        ]);
    }

    public function contact(){
        $address = address::all();

        return view('contact',[
            "address" => $address,

        ]);
    }

    public function addImages(){
        return view('admin.addImages');
    }

    public function categoryblog(Request $req){
        // echo $req->id;
        $category =category::where([
            ['type', '=','0' ]
        ])->get();
        $coffees = coffee::all();
        $address = address::all();


        $blog =blog::where([
            ['type', '=',$req->id ]
        ])->get();        
        return view('blog',[
            "category" =>$category,
            "blogs" =>$blog,
            "coffees" => $coffees,
            "address" => $address,

            // "coffee" => $coffee,


        ]);

    } 
    public function content(Request $req){
        $content = content::where([
            ['type','=',$req->type]
        ])->get();
        $address = address::all();

        // echo $content;
        return view('introduce',[
            "page" =>$content,
            "address" =>$address,
        ]);


    }  
}
