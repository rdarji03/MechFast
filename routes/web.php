<?php

use App\Http\Controllers\addData;
use App\Http\Controllers\authController;
use App\Http\Controllers\deletData;
use App\Http\Controllers\orderProduct;
use App\Http\Controllers\submitData;
use App\Http\Controllers\viewController;
use App\Http\Controllers\editData;
use App\Http\Controllers\searchSuggestion;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [viewController::class, "loginView"])->name("user.login");
Route::get("/register", [viewController::class, "registerView"])->name("user.register");
Route::get("/sellerInfo/{id}", [viewController::class, "sellerinfoView"])->name("seller.info");
Route::get("/buyer/order/{id}", [viewController::class, "productDetail"])->name("buyer.pOrder");
Route::get("/seller/category/delet/{categoryId}", [deletData::class, "deletCategory"]);
Route::get('/logout', [authController::class, "logout"])->name("logout");
Route::get('delet/item/{cId}', [deletData::class, "deletItem"])->name("cart.deletItem");
Route::get('/autocomplete-search-query', [searchSuggestion::class, 'query'])->name('autocomplete.search.query');

Route::group(['middleware' => 'auth'], function () {
    Route::get("/buyer/home/{uid}", [viewController::class, "byerDashBoardView"])->name("buyer.home");
    Route::get("/buyer/cart/{uid}", [viewController::class, "viewCart"]);
    Route::get("/checkout/{uid}", [orderProduct::class, "placeOrder"]);
    Route::get("/order/{ProductMasterid}/{uid}/{sid}", [orderProduct::class, "addProduct"]);
    Route::get("/seller/home/{uid}", [viewController::class, "sellerDashBoardView"])->name("seller.home");
    Route::get("/seller/category/{id}", [viewController::class, "sellerCategoryView"])->name("seller.category");
    Route::get("/seller/product/{id}", [viewController::class, "sellerProductView"])->name("seller.product");
    Route::get("/seller/home/profile/{id}", [viewController::class, "sellerProfileView"])->name("seller.profile");
    Route::get("profile/{id}", [viewController::class, "buyerProfileView"])->name("buyer.profile");
    Route::get("/seller/orders/{id}", [viewController::class, "sellerOrderView"])->name("seller.order");
    Route::get("/seller/orders/accepted/{pid}", [editData::class, "acceptedOrder"])->name("out.order");
    Route::get("/seller/orders/outfordelivery/{pid}", [editData::class, "outForDelivery"])->name("out.order");
    Route::get("/seller/orders/delivered/{pid}", [editData::class, "orderDelivered"])->name("delivered.order");
    Route::get("buyer/orders/{uid}", [viewController::class, "viewOrder"])->name("buyer.order");
});
Route::post("/", [authController::class, "loginPost"])->name("user.loginPost");
Route::post("/editProfile", [editData::class, "editData"])->name("user.profileEdit");
Route::post("/sellerInfo/{id}", [submitData::class, "submitSellerInfo"])->name("postSeller.info");
Route::post("/register", [authController::class, "registerPost"])->name("user.registerpost");
Route::post("/addCategory", [addData::class, "addCategory"])->name("post.category");
Route::post("/addProduct", [addData::class, "addProduct"])->name("post.product");
