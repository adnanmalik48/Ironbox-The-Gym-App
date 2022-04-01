<?php

namespace App\Http\Controllers\Apis\UserWorkoutPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlanDetails;
use App\Models\WorkoutPlanGames;
use App\Models\WorkoutPlanExercise;
use App\Models\WorkoutPlans;
use App\Models\User;
use App\Models\WorkoutplansCalories;

use App\Models\UserWorkoutPlanDetails;
use App\Models\UserWorkoutPlanGames;
use App\Models\UserWorkoutPlanExcercise;
use App\Models\UserWorkoutPlans;
use App\Models\ChildCategories;
use App\Models\UserLogs;
use Carbon\Carbon;

class UserWorkoutPlanSubscriptionApiController extends Controller
{

    /**
     * Subscription workout plans storing for specfic user 
     *
     * @return \Illuminate\Http\Response
     */
    public function store_user_subscription($plan_id,$user_id)
    {
      
      //storing workout buyed plan in user workout plan table

      $workoutPlan=WorkoutPlans::select('*')->where('id',$plan_id)->get();

      foreach($workoutPlan as $plan) {
      $userWorkoutPlans= UserWorkoutPlans::create([ 
        'user_id' => $user_id,
        'plan_id' => $plan->id,
        'title' => $plan->title,
        'description'=> $plan->description,
        'caution' => $plan->caution,
        'price' => $plan->price,
        'trainer_id' => $plan->trainer_id,
        'cover_img'=> $plan->cover_img,
        'cover_video' => $plan->cover_video,
        'difficulty_level' => $plan->difficulty_level,
        'duration' => $plan->duration,
        'category_id'=> $plan->category,
        'muscle_type' => $plan->muscle_type,
        'version' => $plan->version,
        'progress' => '0'
    ]);}
 

//storing workout buyed plan details in user workout plan table

$allworkoutPlansDetails=WorkoutPlanDetails::select('*')->where('plan_id',$plan_id)->get();


foreach($allworkoutPlansDetails as $details) {

  $day_avg_cal=($details->min_calories + $details->max_calories) / 2;

  $userid= UserWorkoutPlans::select('user_id')->where('id', $userWorkoutPlans->id)->value('user_id');

  $userWeight= User::select('weight')->where('id', $userid)->value('weight');

$caloriesAsWeight= WorkoutplansCalories::select('calories')->where([
  ['lower_weight', '<=', $userWeight],
  ['upper_weight', '>=', $userWeight],
])->value('calories');

if($caloriesAsWeight>0 || $caloriesAsWeight<0)
     {
       $day_avg_cal = $day_avg_cal + (($caloriesAsWeight / 100)*400);
    
     }
 



  $userWorkoutPlanDetails=  UserWorkoutPlanDetails::create([ 

    'user_workout_plan_id' =>  $userWorkoutPlans->id,
    'pre_workout_plan_details_id' => $details->id,
    'day_title' => $details->day_title,
    'min_calories' => $details->min_calories,
    'max_calories'=> $details->max_calories,
    'day_number' => $details->day_number,
    'week_number' => $details->week_number,
     'avg_cal' => $day_avg_cal
  ]);
 
  $originalworkoutPlansDetailsid=UserWorkoutPlanDetails::select('pre_workout_plan_details_id')->where('id',$userWorkoutPlanDetails->id)->get()->pluck('pre_workout_plan_details_id');

  $allworkoutPlansGames=WorkoutPlanGames::select('*')->whereIn('workout_plan_details_id',  $originalworkoutPlansDetailsid)->get();

  foreach($allworkoutPlansGames as $games) {
    $userWorkoutPlanGames=  UserWorkoutPlanGames::create([ 
      'user_workout_plan_details_id' => $userWorkoutPlanDetails->id,
      'pre_workout_plan_games_id'=> $games->id,
      'name' => $games->name,
      'sets' => $games->sets,
      'rounds'=> $games->rounds,
      ]);
      $originalworkoutPlansGamesid=UserWorkoutPlanGames::select('pre_workout_plan_games_id')->where('id',$userWorkoutPlanGames->id)->get()->pluck('pre_workout_plan_games_id');

      $allworkoutPlansExercises=WorkoutPlanExercise::select('*')->whereIn('game_id',  $originalworkoutPlansGamesid)->get();

      foreach($allworkoutPlansExercises as $exercises) {
        $userWorkoutPlanExercises=  UserWorkoutPlanExcercise::create([ 
          'user_workout_plan_game_id' => $userWorkoutPlanGames->id,
          'name' => $exercises->name,
          'reps' => $exercises->reps,
          'duration'=> $exercises->duration,
          'video_url'=> $exercises->video_url,
          'description'=> $exercises->description
          ]);

        }

    }

  }
  
$result= UserWorkoutPlans::select('*')->with(['details'])->where('user_id',$user_id)->where('id',$userWorkoutPlans->id)->get();
if(!$result->isEmpty())
{  return response()->json(['status' => 'User Subscribed Successfully',   'data' =>  $result
      ],200);
  }
  else 
  {
      return response()->json(['status' => 'No Plan registered'
  ],404);
  }
    }

     /**
     * single user subscription datat
     *
     * @return \Illuminate\Http\Response
     */
    public function user_subscribed_plans($category_id,$user_id)
    {
      
    $categoryid=ChildCategories::select('id')->where('sub_categories_id',$category_id)->get()->pluck('id');

    $userSubscribedPlans=UserWorkoutPlans::select('*')->whereIn('category_id',  $categoryid)->where('user_id',  $user_id)->with(['details'])->get();


   
    if(!$userSubscribedPlans->isEmpty())
    {  return response()->json(['status' => 'User Subscribion Data',   'data' =>  $userSubscribedPlans
    ],200);

      }
      else 
      {
          return response()->json(['status' => 'No Plan registered'
      ],404);
      }
    }



  /**
     *check user plan exsist or not
     *
     * @return \Illuminate\Http\Response
     */
    public function check_user_subscription($plan_id,$user_id)
    {
     
    $checkUserSubscription=UserWorkoutPlans::select('*')->where('plan_id',  $plan_id)->where('user_id',  $user_id)->with(['details'])->get();

    if(!$checkUserSubscription->isEmpty())
    {  return response()->json(['status' => 'User Subscribion Exists!',   'data' =>  $checkUserSubscription
    ],200);

      }
      else 
      {
          return response()->json(['status' => 'Plan Not Subscribed Yet!'
      ],404);
      }
    }

/**
     *fetch user workout plans with game id 
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_user_plans_details($plan_id,$week_no,$day_no)
    {
     
    $fetchUserPlanDetails=UserWorkoutPlanDetails::select('*')->where('user_workout_plan_id',  $plan_id)->where('week_number',  $week_no)->where('day_number',  $day_no)->with(['games'])->get();
    
    if(!$fetchUserPlanDetails->isEmpty())
    {  return response()->json(['status' => 'User Subscribion Exists!',   'data' =>  $fetchUserPlanDetails
    ],200);

      }
      else 
      {
          return response()->json(['status' => 'Plan Details Not Avaliable!'
      ],404);
      }
    }
/**
     *fetch games of user workout plans on game id 
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_user_plans_games($detail_id)
    {
     
    $fetchUserPlanGames=UserWorkoutPlanGames::select('*')->where('user_workout_plan_details_id',  $detail_id)->with(['exercises'])->get();
    
    if(!$fetchUserPlanGames->isEmpty())
    {  return response()->json(['status' => 'User Subscribion Exists!',   'data' =>  $fetchUserPlanGames
    ],200);

      }
      else 
      {
          return response()->json(['status' => 'Games Not Avaliable!'
      ],404);
      }
    }
/**
     *fetch exercises of user workout plans on exercises id 
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_user_plans_exercises($game_id)
    {
     
    $fetchUserPlanExercises=UserWorkoutPlanExcercise::select('*')->where('user_workout_plan_game_id',  $game_id)->get();
    
    if(!$fetchUserPlanExercises->isEmpty())
    {  return response()->json(['status' => 'User Subscribion Exists!',   'data' =>  $fetchUserPlanExercises
    ],200);

      }
      else 
      {
          return response()->json(['status' => 'Exercises Not Avaliable!'
      ],404);
      }
    }
/**
     *get all workout plans on user id
     *
     * @return \Illuminate\Http\Response
     */
    public function get_user_workoutplans($user_id)
    {
     
    $getUserWorkoutplans=UserWorkoutPlans::select('*')->where('user_id',  $user_id)->with(['details'])->get();
    
    if(!$getUserWorkoutplans->isEmpty())
    {  return response()->json(['status' => 'User Subscribion Exists!',   'data' =>  $getUserWorkoutplans
    ],200);

      }
      else 
      {
          return response()->json(['status' => 'Plan Not Avaliable For This User!'
      ],404);
      }
    }
/**
     * Remove the Plan from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_plan($id)
    {
        $planDetailsId= WorkoutPlanDetails::select('id')->where('plan_id',$id)->pluck('id');
        $planGamesid= WorkoutPlanGames::select('id')->whereIn('workout_plan_details_id',$planDetailsId)->pluck('id');
        $planExerciseid= WorkoutPlanExercise::select('id')->whereIn('game_id',$planGamesid)->pluck('id');

        $deletePlan= WorkoutPlans::select('*')->where('id',$id)->delete();
        $deletePlanDetails= WorkoutPlanDetails::select('*')->where('plan_id',$id)->delete();
        $deletePlanGames=WorkoutPlanGames::select('*')->whereIn('id',$planGamesid)->delete();
        $deletePlanExercise=WorkoutPlanExercise::select('*')->whereIn('id',$planExerciseid)->delete();

        return response()->json(['status' => 'Trainer Workout Plan Deleted Successfully!'
      ],200);

}


/**
     * Remove the User Workout Plan from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reset_user_workoutplan($user_workoutplan_id)
    {

      //reset user plan progress
      $userWorkoutPlan = UserWorkoutPlans::where('id', $user_workoutplan_id)->update(['progress' => 0]);

      //reset user plan details progress and calories burn
      $userWorkoutPlanDetails = UserWorkoutPlanDetails::where('user_workout_plan_id', $user_workoutplan_id)->update(['progress' => 0,'cal_burn' => 0]);

      //reset user plan games progress
      $userWorkoutPlanDetailsId= UserWorkoutPlanDetails::select('id')->where('user_workout_plan_id',$user_workoutplan_id)->pluck('id');
      $userWorkoutPlanGames = UserWorkoutPlanGames::whereIn('user_workout_plan_details_id', $userWorkoutPlanDetailsId)->update(['progress' => 0]);
      
      //reset user plan exercises progress
      $userWorkoutPlanGamesId= UserWorkoutPlanGames::select('id')->whereIn('user_workout_plan_details_id',$userWorkoutPlanDetailsId)->pluck('id');
      $userWorkoutPlanExercise = UserWorkoutPlanExcercise::whereIn('user_workout_plan_game_id', $userWorkoutPlanGamesId)->update(['status' => 0]);
      
      //delete all logs of current or larger than current date of user workout plan 
      $userWorkoutPlanExercisesId= UserWorkoutPlanExcercise::select('id')->whereIn('user_workout_plan_game_id',$userWorkoutPlanGamesId)->pluck('id');
      $curentDate = Carbon::now()->format("Y-m-d");
      $logExercises= UserLogs::select('*')->whereIn('exercise_id',$userWorkoutPlanExercisesId)->where('created_date',$curentDate)->orWhere('created_date','>' ,$curentDate)->delete();

      return response()->json(
        ['status' => 'Plan Data Reset Successfully'
    ],200);
    
}
}