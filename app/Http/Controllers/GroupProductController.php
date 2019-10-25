<?php

namespace App\Http\Controllers;

use App\category;
use App\group;
use Illuminate\Http\Request;
use App\address;
use App\blog;
use App\coffee;

use Intervention\Image\ImageManagerStatic as Image;

class GroupProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $group = group::all();
        return view('admin.listGroupProduct ',compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.createGroupProduct');
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
        return view('admin.createGroupProduct',[
            "category" =>$category,
            "group" =>$group,

        ]);
    }

    public function postAdd(Request $req)
    {
        
        $this->validate($req,
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
            ]
        );
        $group = new group;
        $group->name = $req->name;
        $group->group = $req->group;
        // $group->is_active = $req->rdoState;
        if($group->save())
            return redirect()->route('group_product-list')->with('message','Thêm thành công');
        return redirect()->route('group_product-list')->with('message','Thêm thất bại vui lòng thử lại sau');
    }

    public function getUpdate(Request $req){
        $category =category::where([
            ['type', '=','1' ]
        ])->get();
        $group = group::find($req->id);
        return view('admin.editGroupProduct',compact('category','group'));
    }

    public function postUpdate(Request $req){
        $this->validate($req,
        [
            'name' => 'required',
        ],
        [
            'name.required' => 'Vui lòng nhập tên',
        ]
    );
        $group = group::find($req->id);
        $group->name = $req->name;
        $group->group = $req->group;

        if($group->save())
            return redirect()->route('group_product-list')->with('message','Cập nhật thành công');
        return redirect()->route('group_product-list')->with('message','Cập nhật thất bại vui lòng thử lại sau');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    // public function destroy(blog $blog)
    // {
    //     //
    //     $category = category::find($req->id);
    //     if($category->delete())
    //         return redirect()->route('category-list')->with('message','Xóa thành công');
    //     return redirect()->route('category-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    // }
    public function group_productcoffee(Request $req){
        $nameCate = $req->name;
        $category_product =category::where([
            ['type', '=','1' ]
        ])->get();
        $category_blog =category::where([
            ['type', '=','0' ]
        ])->get();
        $address = address::all()->sortByDesc("id");
        $blog = blog::all()->sortBy('order');
        $group = group::all();
        $coffees =coffee::where([
            ['code', '=',$req->id ]
        ])->get();
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

