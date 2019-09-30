<?php

namespace App\Http\Controllers;
use App\blog;
use App\coffee;
use App\category;
use App\address;
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
        $coffees = coffee::all();
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

        return view('admin.createCoffee',[
            "category" =>$category,

        ]);
    }

    public function postAdd(Request $req)
    {
        //
        $this->validate($req,
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required'
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'description.required' => 'Vui lòng nhập nội dung',
                'price.required' => 'Vui lòng nhập giá'
            ]
        );

        echo $req;

        $coffee = new coffee;
        $coffee->name = $req->name;
        $coffee->description = $req->description;
        $coffee->type = $req->type;
        $coffee->price = $req->price;
        $coffee->is_active = $req->rdoState;
        $coffee->alt = $req->alt;
        $coffee->type = $req->type;
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
        return view('admin.editCoffee',[
            "category" =>$category,
            "coffee" =>$coffee,
        ]);

        }
        // return view('admin.editCoffee',compact('coffee'));


    public function postUpdate(Request $req){
        $this->validate($req,
            [
                'name' => 'required',
                'description' => 'required'
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'description.required' => 'Vui lòng nhập nội dung'
            ]
        );

        $coffee = coffee::find($req->id);
        $coffee->name = $req->name;
        $coffee->description = $req->description;
        $coffee->price = $req->price;
        $coffee->is_active = $req->rdoState;
        $coffee->alt = $req->alt;
        $coffee->type = $req->type;
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
        $category =category::where([
            ['type', '=','1' ]
        ])->get();
        $address = address::all();
        $blog = blog::all();
        $coffees =coffee::where([
            ['type', '=',$req->id ]
        ])->get();
        return view('product',[
            "category" =>$category,
            "coffees" =>$coffees,
            "address" =>$address,
            "blog" =>$blog,
            "nameCate" => $nameCate


            

        ]);

    }
}
