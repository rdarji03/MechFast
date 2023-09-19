<?php

namespace App\Http\Controllers;

use App\Models\producrMaster;
use Illuminate\Http\Request;

class searchSuggestion extends Controller
{
    public function query(Request $request)
    {

        $data = producrMaster::select("productName")
            ->where("productName", "LIKE", "%".$request->get("query")."%")
            ->pluck('productName');

        return response()->json($data);
    }
}
