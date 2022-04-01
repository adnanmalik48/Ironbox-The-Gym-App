<?php

namespace App\Http\Controllers\Admin\WorkoutPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlanRatings;
use App\Models\WorkoutPlanDetails;
use App\Models\WorkoutPlanGames;
use App\Models\WorkoutPlanExercise;
use App\Models\WorkoutPlans;

class WorkoutPlansAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $workoutPlans=WorkoutPlans::all();
        return view('admin.workout_plans.workout-plans-main')->with(['trainers'])->with(['ratings'])->with('workoutPlans',$workoutPlans);
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
      //  $workoutPlanDetails=WorkoutPlanDetails::select('*')->where('plan_id',$id)->get();
        $workoutPlans=WorkoutPlans::findOrFail($id);
        return view('admin.workout_plans.show-workout-plans')->with(['trainers']) ->with(['ratings'])->with('workoutPlans',$workoutPlans);
      
      //   $workoutPlanDetails=WorkoutPlanDetails::select('*')->where('plan_id',$id)->get();
      //  // $workoutPlans=WorkoutPlans::findOrFail($id);
      //   return view('admin.workout_plans.workout-plan-details')->with('workoutPlanDetails',$workoutPlanDetails);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
      
      if($request->input('updateStatusvalue')==1 )
      {  
        $workoutPlans=WorkoutPlans::find($id);
        $workoutPlans->status="0";
        $workoutPlans->update();
        
        return redirect('/workout_plans')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
      }
    else if($request->input('updateStatusvalue')==0 )
    {  
      $workoutPlans=WorkoutPlans::find($id);
        $workoutPlans->status="1";
        $workoutPlans->update();
      
      return redirect('/workout_plans')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
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
      $planDetailsId= WorkoutPlanDetails::select('id')->where('plan_id',$id)->pluck('id');
        $planGamesid= WorkoutPlanGames::select('id')->whereIn('workout_plan_details_id',$planDetailsId)->pluck('id');
        $planExerciseid= WorkoutPlanExercise::select('id')->whereIn('game_id',$planGamesid)->pluck('id');

        $deletePlan= WorkoutPlans::select('*')->where('id',$id)->delete();
        $deletePlanDetails= WorkoutPlanDetails::select('*')->where('plan_id',$id)->delete();
        $deletePlanGames=WorkoutPlanGames::select('*')->whereIn('id',$planGamesid)->delete();
        $deletePlanExercise=WorkoutPlanExercise::select('*')->whereIn('id',$planExerciseid)->delete();

        return redirect('/workout_plans')->with('status','Your Plan Deleted Successfully!') ->with('statuscode','success');  
       
    }
}
