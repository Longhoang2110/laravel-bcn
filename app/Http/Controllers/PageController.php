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
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $blogs = blog::all();
        return view('blog',[
            "blogs" => $blogs,
            "coffees" => $coffees,
            // "category" =>$category,
            "address" =>$address,
            "category_blog" =>$category_blog,
            "category_product" =>$category_product,


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
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();

        return view('blog_detail',[
            "blog" => $blog,
            "coffees" => $coffees,
            "address" =>$address,
            "category" =>$category,
            "category_product" =>$category_product,



            //"discount_tour" => $discountTours
            ]);
    }


    public function home() {
        $coffees = coffee::all();
        $blogs = blog::all();
        $displays = display::all();
        $address = address::all();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        return view('home',[
            "blogs" => $blogs,
            "coffees" => $coffees,
            "displays"=>$displays,
            "address" =>$address,
            "category_product" =>$category_product,
            "category_blog" =>$category_blog,



            ]);
    }

    public function product(){
        $coffees = coffee::all();
        $blog = blog::all();
        $address = address::all();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        return view('product',[
            "category_product" =>$category_product,
            "coffees" =>$coffees,
            "address" =>$address,
            "blog" =>$blog,
            "category_blog" =>$category_blog,

            "nameCate" => "Tất cả sản phẩm" 
        ]);
        // return view('product',compact('coffees'));

    }

    public function introduce(){
        $address = address::all();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        return view('introduce',[
            "address" => $address,
            "category_product" =>$category_product,
            "category_blog" =>$category_blog,

        ]);
    }

    public function contact(){
        $address = address::all();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        return view('contact',[
            "address" => $address,
            "category_product" =>$category_product,
            "category_blog" =>$category_blog,



        ]);
    }

    public function addImages(){
        return view('admin.addImages');
    }

    public function categoryblog(Request $req){
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $coffees = coffee::all();
        $address = address::all();


        $blog =blog::where([
            ['type', '=',$req->id ]
        ])->get();        
        return view('blog',[
            "category_blog" =>$category_blog,
            "blogs" =>$blog,
            "coffees" => $coffees,
            "address" => $address,
            "category_product" =>$category_product,



            // "coffee" => $coffee,


        ]);

    } 
    public function content(Request $req){
        $content = content::where([
            ['type','=',$req->type]
        ])->get();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $address = address::all();

        // echo $content;
        return view('introduce',[
            "page" =>$content,
            "address" =>$address,
            "category_product" =>$category_product,
            "category_blog" =>$category_blog,


        ]);


    }  
}
