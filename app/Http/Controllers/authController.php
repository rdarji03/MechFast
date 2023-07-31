<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class authController extends Controller
{
    public function loginPost(Request $req)
    {
        $req->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $credentials = $req->only("email", "password");
        if (Auth::attempt($credentials)) {
            if (auth()->user()->u_type==1) {
                return redirect()->route("seller.home",["uid"=>auth()->user()->id]);
            }
            else {
                return redirect()->route("buyer.home",["uid"=>auth()->user()->id]);
            }
        } else {
            return Redirect::back()->with("error","Please check Credentials");
        }
    }
    public function registerPost(Request $req)
    {
        $req->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required",
        ]);
        $usertype = $req->u_type;
        $data["name"] = $req->name;
        $data["email"] = $req->email;
        $data["u_type"] = (int) $usertype;
        $data["password"] = Hash::make($req->password);
        $user = User::create($data);
        if ($user) {
            return redirect()->route("seller.info");
        } else {
            return "fail";
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
