<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderProduct extends Controller
{
    function placeOrder($pid,$id){
        DB::table("orderedProduct")->insert(["ProductMasterid"=>$pid,"id"=>$id]);
        return "order placed";
    }
}
