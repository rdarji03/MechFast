<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class submitData extends Controller
{
    public function submitSellerInfo(Request $req)
    {
        $id = DB::table("users")->where("u_type", 1)->get("id")->last();
        $uId=json_decode(json_encode($id), true);
       
        $uname = $req->name;
        $uemail = $req->email;
        $unumber = $req->number;
        $uHouseNo = $req->houseNo;
        $uArea = $req->area;
        $uLandmark = $req->landmark;
        $uCity = $req->sCity;
        $uPincode = $req->pincode;
        $uState = $req->uState;
        DB::table("userDetail")->insert(["id" => $uId["id"], "sellerName" => $uname, "sellerEmail" => $uemail, "sellerNumber" => $unumber, "sellerStoreNO" => $uHouseNo, "sellerArea" => $uArea, "sellerLandmark" => $uLandmark, "sellerCity" => $uCity, "sellerState" => $uState, "sellerPincode" => $uPincode]);
        

    }
}
