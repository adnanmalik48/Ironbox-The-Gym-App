<?php

namespace App\Http\Controllers\Apis\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\User;
use App\Models\UserTrainersSubscriptions;
use App\Models\UserRatings;

class ContactsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
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
       
    //    if($request->input('user_id'))
    //    {
        
    //     $contactId= Contacts::select('contact_id')->where('user_id', $request->user_id)->get()->toArray();
    //     $userData= User::with(['ratings'])->select('*')->whereIn('id',$contactId)->get();

    //     return response()->json(['status' => 'Contacts Fetched Successfully', 'data' => $userData]);
    //    }
    //    else
    //    {
    //     return response()->json(['status' => 'No Contacts Fetched']);
  
    //    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactId= Contacts::select('contact_id')->where('user_id',$id)->get()->toArray();
        $userData= User::with(['ratings'])->select('*')->whereIn('id',$contactId)->get();

        return response()->json(['status' => 'Contacts Fetched Successfully', 'data' => $userData]);
       
      
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
