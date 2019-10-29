<?php

namespace App\Http\Controllers;
use App\buyer;
use App\coffee;
use DB;
use App\group;
use App\category;
use Illuminate\Http\Request;
use App\users;

class AjaxController extends Controller
{
        public function getindex($idcategory){
            $code = group::where('group',$idcategory,['is_active', '=', 1])->get();
            foreach ($code as $item){
            echo " <option value='".$item->id."'> "
                    ."$item->name".
                "</option>";

            }

   }   
}
 ?>