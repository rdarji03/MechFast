<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deletData extends Controller
{
    function deletCategory($id){
        return DB::table('itemCategory')->where('categoryId', $id)->delete();
    }
}
