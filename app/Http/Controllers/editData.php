<?php

namespace App\Http\Controllers;

use App\Models\userDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editData extends Controller
{
    public function editData(Request $req)
    {
        
        $uid=$req->userId;
        $uname = $req->name;
        $uemail = $req->email;
        $unumber = $req->number;
        $uHouseNo = $req->houseNo;
        $uArea = $req->area;
        $uLandmark = $req->landmark;
        $uCity = $req->sCity;
        $uPincode = $req->pincode;
        $uState = $req->uState;

        userDetail::where('id', $uid)->update(["id" => (int)$uid, "sellerName" => $uname, "sellerEmail" => $uemail, "sellerNumber" => $unumber, "sellerStoreNO" => $uHouseNo, "sellerArea" => $uArea, "sellerLandmark" => $uLandmark, "sellerCity" => $uCity, "sellerState" => $uState, "sellerPincode" => $uPincode]);
        return back();

    }
    public function acceptedOrder($pid){
         DB::table('orderedProduct')->where("orderedProductid",$pid)->update(["orderStatus"=>0]);
          return redirect()->back();
    }
    public function outForDelivery($pid){
         DB::table('orderedProduct')->where("orderedProductid",$pid)->update(["orderStatus"=>1]);
          return redirect()->back();
    }
    public function orderDelivered($pid){
         DB::table('orderedProduct')->where("orderedProductid",$pid)->update(["orderStatus"=>2]);
          return redirect()->back();
    }
}
