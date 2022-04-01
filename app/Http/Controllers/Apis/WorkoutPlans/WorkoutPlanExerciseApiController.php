<?php

namespace App\Http\Controllers\Apis\WorkoutPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlanExercise;

class WorkoutPlanExerciseApiController extends Controller
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
        $workoutPlanExercise=new WorkoutPlanExercise();
        $workoutPlanExercise->game_id=$request->input('game_id');
        $workoutPlanExercise->name=$request->input('name');
        $workoutPlanExercise->reps=$request->input('reps');
        $workoutPlanExercise->duration=$request->input('duration');
        $workoutPlanExercise->video_url=$request->input('video_url');
        $workoutPlanExercise->description=$request->input('description');
     
        $result=$workoutPlanExercise->save();

        if($result)
        {
        $results= WorkoutPlanExercise::select('*')->where('id',$workoutPlanExercise->id)->get();
 
        return response()->json(['status' => 'Plan Day Exercise  Saved ',   'data' =>  $results
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
        $result= WorkoutPlanExercise::select('*')->where('game_id',$id)->get();
        if(!$result->isEmpty())
          {  return response()->json(['status' => 'Plan Details Fetched Successfully',   'data' =>  $result
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
        $workoutPlanExercise=WorkoutPlanExercise::find($id);
        $workoutPlanExercise->game_id=$request->input('game_id');
        $workoutPlanExercise->name=$request->input('name');
        $workoutPlanExercise->reps=$request->input('reps');
        $workoutPlanExercise->duration=$request->input('duration');
        $workoutPlanExercise->video_url=$request->input('video_url');
        $workoutPlanExercise->description=$request->input('description');
     
        $result=$workoutPlanExercise->update();

        if($result)
        {
     
        $results= WorkoutPlanExercise::select('*')->where('id',$workoutPlanExercise->id)->get();
 
        return response()->json(['status' => 'Plan Day Exercise  Updated ',   'data' =>  $results
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
        $workoutPlanExercise=WorkoutPlanExercise::findOrFail($id);
        $workoutPlanExercise->delete();
        return response()->json(['status' => 'Plan Day Exercise Deleted Successfully']);
    }
}
