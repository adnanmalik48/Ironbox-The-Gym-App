<?php

namespace App\Http\Controllers\Apis\WorkoutPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlans;
use App\Models\PlanRatings;

class WorkoutPlansApiController extends Controller
{ 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result= WorkoutPlans::select('*')->with(['ratings'])->with(['details'])->where('status',1)->where('id',$id)->get();
      if(!$result->isEmpty())
      {  return response()->json(['status' => 'Plan Data Fetched Successfully',   'data' =>  $result
            ],200);
        }
        else 
        {
            return response()->json(['status' => 'No Plan registered'
        ],404);
        }
    }



     /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $workoutPlans=new WorkoutPlans();
        $workoutPlans->title=$request->input('title');
        $workoutPlans->description=$request->input('description');
        $workoutPlans->caution=$request->input('caution');
        $workoutPlans->price=$request->input('price');
        $workoutPlans->trainer_id=$request->input('trainer_id');
        if(request()->hasFile('cover_img')){
          $coverimg= $request->file('cover_img')->getClientOriginalName();
          $workoutPlans->cover_img = $request->file('cover_img')->storeAs('workout_plans_cover_images', $coverimg ,'public');
          }
        $workoutPlans->cover_video=$request->input('cover_video');
        $workoutPlans->difficulty_level=$request->input('difficulty_level');
        $workoutPlans->duration=$request->input('duration');
        $workoutPlans->category=$request->input('category');
        $workoutPlans->muscle_type=$request->input('muscle_type');
        $workoutPlans->whats_new=$request->input('whats_new');
        $workoutPlans->status=$request->input('status');

        $result=$workoutPlans->save();
        if($result)
        {
          PlanRatings::create([ 
      
            'plan_id' => $workoutPlans->id,
           
        ]);
      
        $results= WorkoutPlans::select('*')->where('id',$workoutPlans->id)->get();
 
        return response()->json(['status' => 'Plan Saved Successfully ',   'data' =>  $results
    ],200);
          }}
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
          public function update(Request $request, $id)
          { 
                $workoutPlans=WorkoutPlans::find($id);
                $workoutPlans->title=$request->input('title');
                $workoutPlans->description=$request->input('description');
                $workoutPlans->caution=$request->input('caution');
                $workoutPlans->price=$request->input('price');
                $workoutPlans->trainer_id=$request->input('trainer_id');
                if(request()->hasFile('cover_img')){
                  $coverimg= $request->file('cover_img')->getClientOriginalName();
                  $workoutPlans->cover_img = $request->file('cover_img')->storeAs('workout_plans_cover_images', $coverimg ,'public');
                  }
                $workoutPlans->cover_video=$request->input('cover_video');
                $workoutPlans->difficulty_level=$request->input('difficulty_level');
                $workoutPlans->duration=$request->input('duration');
                $workoutPlans->category=$request->input('category');
                $workoutPlans->muscle_type=$request->input('muscle_type');
                $workoutPlans->whats_new=$request->input('whats_new');
                $workoutPlans->status=$request->input('status');

                $result=$workoutPlans->update();
                if($result)
                {
                $results= WorkoutPlans::select('*')->where('id',$workoutPlans->id)->get();
 
               
                $perviousVersion= WorkoutPlans::select('version')->where('id',$workoutPlans->id)->value('version');
                $newVersion = $perviousVersion + 1;
                $upgradedVersion= WorkoutPlans::where('id',$workoutPlans->id)->update(['version' => $newVersion]);

                return response()->json(['status' => 'Plan Updated Successfully ',   'data' =>  $results
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
        $workoutPlans=WorkoutPlans::findOrFail($id);
        $image ='/storage/'.$workoutPlans->cover_img;
        $path=str_replace('\\','/',public_path());
       // dd( $path.$image);
       if(file_exists($path.$image))
       {
           unlink($path.$image);
           
        $workoutPlans->delete();
       
        return response()->json(['status' => 'Plan Deleted Successfully']);
       }
  else{
    $workoutPlans->delete();
       
    return response()->json(['status' => 'Plan Deleted Successfully']); 
   
  }
    }
    
}