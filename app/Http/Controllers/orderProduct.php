<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderProduct extends Controller
{
    function placeOrder($pid,$id,$sid){
        DB::table("orderedProduct")->insert(["ProductMasterid"=>$pid,"id"=>$id,"sellerid"=>$sid]);
        return redirect()->back();
    }
}
