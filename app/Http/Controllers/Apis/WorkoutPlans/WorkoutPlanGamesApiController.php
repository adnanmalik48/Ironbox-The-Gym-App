<?php

namespace App\Http\Controllers\Apis\WorkoutPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlanGames;

class WorkoutPlanGamesApiController extends Controller
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
        $workoutPlanGames=new WorkoutPlanGames();
        $workoutPlanGames->workout_plan_details_id=$request->input('workout_plan_details_id');
        $workoutPlanGames->name=$request->input('name');
        $workoutPlanGames->sets=$request->input('sets');
        $workoutPlanGames->rounds=$request->input('rounds');
     
        $result=$workoutPlanGames->save();

        if($result)
        {

        $results= WorkoutPlanGames::select('*')->where('id',$workoutPlanGames->id)->get();
 
        return response()->json(['status' => 'Plan Day Games Saved Successfully ',   'data' =>  $results
    ],200);
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
        
        $result= WorkoutPlanGames::select('*')->with(['exercises'])->where('id',$id)->get();
        if(!$result->isEmpty())
          {  return response()->json(['status' => 'Plan Day Games Fetched Successfully',   'data' =>  $result
                ],200);
            }
            else 
            {
                return response()->json(['status' => 'No Plan Details registered'
            ],404);
            }
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
        $workoutPlanGames=WorkoutPlanGames::find($id);
        $workoutPlanGames->workout_plan_details_id=$request->input('workout_plan_details_id');
        $workoutPlanGames->name=$request->input('name');
        $workoutPlanGames->sets=$request->input('sets');
        $workoutPlanGames->rounds=$request->input('rounds');
     
        $result=$workoutPlanGames->update();

        if($result)
        {
     
        $results= WorkoutPlanGames::select('*')->where('id',$workoutPlanGames->id)->get();
 
        return response()->json(['status' => 'Plan Day Games Updated',   'data' =>  $results
    ],200);

         
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
        $workoutPlanGames=WorkoutPlanGames::findOrFail($id);
     
        $workoutPlanGames->delete();
        return response()->json(['status' => 'Plan Day Game Deleted Successfully']);
    }
}
