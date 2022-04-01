<?php

namespace App\Http\Controllers\Admin\WorkoutPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlanGames;
use App\Models\WorkoutPlanExercise;
use App\Models\WorkoutPlanDetails;

class WorkoutPlanDetailsAdminController extends Controller
{  
    public function details(Request $request,$id)
    {   
        $workoutPlanDetails=WorkoutPlanDetails::select('*')->where('plan_id',$id)->get();
        $request->session()->put('details_id', $id);
        // $value = $request->session()->get('details_id');
        // dd($value);
        return view('admin.workout_plans.workout-plan-details')->with('workoutPlanDetails',$workoutPlanDetails);  
     
    }
   
    public function games(Request $request,$id)
    {   
       $workoutPlanGames=WorkoutPlanGames::select('*')->where('workout_plan_details_id',$id)->get();

       $request->session()->put('games_id', $id);

        return view('admin.workout_plans.workout-plan-games')->with('workoutPlanGames',$workoutPlanGames);

    }
    public function exercises(Request $request,$id)
    {   
        $workoutPlanExercise=WorkoutPlanExercise::select('*')->where('game_id',$id)->get();
        $request->session()->put('exercise_id', $id);

        return view('admin.workout_plans.workout-plan-exercise')->with('workoutPlanExercise',$workoutPlanExercise);

    }
    public function show_exercise($id)
    {   
        $showWorkoutPlanExercise=WorkoutPlanExercise::findOrFail($id);
     
        return view('admin.workout_plans.show-workout-plan-exercise')->with('showWorkoutPlanExercise',$showWorkoutPlanExercise);

    }

    
   
}
