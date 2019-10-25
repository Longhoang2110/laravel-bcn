<?php

namespace App\Http\Controllers;
use App\buyer;
use App\coffee;
use DB;
use Illuminate\Http\Request;
use App\users;

class AdminController extends Controller
{
    //
    public function getlogin(){
         return view('admin.login');

        // $buyer = buyer::all();
        // $buyer = DB::table('buyer')
        //     ->join('coffee', 'buyer.coffee_id', '=', 'coffee.id')
        //     ->select('buyer.*', 'coffee.name as coffeename')
        //     ->get();
        //     echo $buyer;
        // return view('admin.dashboard',compact('buyer'));
    }
    public function postlogin(Request $req){
            // $email =DB::table('users')->select('email')->get();
            // $users = DB::table('users')->where('email', '=', $req)->get();
            $email="huucong123";
            // $password =DB::table('users')->select('password')->get();
            // $password = DB::table('users')->where('password', '=', $req)->get();
            // echo$users;

            $password="cong123456";
            
        if($req ->email==$email && $req->password==$password){         
            // $buyer = buyer::all();
            $buyer = DB::table('buyer')
                ->join('coffee', 'buyer.coffee_id', '=', 'coffee.id')
                ->select('buyer.*', 'coffee.name as coffeename')
                ->get()->sortBy('id');
            return view('admin.dashboard',compact('buyer'));
            
        } else {
            return view('admin.login')->with('message','Thêm thất bại vui lòng thử lại sau');
            // return redirect()->route('getadmin')->with('message','Cập nhật thất bại vui lòng thử lại sau');
        }
        echo("đăng nhập không thành công");
        return view('admin.login')->with('message','Thêm thất bại vui lòng thử lại sau');
        return redirect('/getadmin');
        
     }  

     public function dashboard(){

       $buyer = buyer::all();
       $buyer = DB::table('buyer')
           ->join('coffee', 'buyer.coffee_id', '=', 'coffee.id')
           ->select('buyer.*', 'coffee.name as coffeename')
           ->get();
       return view('admin.dashboard',compact('buyer'));
   }
}
