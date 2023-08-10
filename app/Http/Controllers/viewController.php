<?php

namespace App\Http\Controllers;

use App\Models\itemCategory;
use App\Models\ord;
use App\Models\productView;
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
        $productList = new productView;
        $products = $productList->get();
        return view("dashboard.Buyer.buyerHome", ["products" => $products]);
    }
    public function sellerDashBoardView($sid)
    {
        $totalOrders = DB::table("orderedProduct")
            ->select(DB::raw('count(orderedProductid) as totalOrder'))
            ->where('sellerid', '=', $sid)->count();

        $totalRevenue = DB::table('sellerOrder')
            ->select(DB::raw('SUM(cast( productPrice as int)) as totalSale'))->where('sellerid', $sid)
            ->get();
        $totalSale = json_decode($totalRevenue, true);
        $orderPending = DB::table('sellerOrder')
            ->select(DB::raw('count(orderStatus) as pendingOrder'))->where('sellerid', $sid)->where("orderStatus", 0)
            ->get();
        $totalPending = json_decode($orderPending, true);
        $inDelivery = DB::table('sellerOrder')
            ->select(DB::raw('count(orderStatus) as pendingOrder'))->where('sellerid', $sid)->where("orderStatus", 1)
            ->get();
        $totalOrderinDelivery = json_decode($inDelivery, true);

        return view("dashboard.Seller.sellerhome", ["totalorder" => $totalOrders, "totalSale" => $totalSale,"totalPending"=>$totalPending,"totalOrderinDelivery"=>$totalOrderinDelivery]);
    }
    public function sellerCategoryView($id)
    {
        $cData = DB::table("itemCategory")->where("id", $id)->get();
        $data = json_decode($cData, true);
        return view("dashboard.Seller.sellerTaskCategory", ["cData" => $data]);
    }
    public function sellerProductView($id)
    {


        $cData = itemCategory::where("id", $id)->get();
        $productData = DB::table("producrMaster")->where("id", $id)->get();
        $data = json_decode($productData, true);
        return view("dashboard.Seller.sellerProduct", ["cData" => $cData, "pData" => $data]);
    }
    public function sellerProfileView($id)
    {
        $stateList = Http::get('https://mechfastapi.pythonanywhere.com/states/');
        $stateData = json_decode($stateList, true);
        //https://mechfast.pythonanywhere.com/city/?state=Gujarat
        $userProfile = DB::table("userDetail")->where("id", $id)->get();
        $uInfo = json_decode($userProfile, true);
        return view("dashboard.Seller.sellerProfile", ["uInfo" => $uInfo, "states" => $stateData]);
    }
    public function buyerProfileView($id)
    {
        $stateList = Http::get('https://mechfastapi.pythonanywhere.com/states/');
        $stateData = json_decode($stateList, true);
        //https://mechfast.pythonanywhere.com/city/?state=Gujarat
        $userProfile = DB::table("userDetail")->where("id", $id)->get();
        $uInfo = json_decode($userProfile, true);
        return view("dashboard.Buyer.buyerProfile", ["uInfo" => $uInfo, "states" => $stateData]);
    }
    public function sellerOrderView($id)
    {
        $productData = DB::table("sellerOrder")->where("sellerId", $id)->get();
        $orderList = json_decode($productData, true);
        return view("dashboard.Seller.sellerOrder", ["products" => $orderList]);
    }
    public function viewOrder($id)
    {

        $products = DB::table('sellerOrder')->where("id", $id)->get();
        $orderList = json_decode($products, true);
        return view("dashboard.Buyer.buyerOrder", ["orderProducts" => $orderList]);
    }
}
