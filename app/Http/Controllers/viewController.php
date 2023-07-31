<?php

namespace App\Http\Controllers;

use App\Models\itemCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class viewController extends Controller
{
    public function registerView()
    {
        return view("auth.registeration");
    }

    public function loginView()
    {
        return view("auth.login");
    }
    public function sellerinfoView()
    {
        $stateList = Http::get('https://mechfast.pythonanywhere.com/states/');
        $stateData = json_decode($stateList, true);
        //https://mechfast.pythonanywhere.com/city/?state=Gujarat
        return view("dashboard.forms.sellerInfoForm", ["states" => $stateData]);
    }
    public function byerDashBoardView()
    {
        return view("dashboard.Buyer.buyerHome");
    }
    public function sellerDashBoardView()
    {
        return view("dashboard.Seller.sellerhome");
    }
    public function sellerCategoryView($id)
    {
        $cData = DB::table("itemCategory")->where("id", $id)->get();
        $data = json_decode($cData, true);
        return view("dashboard.Seller.sellerTaskCategory", ["cData" => $data]);
    }
    public function sellerProductView($id)
    {

        $categoryData = new itemCategory;
        $cData = $categoryData->get();
        $productData = DB::table("sellerProductList")->where("id", $id)->get();
        $data = json_decode($productData, true);
        return view("dashboard.Seller.sellerProduct", ["cData" => $cData, "pData" => $data]);
    }
    public function sellerProfileView($id)
    {
        $stateList = Http::get('https://mechfast.pythonanywhere.com/states/');
        $stateData = json_decode($stateList, true);
        //https://mechfast.pythonanywhere.com/city/?state=Gujarat
        $userProfile = DB::table("userDetail")->where("id", $id)->get();
        $uInfo=json_decode($userProfile, true);
        return view("dashboard.Seller.sellerProfile", ["uInfo"=>$uInfo,"states" => $stateData]);
    }
}
