<?php

use App\Http\Controllers\addData;
use App\Http\Controllers\authController;
use App\Http\Controllers\submitData;
use App\Http\Controllers\viewController;
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

Route::get("/",[viewController::class,"loginView"])->name("user.login");
Route::get("/register",[viewController::class,"registerView"])->name("user.register");
Route::get("/sellerInfo",[viewController::class,"sellerinfoView"])->name("seller.info");
Route::get("/buyerDashboard",[viewController::class,"byerDashBoardView"])->name("buyer.home");
Route::get('/logout', [authController::class, "logout"])->name("logout");

Route::group(['middleware' => 'auth'], function () {
    Route::get("/seller/home",[viewController::class,"sellerDashBoardView"])->name("seller.home");
    Route::get("/seller/category/{id}",[viewController::class,"sellerCategoryView"])->name("seller.category");
    Route::get("/seller/product/{id}",[viewController::class,"sellerProductView"])->name("seller.product");
    Route::get("/seller/profile/{id}",[viewController::class,"sellerProfileView"])->name("seller.profile");
});


Route::post("/",[authController::class,"loginPost"])->name("user.loginPost");
Route::post("/sellerInfo",[submitData::class,"submitSellerInfo"])->name("postSeller.info");
Route::post("/register",[authController::class,"registerPost"])->name("user.registerpost");
Route::post("/addCategory",[addData::class,"addCategory"])->name("post.category");
Route::post("/addProduct",[addData::class,"addProduct"])->name("post.product");