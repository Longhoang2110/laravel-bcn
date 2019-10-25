<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coffee;
use App\blog;
use App\display;
use App\category;
use App\content;
use App\address;
use App\group;

class PageController extends Controller
{
    
  function __construct()
  {
    $address = address::all();
    view()->share(
        'address',$address

    );   
  }
    public function coffee() {
        // $coffee = coffee::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        // return view('home',compact('coffee'));
        $coffees = coffee::all();
        return view('home',compact('coffees'));
    }

    public function coffeeDetail(Request $req){
        $coffee = coffee::find($req->id);
        $coffees = coffee::all();
        $cout_view = coffee::find($req->id);
        $cout_view ->increment('cout_view');
        $group = group::all();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();


        return view('coffee_detail',[
            "coffee" => $coffee,
            "coffees" => $coffees,
            // "address" =>$address,
            "group"=>$group,
            "category_blog" =>$category_blog,
            "category_product" =>$category_product,

            //"discount_tour" => $discountTours
            ]);
    }

    public function blog() {
        //$blog = blog::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        $coffees = coffee::all();
        // $address = address::all();
        $group = group::all();

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
            // "address" =>$address,
            "category_blog" =>$category_blog,
            "category_product" =>$category_product,
            "group"=>$group,



            //"discount_tour" => $discountTours
            ]);
    }

    public function blogDetail(Request $req) {
        $blog = blog::find($req->id);
        $coffees = coffee::all();
        $address = address::all();
        $group = group::all();
        $cout_view = blog::find($req->id);
        $cout_view ->increment('views');
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
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
            "group"=>$group,
            "category_blog" =>$category_blog,





            //"discount_tour" => $discountTours
            ]);
    }


    public function home() {
        $coffees = coffee::all();
        $blogs = blog::all();
        $displays = display::all();
        $address = address::all();
        $group = group::all();

        $category_product =category::where([
            ['type', '=','1' ]
        ])->take(6)->get();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $category1 =category::where([
            ['id', '=','13' ]
        ])->first();
        $category2 =category::where([
            ['id', '=','14' ]
        ])->first();
        $category3 =category::where([
            ['id', '=','15' ]
        ])->first();

        $coffee1 =coffee::where([
            ['type', '=','13']
        ])->orderByRaw('order DESC')
        ->get();
        $coffee2 =coffee::where([
            ['type', '=','14' ]
        ])->orderByRaw('order DESC')
        ->get();
        $coffee3 =coffee::where([
            ['type', '=','15' ]
        ])->orderByRaw('order DESC')
        ->get();
        return view('home',[
            "blogs" => $blogs,
            "coffees" => $coffees,
            "displays"=>$displays,
            "address" =>$address,
            "category_product" =>$category_product,
            "category_blog" =>$category_blog,
            "group"=>$group,
            "category1"=>$category1,
            "category2"=>$category2,
            "category3"=>$category3,
            "coffee1"=>$coffee1,
            "coffee2"=>$coffee2,
            "coffee3"=>$coffee3,
            ]);
    }

    public function product(){
        $coffees = coffee::all();
        $blog = blog::all();
        $address = address::all();
        $group = group::all();

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
            "group"=>$group,


            "nameCate" => "Tất cả sản phẩm" 
        ]);
        // return view('product',compact('coffees'));

    }

    public function introduce(){
        $address = address::all();
        $group = group::all();

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
            "group"=>$group,


        ]);
    }

    public function contact(){
        $address = address::all();
        $group = group::all();

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
            "group"=>$group,




        ]);
    }

    public function addImages(){
        return view('admin.addImages');
    }

    public function categoryblog(Request $req){
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $group = group::all();

        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $coffees = coffee::all();
        $address = address::all();


        $blog =blog::where([
            ['type', '=',$req->id ]
        ])->get(); 
        $group = group::all();

        return view('blog',[
            "category_blog" =>$category_blog,
            "blogs" =>$blog,
            "coffees" => $coffees,
            "address" => $address,
            "category_product" =>$category_product,
            "group"=>$group,




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
        $group = group::all();


        // echo $content;
        return view('introduce',[
            "page" =>$content,
            "address" =>$address,
            "category_product" =>$category_product,
            "category_blog" =>$category_blog,
            "group"=>$group,



        ]);


    }  
}
