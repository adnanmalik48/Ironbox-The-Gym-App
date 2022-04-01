<?php

namespace App\Http\Controllers\Apis\VideoLibrary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoLibrary;

class SearchVedioLibraryApiController extends Controller
{
   /**
     * Search video library
     *
     * @return \Illuminate\Http\Response
     */
    public function search_vedio_library(Request $request)
    {
        $query =$request->input('query');
        $skip =$request->input('skip');
        $take =$request->input('take');

        $result= VideoLibrary::select('*')->where('name', 'LIKE','%' . $query . '%')->where('status',1) ->skip($skip)->take($take)->latest()->get();

        if($result){

         return response()->json(['status' => 'Success' ,   'data' =>  $result],200);
              
           }
           else{
              return response()->json(
                  ['status'=>" Failed"]
                  ,404); 
           }
    }

}
