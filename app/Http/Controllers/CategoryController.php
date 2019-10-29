<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = category::all()->sortByDesc("id");
        return view('admin.listCategory ',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAdd(){
        return view('admin.createCategory');
    }

    public function postAdd(Request $req)
    {
        
        $this->validate($req,
            [
                'name' => 'required',
                'code' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'code.required' => 'Vui lòng nhập code',
            ]
        );
        $category = new category;
        $category->name = $req->name;
        $category->code = $req->code;
        $category->type = $req->type;
        $category->is_active = $req->rdoState;
        $category->category_home= $req->category_home;
        if($category->save())
            return redirect()->route('category-list')->with('message','Thêm thành công');
        return redirect()->route('category-list')->with('message','Thêm thất bại vui lòng thử lại sau');
    }

    public function getUpdate(Request $req){
        $category = category::find($req->id);
        return view('admin.editCategory',compact('category'));
    }

    public function postUpdate(Request $req){
    //     $this->validate($req,
    //     [
    //         'name' => 'required',
    //         'code' => 'required',
    //     ],
    //     [
    //         'name.required' => 'Vui lòng nhập tên',
    //         'code.required' => 'Vui lòng nhập code',
    //     ]
    // );
        $category = category::find($req->id);
        $category->name = $req->name;
        $category->code = $req->code;
        $category->type = $req->type;
        $category->is_active = $req->rdoState;
        $category->category_home= $req->category_home;
        if($category->save())
            return redirect()->route('category-list')->with('message','Cập nhật thành công');
        return redirect()->route('category-list')->with('message','Cập nhật thất bại vui lòng thử lại sau');
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
    public function edit(blog $blog)
    {
        //
    }

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
}
