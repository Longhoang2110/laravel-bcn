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
use Illuminate\Support\Facades\DB;  

class PageController extends Controller
{
    
  function __construct()
  {
    $address = address::all()->sortByDesc("id");
    view()->share(
        'address',$address

    );   
  }
    public function coffee() {
        // $coffee = coffee::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate(6);
        // return view('home',compact('coffee'));
        $coffees = coffee::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        return view('home',compact('coffees'));
    }

    public function coffeeDetail(Request $req){
        $coffee = coffee::find($req->id);
        $coffees = coffee::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        $cout_view = coffee::find($req->id);
        $cout_view ->increment('cout_view');
        $group = group::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $category_product =category::where([
            ['is_active', '=', 1],
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
        $coffees = coffee::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        $group = group::all();

        $category_product =category::where([
            ['is_active', '=', 1],
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['is_active', '=', 1],
            ['type', '=','0' ]
        ])->get();
        $blogs = blog::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
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
        $coffees = coffee::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        // $address = address::all();
        $group = group::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        $cout_view = blog::find($req->id);
        $cout_view ->increment('views');
        $category_blog =category::where([
            ['is_active', '=', 1],
            ['type', '=','0' ]
        ])->get();
        $category =category::where([
            ['is_active', '=', 1],
            ['type', '=','0' ]
        ])->get();
        $category_product =category::where([
            ['is_active', '=', 1],
            ['type', '=','1' ]
        ])->get();

        return view('blog_detail',[
            "blog" => $blog,
            "coffees" => $coffees,
            // "address" =>$address,
            "category" =>$category,
            "category_product" =>$category_product,
            "group"=>$group,
            "category_blog" =>$category_blog,





            //"discount_tour" => $discountTours
            ]);
    }


    public function home() {
        $coffees = coffee::where([
            ['is_active', '=', 1]
        ])->get();
        //   ->orderBy('order','Desc');
        $blogs = blog::where([
            ['is_active', '=', 1]
        ])->get();
        //   ->orderBy('order','Desc');
        $displays = display::all();
        // $address = address::all();
        $group = group::where([
            ['is_active', '=', 1]  
        ])->get();

        $category_product =category::where([
            ['type', '=','1' ],
            ['is_active', '=', 1]
        ])->take(6)->get();
        $category_blog =category::where([
            ['type', '=','0' ],
            ['is_active', '=', 1]
        ])->get();
        $category1 =category::where([
            ['is_active', '=', 1],
            ['category_home_order', '=', 1],
            ['category_home','=',1 ]
        ])->first();
        $category2 =category::where([
            ['is_active', '=', 1],
            ['category_home_order', '=', 2],
            ['category_home','=',1 ]
        ])->first();
        $category3 =category::where([
            ['is_active', '=', 1],
            ['category_home_order', '=', 3],
            ['category_home','=',1 ]
        ])->first();
        $coffee1  = DB::table('coffee')
        ->select('coffee.*',)
        ->leftJoin('category', 'coffee.type', '=', 'category.id')
        ->where('coffee.is_active','=',1)
        ->where('category.category_home_order','=',1)
            ->get();
            // ->orderBy('order','Desc');
        $coffee2 = DB::table('coffee')
        ->select('coffee.*',)
        ->leftJoin('category', 'coffee.type', '=', 'category.id')
        ->where('coffee.is_active','=',1)
        ->where('category.category_home_order','=',2)
            ->get();
            // ->orderBy('order','Desc')
        $coffee3 = DB::table('coffee')
        ->select('coffee.*',)
        ->leftJoin('category', 'coffee.type', '=', 'category.id')
        ->where('coffee.is_active','=',1)
        ->where('category.category_home_order','=',3)
            ->get();
            // ->orderBy('order','Desc')
        return view('home',[
            "blogs" => $blogs,
            "coffees" => $coffees,
            "displays"=>$displays,
            // "address" =>$address,
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
        $coffees = coffee::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        $blog = blog::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        // $address = address::all();
        $group = group::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');

        $category_product =category::where([
            ['is_active', '=', 1],
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['is_active', '=', 1],
            ['type', '=','0' ]
        ])->get();
        // $from = $coffees->price;
        // $to = $coffees->discount;
        // if($from==$to || !$to) return '';
        // $percent=round(($from-$to)/$from*100);
        // $text=$from>$to? 'Giảm':'Tăng';
        return view('product',[
            "category_product" =>$category_product,
            "coffees" =>$coffees,
            "blog" =>$blog,
            "category_blog" =>$category_blog,
            // "percent"=>$percent,
            "group"=>$group,
            // "text"=>$text,


            "nameCate" => "Tất cả sản phẩm" 
        ]);
        // return view('product',compact('coffees'));

    }

    public function introduce(){
        // $address = address::all();
        $group = group::where([
            ['is_active', '=', 1]
        ])->get();

        $category_product =category::where([
            ['is_active', '=', 1],
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['is_active', '=', 1],
            ['type', '=','0' ]
        ])->get();
        return view('introduce',[
            // "address" => $address,
            "category_product" =>$category_product,
            "category_blog" =>$category_blog,
            "group"=>$group,


        ]);
    }

    public function contact(){
        // $address = address::all();
        $group = group::where([
            ['is_active', '=', 1]
        ])->get();

        $category_product =category::where([
            ['is_active', '=', 1],
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['is_active', '=', 1],
            ['type', '=','0' ]
        ])->get();
        return view('contact',[
            // "address" => $address,
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
            ['is_active', '=', 1],
            ['type', '=','0' ]
        ])->get();
        $group = group::where([
            ['is_active', '=', 1]
        ])->get();

        $category_product =category::where([
            ['is_active', '=', 1],
            ['type', '=','1' ]
        ])->get();
        $coffees = coffee::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        // $address = address::all();


        $blog =blog::where([
            ['is_active', '=', 1],
            ['type', '=',$req->id ]
        ])->get()->sortBy('order'); 
        $group = group::where([
            ['is_active', '=', 1]
        ])->get();

        return view('blog',[
            "category_blog" =>$category_blog,
            "blogs" =>$blog,
            "coffees" => $coffees,
            // "address" => $address,
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
        // $address = address::all();
        $group = group::all();


        // echo $content;
        return view('introduce',[
            "page" =>$content,
            // "address" =>$address,
            "category_product" =>$category_product,
            "category_blog" =>$category_blog,
            "group"=>$group,



        ]);


    }  
}
