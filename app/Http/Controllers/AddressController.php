<?php

namespace App\Http\Controllers;

use App\blog;
use App\post;
use App\content;
use App\category;
use App\address;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AddressController extends Controller
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
        $address =address::all();
        return view('admin.listAddress',compact('address'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.createAddress');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAdd(){    
        return view('admin.createAddress',[
        ]);
    }

    public function postAdd(Request $req)
    {
        
        $this->validate($req,
            [
                'address' => 'required',
            ],
            [
                'address.required' => 'Vui lòng nhập địa chỉ',
                
            ]
        );

        $address = new address;
        $address->address = $req->name;


    //     if($req->hasFile('BlogImage')):
    //         $image = $req->file('BlogImage');
    //         $filename = time() . '.' . $image->getClientOriginalExtension();
    //         $location = public_path('images/img/'.$filename);
    //         Image::make($image)->save($location);
    //         $post->thumbnail = $filename;
    //     endif;

        if($address->save())
            return redirect()->route('address-list')->with('message','Thêm thành công');
        return redirect()->route('address-list')->with('message','Thêm thất bại vui lòng thử lại sau');
    }

    public function getUpdate(Request $req){
        $address = address::find($req->id);
        return view('admin.editAddress',[
            "address" =>$address,
        ]);
    }

    public function postUpdate(Request $req){
        $this->validate($req,
            [
                'address' => 'required',
            ],
            [
                'address.required' => 'Vui lòng nhập địa chỉ',
            ]
        );

        $address = address::find($req->id);
        $address->address = $req->address;
        if($address->save())
            return redirect()->route('address-list')->with('message','Cập nhật thành công');
        return redirect()->route('address-list')->with('message','Cập nhật thất bại vui lòng thử lại sau');
    }

    public function delete(Request $req){
        $address = address::find($req->id);
        if($address->delete())
            return redirect()->route('address-list')->with('message','Xóa thành công thành công');
        return redirect()->route('address-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\blog  $blog
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(blog $blog)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\blog  $blog
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(blog $blog)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\blog  $blog
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, blog $blog)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\blog  $blog
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(blog $blog)
    // {
    //     //
    //     $blog = blog::find($req->id);
    //     if($blog->delete())
    //         return redirect()->route('blog-list')->with('message','Xóa thành công');
    //     return redirect()->route('blog-list')->with('message','Xóa thất bại vui lòng thử lại sau');
    // }
}
