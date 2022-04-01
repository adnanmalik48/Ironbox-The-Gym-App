<?php

namespace App\Http\Controllers\Apis\FoodLibrary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodLibrary;

class FoodLibraryApiController extends Controller
{
     /**
     * Fetch Food Library data
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_food_library(Request $request)
    {   
        $skip = $request->input('skip');
        $take = $request->input('take');
        $foodLibrary= FoodLibrary::select('*')->where('status',1)->skip($skip)->take($take)->get();
        return response()->json(['status' => 'Food Library Data Feched Successfully ',   'data' =>  $foodLibrary
    ],200);
    }
}
