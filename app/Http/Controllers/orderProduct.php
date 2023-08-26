<?php

namespace App\Http\Controllers;

use App\Models\productView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderProduct extends Controller
{
    function placeOrder($uid)
    {
        $order = DB::table("buyerCart")->where("buyerId", $uid)->get();
        $orderList = json_decode($order, true);
        for ($i = 0; $i < count($orderList); $i++) {
            DB::table("orderedProduct")->insert(["ProductMasterid" => $orderList[$i]["ProductMasterid"], "id" => $orderList[$i]["buyerId"], "sellerid" => $orderList[$i]["sellerId"]]);
        }
        $order = DB::table("buyerCart")->where("buyerId", $uid)->delete();
        return "done";
    }

    function addProduct($oid, $uid, $sid)
    {
        DB::table('buyerCart')->insert(["ProductMasterid" => $oid, "buyerId" => $uid, "sellerId" => $sid]);
        return redirect()->back();
    }
}
