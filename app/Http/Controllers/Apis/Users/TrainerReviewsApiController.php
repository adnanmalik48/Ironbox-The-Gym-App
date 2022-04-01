<?php

namespace App\Http\Controllers\Apis\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainerReviews;

class TrainerReviewsApiController extends Controller
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
        $validator = \Validator::make($request->all(), [
            'message' => [ 'string'],
            'review_for' => [ 'string', 'max:255'],
            'review_by' => ['string', 'max:255'],
          
        ]);
        if ($validator->fails())
       {
       return response()->json(
           ['errors'=>$validator->errors()->all()]
           ,500);  
     }
      else{

        $checktrainerreviews= TrainerReviews::select('*')->where('review_for', $request->review_for)->where('review_by', $request->review_by)->get();
       
        if (!$checktrainerreviews->isEmpty() ) 
        {
          return response()->json(['status' => 'You Reviewed This User Already']);
        }
        else
        { 
        $trainerReviews=new TrainerReviews();
        $trainerReviews->review_for=$request->input('review_for');
        $trainerReviews->review_by=$request->input('review_by');
        $trainerReviews->message=$request->input('message');
        $result=$trainerReviews->save();  

           if($result){

            return response()->json(['status' => 'Success' ],200);
            
         }
         else{
            return response()->json(
                ['status'=>" Not Success"]
                ,404); 
         }
    }
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $result= TrainerReviews::with(['user'])->select('*')->where('review_for',$id)->get()->toArray();

        // $result= TrainerReviews::select('review_for')->where('review_for',$id)->get()->toArray();
       
        // $subs= User::select('*')->whereIn('id',   $result)->get();
        // $user= UserTrainersSubscriptions::with(['trainers'])->select('*')->where('trainee_id',$id)->get();
       return response()->json(['status' => 'Trainers Reviews Data Fetched',   'data' =>  $result
  ],200);
   
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
