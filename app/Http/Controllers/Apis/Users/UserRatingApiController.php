<?php

namespace App\Http\Controllers\Apis\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRatings;
use App\Models\User;

class UserRatingApiController extends Controller
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
        $new_avg_rating=$request->input('avg_rating');
        if($new_avg_rating=="1")
        { 
        $prev_one_star_rating= UserRatings::select('one_star')->where('user_id', $id)->value('one_star');
        $updated_one_star_rating=UserRatings::select('one_star')->where('user_id', $id)->update(['one_star' =>($prev_one_star_rating+1)]);
    
        //Updating rating counter
        $rating_count= UserRatings::select('rating_count')->where('user_id', $id)->value('rating_count');
        $updated_count=UserRatings::select('rating_count')->where('user_id', $id)->update(['rating_count' =>($rating_count+1)]);
     
        $one_star_rating= UserRatings::select('one_star')->where('user_id', $id)->value('one_star');
        $prev_two_star_rating= UserRatings::select('two_star')->where('user_id', $id)->value('two_star');
        $prev_three_star_rating= UserRatings::select('three_star')->where('user_id', $id)->value('three_star');
        $prev_four_star_rating= UserRatings::select('four_star')->where('user_id', $id)->value('four_star');
        $prev_five_star_rating= UserRatings::select('five_star')->where('user_id', $id)->value('five_star');
    
        $avg_formula=((1* $one_star_rating)+(2* $prev_two_star_rating)+(3* $prev_three_star_rating)+(4* $prev_four_star_rating)+(5* $prev_five_star_rating))/($rating_count+1);
        
        $updated_avg_rating=UserRatings::where('user_id', $id)->update(['avg_rating' => $avg_formula]);
       // $update_plan_avg=User::where('id', $id)->update(['avg_rating' => $avg_formula]);
       return response()->json(['status' => 'Thank Your For Your Rating']);
    
        }
        else if($new_avg_rating=="2")
        { 
        $prev_two_star_rating= UserRatings::select('two_star')->where('user_id', $id)->value('two_star');
        $updated_two_star_rating= UserRatings::select('two_star')->where('user_id', $id)->update(['two_star' =>($prev_two_star_rating+1)]);
     
           //Updating rating counter
           $rating_count= UserRatings::select('rating_count')->where('user_id', $id)->value('rating_count');
           $updated_count=UserRatings::select('rating_count')->where('user_id', $id)->update(['rating_count' =>($rating_count+1)]);
    
           
        $prev_one_star_rating= UserRatings::select('one_star')->where('user_id', $id)->value('one_star');
        $two_star_rating= UserRatings::select('two_star')->where('user_id', $id)->value('two_star');
        $prev_three_star_rating= UserRatings::select('three_star')->where('user_id', $id)->value('three_star');
        $prev_four_star_rating= UserRatings::select('four_star')->where('user_id', $id)->value('four_star');
        $prev_five_star_rating= UserRatings::select('five_star')->where('user_id', $id)->value('five_star');
    
        $avg_formula=((1* $prev_one_star_rating)+(2* $two_star_rating)+(3* $prev_three_star_rating)+(4* $prev_four_star_rating)+(5* $prev_five_star_rating))/($rating_count+1);
       
        $updated_avg_rating=UserRatings::where('user_id', $id)->update(['avg_rating' => $avg_formula]);
       // $update_plan_avg=User::where('id', $id)->update(['avg_rating' => $avg_formula]);
    return response()->json(['status' => 'Thank Your For Your Rating']);
        }
        else if($new_avg_rating=="3")
        { 
        $prev_three_star_rating= UserRatings::select('three_star')->where('user_id', $id)->value('three_star');
        $updated_three_star_rating= UserRatings::select('three_star')->where('user_id', $id)->update(['three_star' =>($prev_three_star_rating+1)]);
       
        //Updating rating counter
       $rating_count= UserRatings::select('rating_count')->where('user_id', $id)->value('rating_count');
       $updated_count=UserRatings::select('rating_count')->where('user_id', $id)->update(['rating_count' =>($rating_count+1)]);
    
       $prev_one_star_rating= UserRatings::select('one_star')->where('user_id', $id)->value('one_star');
        $prev_two_star_rating= UserRatings::select('two_star')->where('user_id', $id)->value('two_star');
        $three_star_rating= UserRatings::select('three_star')->where('user_id', $id)->value('three_star');
        $prev_four_star_rating= UserRatings::select('four_star')->where('user_id', $id)->value('four_star');
        $prev_five_star_rating= UserRatings::select('five_star')->where('user_id', $id)->value('five_star');
    
        $avg_formula=((1* $prev_one_star_rating)+(2* $prev_two_star_rating)+(3* $three_star_rating)+(4* $prev_four_star_rating)+(5* $prev_five_star_rating))/($rating_count+1);
       
        $updated_avg_rating=UserRatings::where('user_id', $id)->update(['avg_rating' => $avg_formula]);
       // $update_plan_avg=User::where('id', $id)->update(['avg_rating' => $avg_formula]);
    return response()->json(['status' => 'Thank Your For Your Rating']);
    
        }
        else if($new_avg_rating=="4")
        { 
        $prev_four_star_rating= UserRatings::select('four_star')->where('user_id', $id)->value('four_star');
        $updated_four_star_rating=  UserRatings::select('four_star')->where('user_id', $id)->update(['four_star' =>($prev_four_star_rating+1)]);
      
        //Updating rating counter
       $rating_count= UserRatings::select('rating_count')->where('user_id', $id)->value('rating_count');
       $updated_count=UserRatings::select('rating_count')->where('user_id', $id)->update(['rating_count' =>($rating_count+1)]);
    
       $prev_one_star_rating= UserRatings::select('one_star')->where('user_id', $id)->value('one_star');
        $prev_two_star_rating= UserRatings::select('two_star')->where('user_id', $id)->value('two_star');
        $prev_three_star_rating= UserRatings::select('three_star')->where('user_id', $id)->value('three_star');
        $four_star_rating= UserRatings::select('four_star')->where('user_id', $id)->value('four_star');
        $prev_five_star_rating= UserRatings::select('five_star')->where('user_id', $id)->value('five_star');
    
        $avg_formula=((1* $prev_one_star_rating)+(2* $prev_two_star_rating)+(3* $prev_three_star_rating)+(4* $four_star_rating)+(5* $prev_five_star_rating))/($rating_count+1);
       
        $updated_avg_rating=UserRatings::where('user_id', $id)->update(['avg_rating' => $avg_formula]);
      //  $update_plan_avg=User::where('id', $id)->update(['avg_rating' => $avg_formula]);
    return response()->json(['status' => 'Thank Your For Your Rating']);
    
    }
        else if($new_avg_rating=="5")
        { 
        $prev_five_star_rating= UserRatings::select('five_star')->where('user_id', $id)->value('five_star');
        $updated_five_star_rating=UserRatings::select('five_star')->where('user_id', $id)->update(['five_star' =>($prev_five_star_rating+1)]);
      
        //Updating rating counter
       $rating_count= UserRatings::select('rating_count')->where('user_id', $id)->value('rating_count');
       $updated_count=UserRatings::select('rating_count')->where('user_id', $id)->update(['rating_count' =>($rating_count+1)]);   
       $prev_one_star_rating= UserRatings::select('one_star')->where('user_id', $id)->value('one_star');
       $prev_two_star_rating= UserRatings::select('two_star')->where('user_id', $id)->value('two_star');
       $prev_three_star_rating= UserRatings::select('three_star')->where('user_id', $id)->value('three_star');
       $prev_four_star_rating= UserRatings::select('four_star')->where('user_id', $id)->value('four_star');
       $five_star_rating= UserRatings::select('five_star')->where('user_id', $id)->value('five_star');
    
       $avg_formula=((1* $prev_one_star_rating)+(2* $prev_two_star_rating)+(3* $prev_three_star_rating)+(4* $prev_four_star_rating)+(5* $five_star_rating))/($rating_count+1);
    
       $updated_avg_rating=UserRatings::where('user_id', $id)->update(['avg_rating' => $avg_formula]);
      // $update_plan_avg=User::where('id', $id)->update(['avg_rating' => $avg_formula]);
    return response()->json(['status' => 'Thank Your For Your Rating']);
    
    }
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
