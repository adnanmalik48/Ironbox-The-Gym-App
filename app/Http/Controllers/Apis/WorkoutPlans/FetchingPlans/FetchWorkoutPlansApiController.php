<?php

namespace App\Http\Controllers\Apis\WorkoutPlans\FetchingPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlanDetails;
use App\Models\WorkoutPlanGames;
use App\Models\WorkoutPlanExercise;
use App\Models\WorkoutPlans;

class FetchWorkoutPlansApiController extends Controller
{

    /**
     * All workout plans fetching api
     *
     * @return \Illuminate\Http\Response
     */
    public function all_workout_plans()
    {
      $result= WorkoutPlans::select('*')->with(['ratings'])->with(['details'])->where('status',1)->get();
      if(!$result->isEmpty())
      {  return response()->json(['status' => 'Trainer Workout Plans Data Fetched Successfully',   'data' =>  $result
            ],200);
        }
        else 
        {
            return response()->json(['status' => 'No Plan registered'
        ],404);
        }
    }
/**
     *  workout plans fetching api with category
     *
     * @return \Illuminate\Http\Response
     */
    public function category_workout_plans($category_id)
    {
        $result= WorkoutPlans::select('*')->with(['ratings'])->with(['details'])->where('status',1)->where('category',$category_id)->get();
      if(!$result->isEmpty())
      {  return response()->json(['status' => 'Trainer Workout Plans Data Fetched Successfully',   'data' =>  $result
            ],200);
        }
        else 
        {
            return response()->json(['status' => 'No Plan registered'
        ],404);
        }
    }

    /**
     * Trainer workout plans api
     *
     * @return \Illuminate\Http\Response
     */
    public function trainer_workout_plans($trainer_id)
    {
      $result= WorkoutPlans::select('*')->with(['ratings'])->with(['details'])->where('status',1)->where('trainer_id',$trainer_id)->get();
      if(!$result->isEmpty())
      {  return response()->json(['status' => 'Trainer Workout Plans Data Fetched Successfully',   'data' =>  $result
            ],200);
        }
        else 
        {
            return response()->json(['status' => 'No Plan registered'
        ],404);
        }
    }

     /**
     * Display day details
     *
     * @return \Illuminate\Http\Response
     */
    public function day_details($plan_id,$week_number,$day_number)
    {
        $result= WorkoutPlanDetails::select('*')->where('plan_id',$plan_id)->where('week_number',$week_number)->where('day_number',$day_number)->get();
       if($result->isNotEmpty()){

        return response()->json(['status' => 'Success' ,   'data' =>  $result],200);
             
          }
          else{
             return response()->json(
                 ['status'=>" Failed",   'data' =>  $result]
                 ,404); 
          }
    }
     /**
     * Display game details
     *
     * @return \Illuminate\Http\Response
     */
    public function game_details($workout_plan_details_id)
    {
        $result= WorkoutPlanGames::select('*')->where('workout_plan_details_id',$workout_plan_details_id)->get();
       if($result->isNotEmpty()){

        return response()->json(['status' => 'Success' ,   'data' =>  $result],200);
             
          }
          else{
             return response()->json(
                 ['status'=>" Failed",   'data' =>  $result]
                 ,404); 
          }
    }

      /**
     * Display exercise details
     *
     * @return \Illuminate\Http\Response
     */
    public function exercise_details($game_id)
    {
        $result= WorkoutPlanExercise::select('*')->where('game_id',$game_id)->get();
       if($result->isNotEmpty()){

        return response()->json(['status' => 'Success' ,   'data' =>  $result],200);
             
          }
          else{
             return response()->json(
                 ['status'=>" Failed",   'data' =>  $result]
                 ,404); 
          }
    }
}
