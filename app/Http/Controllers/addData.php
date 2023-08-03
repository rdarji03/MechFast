<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addData extends Controller
{
    public function addCategory(request $req)
    {
        $category = $req->categoryDetail;
        $userId = $req->sellerId;
        DB::table("itemCategory")->insert(["categoryDetail" => $category, "id" => $userId]);
        return redirect()->route("seller.category", ["id" => $userId]);
    }
    public function addProduct(request $req)
    {
        $userId = $req->sellerId;
        $productName = $req->productName;
        $productDetail = $req->productDetail;
        $productQty = $req->productQty;
        $productCategory = $req->productCategory;
        $productPrice = $req->productPrice;
        $productImg= $req->file('productImg');
        $productImageName=time().".".$productImg->getClientOriginalExtension();
        $req->file('productImg')->move("products",$productImageName);
        // $productImg = file_get_contents($productImgName);
        DB::table("producrMaster")->insert(["productName" => $productName, "id" => $userId, "productDetail" => $productDetail, "productQty" => $productQty,"productCategory" => $productCategory,"productPrice"=>$productPrice,"productimg"=>$productImageName]);
        return redirect()->route("seller.home");

    }
}
