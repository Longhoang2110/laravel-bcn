<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
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
        $blogs = blog::all();
        return view('admin.listBlog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.createBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAdd(){
        return view('admin.createBlog');
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
        
        $blog = new blog;
        $blog->name = $req->name;
        $blog->description = $req->description;
        $blog->content = $req->content;
        $blog->is_active = $req->rdoState;

        if($req->hasFile('BlogImage')):
            $image = $req->file('BlogImage');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/img/'.$filename);
            Image::make($image)->save($location);
            $blog->thumbnail = $filename;
        endif;
        
        if($blog->save())
            return redirect()->route('blog-list')->with('message','Thêm thành công');
        return redirect()->route('blog-list')->with('message','Thêm thất bại vui lòng thử lại sau');
    }

    public function getUpdate(Request $req){
        $blog = blog::find($req->id);
        return view('admin.editBlog',compact('blog'));
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
        
        $blog = blog::find($req->id);
        $blog->name = $req->name;
        $blog->description = $req->description;
        $blog->content = $req->content;
        $blog->is_active = $req->rdoState;

        if($req->hasFile('fImage')):
            $image = $req->file('thumbnail');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/img/'.$filename);
            Image::make($image)->save($location);
            Storage::delete($blog->thumbnail);
            $blog->thumbnail = $filename;
        endif;
        
        if($blog->save())
            return redirect()->route('blog-list')->with('message','Cập nhật thành công');
        return redirect()->route('blog-list')->with('message','Cập nhật thất bại vui lòng thử lại sau');
    }

    public function delete(Request $req){
        $blog = blog::find($req->id);
        if($blog->delete())
            return redirect()->route('blog-list')->with('message','Xóa thành công thành công');
        return redirect()->route('blog-list')->with('message','Xóa thất bại vui lòng thử lại sau');
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
    public function destroy(blog $blog)
    {
        //
        $blog = blog::find($req->id);
        if($blog->delete())
            return redirect()->route('blog-list')->with('message','Xóa thành công');
        return redirect()->route('blog-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    }
}
