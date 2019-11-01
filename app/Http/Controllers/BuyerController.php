<?php

namespace App\Http\Controllers;
use App\address;
use App\buyer;
use App\blog;
use App\coffees;
use App\category;
use Illuminate\Http\Request;
use App\group;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buyer = coffee::all()->sortBy('order');
        return view('notification',[
            "buyer" =>$buyer,
        ]);
    }

    public function notification(){
        $address = address::all();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();

        return view('notification',[
            "address" =>$address,
            "category_blog" =>$category_blog,
            "category_product" =>$category_product,


        ]);
    }

    public function getAdd(Request $req){
        $address = address::all();        
        $coffeeid = $req->id;
        $group = group::where([
            ['is_active', '=', 1]
        ])->get()
          ->sortBy('order');
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        return view('buy_product',compact('coffeeid','address','category_blog','category_product','group'));
    }

    public function postAdd(Request $req)
    {
        
        $this->validate($req,
            [
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required' ,
                'email' => 'required' ,
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'address.required' => 'Vui lòng nhập địa chỉ',
                'phone.required' => 'Vui lòng nhập SĐT',
                'email.required' => 'Vui lòng nhập email', 
            ]
        );
        $buyer = new buyer;
        $buyer->coffee_id = $req->coffeeid;
        $buyer->name = $req->name;
        $buyer->address = $req->address;
        $buyer->phone = $req->phone;
        $buyer->email = $req->email;
        //$buyer->save();
        if($buyer->save())
            return redirect()->route('buy-success');
        //return redirect()->route('buyer-list')->with('message','Thêm thất bại vui lòng thử lại sau');
    }

    public function getUpdate(Request $req){
        $buyer = buyer::find($req->id);
        return view('admin.editBlog',compact('buyer'));
    }

    public function postUpdate(Request $req){
        $this->validate($req,
        [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required' ,
            'email' => 'required' ,
        ],
        [
            'name.required' => 'Vui lòng nhập tên',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'phone.required' => 'Vui lòng nhập SĐT',
            'email.required' => 'Vui lòng nhập email',
        ]
    );
        $buyer = buyer::find($req->id);
        $buyer->coffee_id = $req->coffeeid;
        $buyer->name = $req->name;
        $buyer->address = $req->address;
        $buyer->amout = $req->amout;
        $buyer->phone = $req->phone;
        $buyer->email = $req->email;
        
        if($buyer->save())
            return redirect()->route('buyer-list')->with('message','Cập nhật thành công');
        return redirect()->route('buyer-list')->with('message','Cập nhật thất bại vui lòng thử lại sau');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(buyer $buyer)
    {
        //
    }
}
