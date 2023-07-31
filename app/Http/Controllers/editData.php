<?php

namespace App\Http\Controllers;

use App\Models\userDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editData extends Controller
{
    public function editData(Request $req)
    {
        
        $uid=$req->userid;
        $uname = $req->name;
        $uemail = $req->email;
        $unumber = $req->number;
        $uHouseNo = $req->houseNo;
        $uArea = $req->area;
        $uLandmark = $req->landmark;
        $uCity = $req->sCity;
        $uPincode = $req->pincode;
        $uState = $req->uState;
        
        userDetail::where('id', $uid)->update(["id" => $uid, "sellerName" => $uname, "sellerEmail" => $uemail, "sellerNumber" => $unumber, "sellerStoreNO" => $uHouseNo, "sellerArea" => $uArea, "sellerLandmark" => $uLandmark, "sellerCity" => $uCity, "sellerState" => $uState, "sellerPincode" => $uPincode]);

    }
}
