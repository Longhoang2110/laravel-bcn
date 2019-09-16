<?php

namespace App\Http\Controllers;
use App\buyer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $buyer = buyer::all();
        return view('admin.dashboard',compact('buyer'));
    }
}
