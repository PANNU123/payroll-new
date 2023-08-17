<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Bangladesh\Models\Bangladesh;

class CommonController extends Controller
{
    public function getThana(Request $request){
        $district = $request->district;
        $allProduct = Bangladesh::where('district',$district)->select('thana','post_office')->get();
        return response()->json($allProduct);
    }

    public function getPostCode(Request $request){
        $district = $request->thana;
        $parts = explode("-", $district);
        $thana = $parts[0]; // "Dhemra"
        $post_office = $parts[1]; // "Dhemra"
        $allProduct = Bangladesh::where('thana',$thana)->where('post_office',$post_office)->select('post_code')->first();
        return response()->json($allProduct);
    }
}
