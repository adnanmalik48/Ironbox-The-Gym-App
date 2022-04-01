<?php

namespace App\Http\Controllers\Apis\WorkoutPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlanDetails;

class WorkoutPlanDetailsApiController extends Controller
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
        $workoutPlanDetails=new WorkoutPlanDetails();
        $workoutPlanDetails->plan_id=$request->input('plan_id');
        $workoutPlanDetails->day_title=$request->input('day_title');
        $workoutPlanDetails->min_calories=$request->input('min_calories');
        $workoutPlanDetails->max_calories=$request->input('max_calories');
        $workoutPlanDetails->day_number=$request->input('day_number');
        $workoutPlanDetails->week_number=$request->input('week_number');
     
        $result=$workoutPlanDetails->save();

        if($result)
        {
       
        $results= WorkoutPlanDetails::select('*')->where('id',$workoutPlanDetails->id)->get();
 
        return response()->json(['status' => 'Plan Details Saved Successfully',   'data' =>  $results
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
        
        $result= WorkoutPlanDetails::select('*')->with(['games'])->where('id',$id)->get();
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
        $workoutPlanDetails=WorkoutPlanDetails::find($id);
        $workoutPlanDetails->plan_id=$request->input('plan_id');
        $workoutPlanDetails->day_title=$request->input('day_title');
        $workoutPlanDetails->min_calories=$request->input('min_calories');
        $workoutPlanDetails->max_calories=$request->input('max_calories');
        $workoutPlanDetails->day_number=$request->input('day_number');
        $workoutPlanDetails->week_number=$request->input('week_number');
     
        $result=$workoutPlanDetails->update();

        if($result)
        {
     
        $results= WorkoutPlanDetails::select('*')->where('id',$workoutPlanDetails->id)->get();
 
        return response()->json(['status' => 'Plan Details Updated Successfully',   'data' =>  $results
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
        $workoutPlanDetails=WorkoutPlanDetails::findOrFail($id);
     
        $workoutPlanDetails->delete();
        return response()->json(['status' => 'Plan Details Deleted Successfully']);
    }
}
