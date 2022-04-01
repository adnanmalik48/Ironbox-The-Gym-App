<?php

namespace App\Http\Controllers\Apis\VideoLibrary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoLibrary;

class VideoLibraryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($skip,$take)
    {
        $result= VideoLibrary::select('*')->skip($skip)->take($take)->where('status',1)->get()->toArray();
        if($result){
 
         return response()->json(['status' => 'Success' ,   'data' =>  $result],200);
              
           }
           else{
              return response()->json(
                  ['status'=>" Failed"]
                  ,404); 
           }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
