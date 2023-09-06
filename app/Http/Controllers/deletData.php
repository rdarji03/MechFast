<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deletData extends Controller
{
    function deletCategory($id){
         DB::table('itemCategory')->where('categoryId', $id)->delete();
         return back();
    }
    function deletItem($cid){
        DB::table("buyerCart")->where('cartId',$cid)->delete();
        return back();
    }
}
