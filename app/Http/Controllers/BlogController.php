<?php

namespace App\Http\Controllers;

use App\blog;
use App\category;
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
        $blogs = blog::all()->sortBy('order');
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
        $category =category::where([
            ['is_active', '=',1 ],
            ['type', '=','0' ]
        ])->get();
        return view('admin.createBlog',[
            "category" =>$category,
        ]);
    }

    public function postAdd(Request $req)
    {
        
        $this->validate($req,
        [
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'fImage' => 'required',
        ],
        [
            'name.required' => 'Vui lòng nhập tên',
            'description.required' => 'Vui lòng nhập nội dung',
            'content.required' => 'Vui lòng nhập nội dung',
            'fImage.required' => 'Vui lòng nhập ảnh',
        ]
    );

        $blog = new blog;
        $blog->name = $req->name;
        $blog->description = $req->description;
        $blog->content = $req->content;
        $blog->is_active = $req->rdoState;
        $blog->type = $req->type;
        $blog->order = $req->order;
        $blog->views = 0;
        $blog->alt = $req->alt;
        if($req->hasFile('fImage')):
            $image = $req->file('fImage');
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
        $category =category::where([
            ['type', '=','1' ],
            ['type', '=','0' ]
        ])->get();
        return view('admin.editBlog',[
            "category" =>$category,
            "blog" =>$blog,
        ]);
        // return view('admin.editBlog',compact('blog'));
    }

    public function postUpdate(Request $req){
        $this->validate($req,
            [
                'name' => 'required',
                'description' => 'required',
                'content' => 'required',
                'fImage' => 'required',

                

            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'description.required' => 'Vui lòng nhập nội dung',
                'content.required' => 'Vui lòng nhập nội dung',
                'fImage.required' => 'Vui lòng nhập ảnh',

                

            ]
        );

        $blog = blog::find($req->id);
        $blog->name = $req->name;
        $blog->description = $req->description;
        $blog->content = $req->content;
        $blog->is_active = $req->rdoState;
        $blog->type = $req->type;
        $blog->order = $req->order;
        $blog->views = 0;
        $blog->alt = $req->alt;
        if($req->hasFile('fImage')):
            $file = $req->fImage;
            $filename = $file->getClientOriginalName();
            $location = public_path('images/img/'.$filename);
            Image::make($file)->save($location);
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
    // public function destroy(blog $blog)
    // {
    //     //
    //     $blog = blog::find($req->id);
    //     if($blog->delete())
    //         return redirect()->route('blog-list')->with('message','Xóa thành công');
    //     return redirect()->route('blog-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    // }
}
