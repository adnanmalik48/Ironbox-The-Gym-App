<?php

namespace App\Http\Controllers\Apis\UserLogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserLogs;
use App\Models\UserWorkoutPlanDetails;
use App\Models\UserWorkoutPlanGames;
use App\Models\UserWorkoutPlanExcercise;
use App\Models\UserWorkoutPlans;
use App\Models\User;
use App\Models\WorkoutplansCalories;
use Carbon\Carbon;

class UserLogsApiController extends Controller
{
/**
     * workout auto loggging api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_workout_logs(Request $request)
    {

      $excerciseLogData=UserWorkoutPlanExcercise::select('*')->where('id', $request->input('exercise_id'))->get();

       foreach($excerciseLogData as $log) {
        $logExcerciseId=UserLogs::select('*')->where('exercise_id',$log->id)->get();
        if(!$logExcerciseId->isEmpty())
        {
          return response()->json(['status' => 'Already Log Mapped'
        ],200);
        }
        else
        {
        $userLogs= UserLogs::create([ 
          'title' => $log->name,
          'reps' => $log->reps,
          'minutes' => $log->duration,
          'video_url' => $log->video_url,
          'description'=> $log->description,
          'exercise_id' =>  $request->input('exercise_id'),
          'category_id' =>  $request->input('category_id'),
          'created_date' => $request->input('created_date'),
          'created_by' =>  $request->input('created_by'),
          'user_id'=>   $request->input('user_id'),
      ]);
        }
    
    }
   
  
    $result= UserLogs::select('*')->where('id',$userLogs->id)->get();
    if(!$result->isEmpty())
    {  return response()->json(['status' => 'Log Created Successfully',   'data' =>  $result
          ],200);
      }
      else 
      {
          return response()->json(['status' => 'No log created '
      ],404);
      }

     }
/**
     * self logging POST Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_self_logs(Request $request)
    {

        $userLogs= UserLogs::create([ 
          'title' =>  $request->input('title'),
          'reps' => $request->input('reps'),
          'minutes' =>  $request->input('minutes'),
          'cal_burn' => $request->input('cal_burn'),
          'video_url' =>  $request->input('video_url'),
          'description'=> $request->input('description'),
          'category_id' =>  $request->input('category_id'),
          'created_date' => $request->input('created_date'),
          'created_by' =>  $request->input('created_by'),
          'user_id'=>   $request->input('user_id')
      ]);
   
      $result= UserLogs::select('*')->where('id',$userLogs->id)->get();
      if(!$result->isEmpty())
      {  return response()->json(['status' => 'Log Created Successfully',   'data' =>  $result
            ],200);
        }
        else 
        {
            return response()->json(['status' => 'No log created '
        ],404);
        }
  
     }

/**
     * getting logs on dat eof creation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fetch_user_logs($user_id,$created_date)
    {

   $result= UserLogs::select('*')->where('created_date',$created_date)->where('user_id',$user_id)->get();
      if(!$result->isEmpty())
      {  return response()->json(['status' => 'Logs of '.$created_date.' Fetched Successfully',   'data' =>  $result
            ],200);
        }
        else 
        {
            return response()->json(['status' => 'No log created '
        ],404);
        }
  
     }
/**
     * Updating log status 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_log_status(Request $request,$log_id)
    {
    
     //user workout field updation
     $userId = UserLogs::select('user_id')->where('id', $log_id)->value('user_id');
    $workoutPervoiusDuration=User::select('workout')->where('id', $userId)->value('workout');
   $currentLogDuration=UserLogs::select('minutes')->where('id', $log_id)->value('minutes');
  $updatedWorkoutDuration=$workoutPervoiusDuration + $currentLogDuration;

  $newUpdateWorkoutDuration = User::where('id', $userId)->update(['workout' =>  $updatedWorkoutDuration]);

//user calories burn field updation
$categoryId = UserLogs::select('category_id')->where('id', $log_id)->value('category_id');
$workoutPervoiusCalories=User::select('calories_burn')->where('id', $userId)->value('calories_burn');

if($categoryId=="1")
{
 $currentLogCaloriesBurn=UserLogs::select('cal_burn')->where('id', $log_id)->value('cal_burn');
 $updatedCaloriesBurn = $workoutPervoiusCalories + $currentLogCaloriesBurn;
 $newUpdateCaloriesBurn = User::where('id', $userId)->update(['calories_burn' =>  $updatedCaloriesBurn]);

}
elseif($categoryId=="2")
{    $currentLogCaloriesGain=UserLogs::select('cal_gain')->where('id', $log_id)->value('cal_gain');
  $updatedCaloriesBurn = $workoutPervoiusCalories - $currentLogCaloriesGain;
  $newUpdateCaloriesBurn = User::where('id', $userId)->update(['calories_burn' =>  $updatedCaloriesBurn]);

}



  //status updation
   $exerciseId= UserLogs::select('exercise_id')->where('id',$log_id)->value('exercise_id');
      if($exerciseId!=null)
      {  
        //logs status update
        $userLogs=UserLogs::find($log_id);
        $userLogs->status=$request->input('status');
        $logsStatus=$userLogs->update();
         
        //excercise status update
        $userWorkoutPlanExcercise=UserWorkoutPlanExcercise::find($exerciseId);
        $userWorkoutPlanExcercise->status=$request->input('status');
        $excerciseStatus=$userWorkoutPlanExcercise->update();
        return $this->progress_updation($exerciseId);
        }
        else 
        {
      //logs status update
      $userLogs=UserLogs::find($log_id);
      $userLogs->status=$request->input('status');
      $logsStatus=$userLogs->update();
      return response()->json(['status' => 'Status Updated Successfully'
    ],200);
        }
     
     
     }

     /**
     * Updating excercise status
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_excercise_status(Request $request,$exercise_id)
    {

     //user workout field updation
     $gameId = UserWorkoutPlanExcercise::select('user_workout_plan_game_id')->where('id', $exercise_id)->value('user_workout_plan_game_id');

     $detailId = UserWorkoutPlanGames::select('user_workout_plan_details_id')->where('id', $gameId)->value('user_workout_plan_details_id');

     $planId = UserWorkoutPlanDetails::select('user_workout_plan_id')->where('id', $detailId)->value('user_workout_plan_id');

     $userId = UserWorkoutPlans::select('user_id')->where('id', $planId)->value('user_id');

   $workoutPervoiusDuration=User::select('workout')->where('id', $userId)->value('workout');
   
   $currentExcerciseDuration=UserWorkoutPlanExcercise::select('duration')->where('id', $exercise_id)->value('duration');
   
   $updatedWorkoutDuration=$workoutPervoiusDuration + $currentExcerciseDuration;

   $newUpdateWorkoutDuration = User::where('id', $userId)->update(['workout' =>  $updatedWorkoutDuration]);

//status updation
$logId= UserLogs::select('id')->where('exercise_id',$exercise_id)->value('id');

      if($logId!=null)
      {  

        //excercise status update
        $userWorkoutPlanExcercise=UserWorkoutPlanExcercise::find($exercise_id);
        $userWorkoutPlanExcercise->status=$request->input('status');
        $excerciseStatus=$userWorkoutPlanExcercise->update();

        //logs status update
        $userLogs=UserLogs::find($logId);
        $userLogs->status=$request->input('status');
        $logsStatus=$userLogs->update();
      
        }
        else 
        {
      //logs status update
      $userWorkoutPlanExcercise=UserWorkoutPlanExcercise::find($exercise_id);
      $userWorkoutPlanExcercise->status=$request->input('status');
      $excerciseStatus=$userWorkoutPlanExcercise->update();

    
        }
          return $this->progress_updation($exercise_id);
     }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_log($id)
    {
        $result= UserLogs::select('*')->where('id',$id)->delete();
      
        if($result!=null)
        {  return response()->json(['status' => 'Log Deleted Successfully'
              ],200);
          }
          else 
          {
              return response()->json(['status' => 'Not Found '
          ],404);
          }

}


   /**
     * Weeks logs auto maping function
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function weeks_auto_map(Request $request , $week_number , $plan_id)
    {


    $dayDetails=UserWorkoutPlanDetails::select('*')->where('week_number',$week_number)->where('user_workout_plan_id',$plan_id)->get();

    foreach($dayDetails as $day) {
      
      $dayGames=UserWorkoutPlanGames::select('*')->where('user_workout_plan_details_id',$day->id)->get();
      $days=$day->day_number;
      $todayDate = Carbon::now();
      $currentDay = Carbon::parse($todayDate)->format('l');
      if($days=="1")
    {
    if($currentDay=="Monday")
      {
        $date = Carbon::now()->format("Y-m-d");
      }
     else
     {
      $date = Carbon::parse('next monday')->toDateString();
     }
  }
elseif($days=="2")
{
  if($currentDay=="Monday")
  {
    $date = Carbon::now()->addDay(1)->format("Y-m-d");
  }
 else
 {
  $date = Carbon::parse('next monday')->addDay(1)->toDateString();
 }

}
elseif($days=="3")
{ if($currentDay=="Monday")
  {
    $date = Carbon::now()->addDay(2)->format("Y-m-d");
  }
 else
 {
  $date = Carbon::parse('next monday')->addDay(2)->toDateString();
 }

}
elseif($days=="4")
{
  if($currentDay=="Monday")
  {
    $date = Carbon::now()->addDay(3)->format("Y-m-d");
  }
 else
 {
  $date = Carbon::parse('next monday')->addDay(3)->toDateString();
 }

}
elseif($day=="5")
{
  if($currentDay=="Monday")
  {
    $date = Carbon::now()->addDay(4)->format("Y-m-d");
  }
 else
 {
  $date = Carbon::parse('next monday')->addDay(4)->toDateString();
 }
}
      foreach($dayGames as $games) {
        $dayExcercises=UserWorkoutPlanExcercise::select('*')->where('user_workout_plan_game_id',$games->id)->get();
        foreach($dayExcercises as $excercise) {
          $logExcerciseId=UserLogs::select('*')->where('exercise_id',$excercise->id)->get();
       
          if($logExcerciseId->isEmpty())
          {
          $userLogs= UserLogs::create([ 
            'title' => $excercise->name,
            'reps' => $excercise->reps,
            'minutes' => $excercise->duration,
            'video_url' => $excercise->video_url,
            'description'=> $excercise->description,
            'exercise_id' =>  $excercise->id,
            'category_id' =>  $request->input('category_id'),
            'created_date' => $date,
            'created_by' =>  $request->input('created_by'),
            'user_id'=>   $request->input('user_id'),
        ]);
      }
      

  }
  }
  
     }
return response()->json(['status' => 'Weeks Logs Mapped Successfully'
  ],200);
     

    }

 /**
     * progress updation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function progress_updation($exercise_id)
    {
    
    //Excercise progress calculation and update in games table    
    $gameId= UserWorkoutPlanExcercise::select('user_workout_plan_game_id')->where('id',$exercise_id)->value('user_workout_plan_game_id');

    $exerciseActiveCount = UserWorkoutPlanExcercise::where('user_workout_plan_game_id',$gameId)->where('status','1')->count();

    $exerciseTotalCount = UserWorkoutPlanExcercise::where('user_workout_plan_game_id',$gameId)->count();

    $gameprogress= $exerciseActiveCount / $exerciseTotalCount * 100;

    $updategameProgress = UserWorkoutPlanGames::where('id', $gameId)->update(['progress' => $gameprogress]);

   //Games progress calculation and update in Detail table
    $detailId= UserWorkoutPlanGames::select('user_workout_plan_details_id')->where('id', $gameId)->value('user_workout_plan_details_id');
    
    $gamesTotalProgress = UserWorkoutPlanGames::select('progress')->where('user_workout_plan_details_id',$detailId)->sum('progress');

    $gamesTotalCount = UserWorkoutPlanGames::where('user_workout_plan_details_id',$detailId)->count();

    $detailprogress = $gamesTotalProgress / $gamesTotalCount ;

    $updateDetailProgress = UserWorkoutPlanDetails::where('id', $detailId)->update(['progress' => $detailprogress]);

    //Detail progress calculation and update in Plans table
    $planId= UserWorkoutPlanDetails::select('user_workout_plan_id')->where('id', $detailId)->value('user_workout_plan_id');

    $detailsTotalProgress = UserWorkoutPlanDetails::select('progress')->where('user_workout_plan_id',$planId)->sum('progress');

    $detailsTotalCount = UserWorkoutPlanDetails::where('user_workout_plan_id',$planId)->count();

     $dayprogress = $detailsTotalProgress / $detailsTotalCount ;

     $updateDayProgress = UserWorkoutPlans::where('id', $planId)->update(['progress' => $dayprogress]);

     //Calories Burn calculation 
    //---------------------------
     $mincalories= UserWorkoutPlanDetails::select('min_calories')->where('id', $detailId)->value('min_calories');
     $maxcalories= UserWorkoutPlanDetails::select('max_calories')->where('id', $detailId)->value('max_calories');

     $avg_calories=($mincalories + $maxcalories) / 2;

     $userid= UserWorkoutPlans::select('user_id')->where('id', $planId)->value('user_id');

     $userWeight= User::select('weight')->where('id', $userid)->value('weight');
                
    // Average Calories Calculation from Calories table 
    $caloriesAsWeight= WorkoutplansCalories::select('calories')->where([
        ['lower_weight', '<=', $userWeight],
        ['upper_weight', '>=', $userWeight],
     ])->value('calories');
    
    if($caloriesAsWeight>0 || $caloriesAsWeight<0)
     {
      // $newAvgCalories=$avg_calories+$caloriesAsWeight;
       $newAvgCalories = $avg_calories + (($caloriesAsWeight / 100)*400);

       $dayProgress= UserWorkoutPlanDetails::select('progress')->where('id', $detailId)->value('progress');
       $dayCaloriesBurn= ($dayProgress / 100)*$newAvgCalories;
       $updateDayCaloriesBurn = UserWorkoutPlanDetails::where('id', $detailId)->update(['cal_burn' => $dayCaloriesBurn]);
     }
    else
     {
        $dayProgress= UserWorkoutPlanDetails::select('progress')->where('id', $detailId)->value('progress');
        $dayCaloriesBurn= ($dayProgress / 100)*$avg_calories;
        $updateDayCaloriesBurn = UserWorkoutPlanDetails::where('id', $detailId)->update(['cal_burn' => $dayCaloriesBurn]);
     }
     
        return response()->json(['status' => 'Progress With Calories Updated Successfully'
            ],200);
     }

}