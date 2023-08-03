<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class submitData extends Controller
{
    public function submitSellerInfo(Request $req,$id)
    {
       
        $uname = $req->name;
        $uemail = $req->email;
        $unumber = $req->number;
        $uHouseNo = $req->houseNo;
        $uArea = $req->area;
        $uLandmark = $req->landmark;
        $uCity = $req->sCity;
        $uPincode = $req->pincode;
        $uState = $req->uState;
        DB::table("userDetail")->insert(["id" => $id, "sellerName" => $uname, "sellerEmail" => $uemail, "sellerNumber" => $unumber, "sellerStoreNO" => $uHouseNo, "sellerArea" => $uArea, "sellerLandmark" => $uLandmark, "sellerCity" => $uCity, "sellerState" => $uState, "sellerPincode" => $uPincode]);
        

    }
}
