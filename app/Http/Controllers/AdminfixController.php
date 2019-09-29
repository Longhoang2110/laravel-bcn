<?php

namespace App\Http\Controllers;

use App\display;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AdminfixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('admin.listBlog');
        $displays = display::all();
        return view('admin.listDisplay',compact('displays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.createAdminfix');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAdd(){
        return view('admin.createAdminfix');
    }

    public function postAdd(Request $req)
    {
        //
        // $this->validate($req,
        //     [
        //         'txtName' => 'required',
        //         'txtInfo' => 'required',
        //         'fImage' => 'required'
        //     ],
        //     [
        //         'txtName.required' => 'Vui lòng nhập tên',
        //         'txtInfo.required' => 'Vui lòng nhập nội dung',
        //         'fImage.required' => 'Vui lòng chọn hình ảnh'
        //     ]
        // );

        //echo $req;

        $display = new display;
        $display->name = $req->name;
        $display->description = $req->description;
        $display->content = $req->content;
        $display->is_active = $req->rdoState;

        if($req->hasFile('BlogImage')):
            $image = $req->file('BlogImage');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/img/'.$filename);
            Image::make($image)->save($location);
            $display->thumbnail = $filename;
        endif;

        if($display->save())
            return redirect()->route('display-list')->with('message','Thêm thành công');
        return redirect()->route('display-list')->with('message','Thêm thất bại vui lòng thử lại sau');
    }

    public function getUpdate(Request $req){
        $displays = display::find($req->id);
        return view('admin.editAdminfix',compact('displays'));
    }

    public function postUpdate(Request $req){
        // $this->validate($req,
        //     [
        //         'txtName' => 'required',
        //         'txtInfo' => 'required'
        //     ],
        //     [
        //         'txtName.required' => 'Vui lòng nhập tên',
        //         'txtInfo.required' => 'Vui lòng nhập nội dung'
        //     ]
        // );

        $display = display::find($req->id);
        $display->name = $req->name;
        $display->description = $req->description;
        $display->content = $req->content;
        $display->is_active = $req->rdoState;

        if($req->hasFile('fImage')):
            $file = $req->fImage;
            $filename = $file->getClientOriginalName();
            $location = public_path('images/img/'.$filename);
            Image::make($file)->save($location);
            // Storage::delete($blog->thumbnail);
            $display->thumbnail = $filename;
        endif;

        if($display->save())
            return redirect()->route('display-list')->with('message','Cập nhật thành công');
        return redirect()->route('display-list')->with('message','Cập nhật thất bại vui lòng thử lại sau');
    }

    public function delete(Request $req){
        $display = display::find($req->id);
        if($display->delete())
            return redirect()->route('display-list')->with('message','Xóa thành công thành công');
        return redirect()->route('display-list')->with('message','Xóa thất bại vui lòng thử lại sau');
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
    //     $display = display::find($req->id);
    //     if($display->delete())
    //         return redirect()->route('blog-list')->with('message','Xóa thành công');
    //     return redirect()->route('blog-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    // }
}
