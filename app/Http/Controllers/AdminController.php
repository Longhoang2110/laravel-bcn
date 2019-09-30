<?php

namespace App\Http\Controllers;
use App\buyer;
use App\coffee;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        // $buyer = buyer::all();
        $buyer = DB::table('buyer')
            ->join('coffee', 'buyer.coffee_id', '=', 'coffee.id')
            ->select('buyer.*', 'coffee.name as coffeename')
            ->get();
            // echo $buyer;
        return view('admin.dashboard',compact('buyer'));
    }
}
