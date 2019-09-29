<?php

namespace App\Http\Controllers;

use App\blog;
use App\post;
use App\content;
use App\category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ContentController extends Controller
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
        $content =content::all();
        return view('admin.listContent',compact('content'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function getAdd(){
    //     $category =category::where([
    //         ['type', '=','2' ]
    //     ])->get();    
    //     return view('admin.createPost',[
    //         "category" =>$category,
    //     ]);
    // }

    // public function postAdd(Request $req)
    // {
    //     //
    //     // $this->validate($req,
    //     //     [
    //     //         'txtName' => 'required',
    //     //         'txtInfo' => 'required',
    //     //         'fImage' => 'required'
    //     //     ],
    //     //     [
    //     //         'txtName.required' => 'Vui lòng nhập tên',
    //     //         'txtInfo.required' => 'Vui lòng nhập nội dung',
    //     //         'fImage.required' => 'Vui lòng chọn hình ảnh'
    //     //     ]
    //     // );

    //     //echo $req;

    //     $post = new post;
    //     $post->name = $req->name;
    //     $post->description = $req->description;
    //     $post->content = $req->content;
    //     $post->is_active = $req->rdoState;
    //     $post->type = $req->type;


    //     if($req->hasFile('BlogImage')):
    //         $image = $req->file('BlogImage');
    //         $filename = time() . '.' . $image->getClientOriginalExtension();
    //         $location = public_path('images/img/'.$filename);
    //         Image::make($image)->save($location);
    //         $post->thumbnail = $filename;
    //     endif;

    //     if($post->save())
    //         return redirect()->route('post-list')->with('message','Thêm thành công');
    //     return redirect()->route('post-list')->with('message','Thêm thất bại vui lòng thử lại sau');
    // }

    public function getUpdate(Request $req){
        $content = content::find($req->id);
        return view('admin.editContent',[
            "content" =>$content,
        ]);
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

        $content = content::find($req->id);
        $content->name = $req->name;
        $content->is_active = $req->rdoState;
        $content->type = $req->type;
        if($content->save())
            return redirect()->route('content-list')->with('message','Cập nhật thành công');
        return redirect()->route('content-list')->with('message','Cập nhật thất bại vui lòng thử lại sau');
    }

    public function delete(Request $req){
        $content = content::find($req->id);
        if($content->delete())
            return redirect()->route('post-list')->with('message','Xóa thành công thành công');
        return redirect()->route('post-list')->with('message','Xóa thất bại vui lòng thử lại sau');
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
        $content = content::find($req->id);
        if($content->delete())
            return redirect()->route('blog-list')->with('message','Xóa thành công');
        return redirect()->route('blog-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    }
}
