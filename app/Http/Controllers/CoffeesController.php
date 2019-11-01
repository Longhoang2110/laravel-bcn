<?php

namespace App\Http\Controllers;
use App\blog;
use App\coffee;
use App\category;
use App\address;
use App\group;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;  

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CoffeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('admin.listCoffee');
        // $coffees = coffee::all();
        $coffees = DB::table('coffee')
            ->select('coffee.*','group.name AS nameg','category.name AS namecate')
            ->leftJoin('category', 'coffee.type', '=', 'category.id')
            ->leftJoin('group', 'group.id', '=', 'coffee.code')
            ->where('coffee.is_active','=',1)
            ->get()->sortBy('order');
       

        return view('admin.listCoffee',compact('coffees'));
    }

    public function listCoffeAdmin()
    {
        //
        //return view('admin.listCoffee');
        // $coffees = coffee::all();
        $coffees = DB::table('coffee')
            ->select('coffee.*','group.name AS nameg','category.name AS namecate')
            ->leftJoin('category', 'coffee.type', '=', 'category.id')
            ->leftJoin('group', 'group.id', '=', 'coffee.code')
            ->get()->sortBy('order');
       

        return view('admin.listCoffee',compact('coffees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        //
        return view('admin.createCoffee',[
            "category" =>$category,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAdd(){
        $category =category::where([
            ['type', '=','1' ]
        ])->get();
        $group = group::all();

        return view('admin.createCoffee',[
            "category" =>$category,
            "group" =>$group,


        ]);
    }

    public function postAdd(Request $req)
    {
        //
        $this->validate($req,
        [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'fImage' => 'required',
            'alt' => 'required',
            'order' => 'required',
        ],
        [
            'name.required' => 'Vui lòng nhập tên',
            'description.required' => 'Vui lòng nhập nội dung',
            'price.required' => 'Vui lòng nhập giá',
            'fImage.required' => 'Vui lòng nhập ảnh',
            'alt.required' => 'Vui lòng nhập tên  ảnh',
            'order.required' => 'Vui lòng nhập thứ tự xuất hiện sản phẩm',

        ]
    );

        $time = Carbon::now('Asia/Ho_Chi_Minh');
        $coffee = new coffee();
        $coffee->name = $req->name;
        $coffee->description = $req->description;
        $coffee->type = $req->type;
        $coffee->price = $req->price;
        $coffee->is_active = $req->rdoState;
        $coffee->alt = $req->alt;
        $coffee->type = $req->type;
        $coffee->code = $req->code;
        $coffee->created_at = $time;
        $coffee->cout_view = 0;
        $coffee->order = $req->order;
        $coffee->discount = $req->discount;
        $sale_up =($req->price /100);
        $coffee->discount_up = (( $req->price)-($req->discount))/$sale_up;
        $coffee->content = $req->content;
        $coffee->producer = $req->producer;
        $coffee->product_code = $req->product_code;
        $coffee->product_status = $req->product_status;
        $coffee->product_guarantee = $req->product_guarantee;
        if($req->hasFile('fImage')):
            $image = $req->file('fImage');
            $filename=$image->getClientOriginalName();
            $location = public_path('images/img/'.$filename);
            Image::make($image)->save($location);
            $coffee->thumbnail = $filename;
        endif;

        if($coffee->save())
            return redirect()->route('coffee-list')->with('message','Thêm thành công');
        return redirect()->route('coffee-list')->with('message','Thêm thất bại vui lòng thử lại sau');
    }

    public function getUpdate(Request $req){
        $coffee = coffee::find($req->id);
        $category =category::where([
            ['type', '=','1' ]
        ])->get();
        $group = group::all();

        return view('admin.editCoffee',[
            "category" =>$category,
            "coffee" =>$coffee,
            "group" =>$group,

            
        ]);

        }
        // return view('admin.editCoffee',compact('coffee'));


    public function postUpdate(Request $req){
    //     $this->validate($req,
    //     [
    //         'name' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //         'fImage' => 'required',
    //         'alt' => 'required',
    //         'order' => 'required',
    //     ],
    //     [
    //         'name.required' => 'Vui lòng nhập tên',
    //         'description.required' => 'Vui lòng nhập nội dung',
    //         'price.required' => 'Vui lòng nhập giá',
    //         'fImage.required' => 'Vui lòng nhập ảnh',
    //         'alt.required' => 'Vui lòng nhập tên  ảnh',
    //         'order.required' => 'Vui lòng nhập thứ tự xuất hiện sản phẩm',
    //     ]
    // );
        $time = Carbon::now('Asia/Ho_Chi_Minh');
        $coffee = coffee::find($req->id);
        $coffee->name = $req->name;
        $coffee->description = $req->description;
        $coffee->price = $req->price;
        $coffee->is_active = $req->rdoState;
        $coffee->alt = $req->alt;
        $coffee->type = $req->type;
        $coffee->updated_at = $time;
        $coffee->code = $req->code;
        $coffee->cout_view = 0;
        $coffee->order = $req->order;
        $coffee->discount = $req->discount;
        $coffee->content = $req->content;
        $coffee->producer = $req->producer;
        $coffee->product_code = $req->product_code;
        $coffee->product_status = $req->product_status;
        $coffee->product_guarantee = $req->product_guarantee;
        $sale_up =($req->price /100);
        $coffee->discount_up = (( $req->price)-($req->discount))/$sale_up;
        if($req->hasFile('fImage')):
            $image = $req->file('fImage');
            $filename=$image->getClientOriginalName();
            $location = public_path('images/img/'.$filename);
            Image::make($image)->save($location);
            $coffee->thumbnail = $filename;
        endif;

        if($coffee->save())
            return redirect()->route('coffee-list')->with('message','Cập nhật thành công');
        return redirect()->route('coffee-list')->with('message','Cập nhật thất bại vui lòng thử lại sau');
    }

    public function delete(Request $req){
        $coffee = coffee::find($req->id);
        if($coffee->delete())
            return redirect()->route('coffee-list')->with('message','Xóa thành công thành công');
        return redirect()->route('coffee-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function show(coffee $coffee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function edit(coffee $coffee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coffee $coffee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function destroy(coffee $coffee)
    {
        //
        $coffee = coffee::find($coffee->id);
        if($coffee->delete())
            return redirect()->route('coffee-list')->with('message','Xóa thành công thành công');
        return redirect()->route('coffee-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    }
    public function categorycoffee(Request $req){
        $nameCate = $req->name;
        
        $category_product =category::where([
            ['type', '=','1' ],
            ['is_active', '=', 1]
        ])->get();
        $category_blog =category::where([
            ['type', '=','0' ],
            ['is_active', '=', 1]
        ])->get();
        $address = address::all();
        $blog = blog::all();
        $group = group::all();
        $coffees =coffee::where([
            ['type', '=',$req->id ],
            ['is_active', '=', 1]
        ])->orderBy('order', 'desc')->get();
        return view('product',[
            "category_product" =>$category_product,
            "coffees" =>$coffees,
            "address" =>$address,
            "blog" =>$blog,
            "nameCate" => $nameCate,
            "category_blog" =>$category_blog,
            "group"=>$group,
        ]);

    }
}
