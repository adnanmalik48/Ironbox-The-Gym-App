<?php

namespace App\Http\Controllers\Apis\Urls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaseUrls;

class BaseUrlsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_base_urls()
    {
        $baseUrls= BaseUrls::select('*')->get();
        return response()->json(['status' => 'Base Urls Fetched',   'data' =>  $baseUrls
   ],200);
    }

}
