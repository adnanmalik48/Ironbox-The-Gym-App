<?php

namespace App\Http\Controllers\Apis\WorkoutPlans\Reviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlanReviews;
use App\Models\PlanRatings;
use App\Models\UserWorkoutPlans;

class PlanReviewsApiController extends Controller
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
            'plan_id' => [ 'string', 'max:255'],
            'user_id' => ['string', 'max:255'],
            'rating' => ['string', 'max:255'],
        ]);
        if ($validator->fails())
       {
       return response()->json(
           ['errors'=>$validator->errors()->all()]
           ,500);  
     }
      else{
       
        $checktrainerreviews= PlanReviews::select('*')->where('plan_id', $request->plan_id)->where('user_id', $request->user_id)->get();
       
        if (!$checktrainerreviews->isEmpty() ) 
        {
          return response()->json(['status' => 'You Reviewed This Plan Already']);
        }
        else
        { 
        
        $planReviews=new PlanReviews();
        $plan_id=$planReviews->plan_id=$request->input('plan_id');
       $user_id=$planReviews->user_id=$request->input('user_id');
        $planReviews->message=$request->input('message');
        $new_avg_rating= $planReviews->rating=$request->input('rating');
        
        $reviewStatus = UserWorkoutPlans::where('user_id', $user_id)->where('plan_id', $plan_id)->update(['review_status' => 1]);
   
        if($new_avg_rating=="1")
        { 
        $prev_one_star_rating= PlanRatings::select('one_star')->where('plan_id', $plan_id)->value('one_star');
        $updated_one_star_rating=PlanRatings::select('one_star')->where('plan_id', $plan_id)->update(['one_star' =>($prev_one_star_rating+1)]);
    
        //Updating rating counter
        $rating_count= PlanRatings::select('rating_count')->where('plan_id', $plan_id)->value('rating_count');
        $updated_count=PlanRatings::select('rating_count')->where('plan_id', $plan_id)->update(['rating_count' =>($rating_count+1)]);
    
        $one_star_rating= PlanRatings::select('one_star')->where('plan_id', $plan_id)->value('one_star');
        $prev_two_star_rating= PlanRatings::select('two_star')->where('plan_id', $plan_id)->value('two_star');
        $prev_three_star_rating= PlanRatings::select('three_star')->where('plan_id', $plan_id)->value('three_star');
        $prev_four_star_rating= PlanRatings::select('four_star')->where('plan_id', $plan_id)->value('four_star');
        $prev_five_star_rating= PlanRatings::select('five_star')->where('plan_id', $plan_id)->value('five_star');
    
        $avg_formula=((1* $one_star_rating)+(2* $prev_two_star_rating)+(3* $prev_three_star_rating)+(4* $prev_four_star_rating)+(5* $prev_five_star_rating))/($rating_count+1);
        
        $updated_avg_rating=PlanRatings::where('plan_id', $plan_id)->update(['avg_rating' => $avg_formula]);
      
        $result=$planReviews->save();  

           if($result){

            return response()->json(['status' => 'Success' ],200);
            
         }
         else{
            return response()->json(
                ['status'=>" Not Success"]
                ,404); 
         }
        }
        else if($new_avg_rating=="2")
        { 
        $prev_two_star_rating= PlanRatings::select('two_star')->where('plan_id', $plan_id)->value('two_star');
        $updated_two_star_rating= PlanRatings::select('two_star')->where('plan_id', $plan_id)->update(['two_star' =>($prev_two_star_rating+1)]);
     
           //Updating rating counter
           $rating_count= PlanRatings::select('rating_count')->where('plan_id', $plan_id)->value('rating_count');
           $updated_count=PlanRatings::select('rating_count')->where('plan_id', $plan_id)->update(['rating_count' =>($rating_count+1)]);
    
           
        $prev_one_star_rating= PlanRatings::select('one_star')->where('plan_id', $plan_id)->value('one_star');
        $two_star_rating= PlanRatings::select('two_star')->where('plan_id', $plan_id)->value('two_star');
        $prev_three_star_rating= PlanRatings::select('three_star')->where('plan_id', $plan_id)->value('three_star');
        $prev_four_star_rating= PlanRatings::select('four_star')->where('plan_id', $plan_id)->value('four_star');
        $prev_five_star_rating= PlanRatings::select('five_star')->where('plan_id', $plan_id)->value('five_star');
    
        $avg_formula=((1* $prev_one_star_rating)+(2* $two_star_rating)+(3* $prev_three_star_rating)+(4* $prev_four_star_rating)+(5* $prev_five_star_rating))/($rating_count+1);
       
        $updated_avg_rating=PlanRatings::where('plan_id', $plan_id)->update(['avg_rating' => $avg_formula]);
        $result=$planReviews->save();  

        if($result){

         return response()->json(['status' => 'Success' ],200);
         
      }
      else{
         return response()->json(
             ['status'=>" Not Success"]
             ,404); 
      }
        }
        else if($new_avg_rating=="3")
        { 
        $prev_three_star_rating= PlanRatings::select('three_star')->where('plan_id', $plan_id)->value('three_star');
        $updated_three_star_rating= PlanRatings::select('three_star')->where('plan_id', $plan_id)->update(['three_star' =>($prev_three_star_rating+1)]);
       
        //Updating rating counter
       $rating_count= PlanRatings::select('rating_count')->where('plan_id', $plan_id)->value('rating_count');
       $updated_count=PlanRatings::select('rating_count')->where('plan_id', $plan_id)->update(['rating_count' =>($rating_count+1)]);
    
       $prev_one_star_rating= PlanRatings::select('one_star')->where('plan_id', $plan_id)->value('one_star');
        $prev_two_star_rating= PlanRatings::select('two_star')->where('plan_id', $plan_id)->value('two_star');
        $three_star_rating= PlanRatings::select('three_star')->where('plan_id', $plan_id)->value('three_star');
        $prev_four_star_rating= PlanRatings::select('four_star')->where('plan_id', $plan_id)->value('four_star');
        $prev_five_star_rating= PlanRatings::select('five_star')->where('plan_id', $plan_id)->value('five_star');
    
        $avg_formula=((1* $prev_one_star_rating)+(2* $prev_two_star_rating)+(3* $three_star_rating)+(4* $prev_four_star_rating)+(5* $prev_five_star_rating))/($rating_count+1);
       
        $updated_avg_rating=PlanRatings::where('plan_id', $plan_id)->update(['avg_rating' => $avg_formula]);
      
        $result=$planReviews->save();  

        if($result){

         return response()->json(['status' => 'Success' ],200);
         
      }
      else{
         return response()->json(
             ['status'=>" Not Success"]
             ,404); 
      }
        }
        else if($new_avg_rating=="4")
        { 
        $prev_four_star_rating= PlanRatings::select('four_star')->where('plan_id', $plan_id)->value('four_star');
        $updated_four_star_rating=  PlanRatings::select('four_star')->where('plan_id', $plan_id)->update(['four_star' =>($prev_four_star_rating+1)]);
      
        //Updating rating counter
       $rating_count= PlanRatings::select('rating_count')->where('plan_id', $plan_id)->value('rating_count');
       $updated_count=PlanRatings::select('rating_count')->where('plan_id', $plan_id)->update(['rating_count' =>($rating_count+1)]);
    
       $prev_one_star_rating= PlanRatings::select('one_star')->where('plan_id', $plan_id)->value('one_star');
        $prev_two_star_rating= PlanRatings::select('two_star')->where('plan_id', $plan_id)->value('two_star');
        $prev_three_star_rating= PlanRatings::select('three_star')->where('plan_id', $plan_id)->value('three_star');
        $four_star_rating= PlanRatings::select('four_star')->where('plan_id', $plan_id)->value('four_star');
        $prev_five_star_rating= PlanRatings::select('five_star')->where('plan_id', $plan_id)->value('five_star');
    
        $avg_formula=((1* $prev_one_star_rating)+(2* $prev_two_star_rating)+(3* $prev_three_star_rating)+(4* $four_star_rating)+(5* $prev_five_star_rating))/($rating_count+1);
       
        $updated_avg_rating=PlanRatings::where('plan_id', $plan_id)->update(['avg_rating' => $avg_formula]);
       
        $result=$planReviews->save();  

        if($result){

         return response()->json(['status' => 'Success' ],200);
         
      }
      else{
         return response()->json(
             ['status'=>" Not Success"]
             ,404); 
      }
    }
        else if($new_avg_rating=="5")
        { 
        $prev_five_star_rating= PlanRatings::select('five_star')->where('plan_id', $plan_id)->value('five_star');
        $updated_five_star_rating=PlanRatings::select('five_star')->where('plan_id', $plan_id)->update(['five_star' =>($prev_five_star_rating+1)]);
      
        //Updating rating counter
       $rating_count= PlanRatings::select('rating_count')->where('plan_id', $plan_id)->value('rating_count');
       $updated_count=PlanRatings::select('rating_count')->where('plan_id', $plan_id)->update(['rating_count' =>($rating_count+1)]);   
       $prev_one_star_rating= PlanRatings::select('one_star')->where('plan_id', $plan_id)->value('one_star');
       $prev_two_star_rating= PlanRatings::select('two_star')->where('plan_id', $plan_id)->value('two_star');
       $prev_three_star_rating= PlanRatings::select('three_star')->where('plan_id', $plan_id)->value('three_star');
       $prev_four_star_rating= PlanRatings::select('four_star')->where('plan_id', $plan_id)->value('four_star');
       $five_star_rating= PlanRatings::select('five_star')->where('plan_id', $plan_id)->value('five_star');
    
       $avg_formula=((1* $prev_one_star_rating)+(2* $prev_two_star_rating)+(3* $prev_three_star_rating)+(4* $prev_four_star_rating)+(5* $five_star_rating))/($rating_count+1);
    
       $updated_avg_rating=PlanRatings::where('plan_id', $plan_id)->update(['avg_rating' => $avg_formula]);
    
       $result=$planReviews->save();  

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result= PlanReviews::with(['user'])->select('*')->where('plan_id',$id)->get()->toArray();

       return response()->json(['status' => 'Plans Reviews Data Fetched',   'data' =>  $result
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
