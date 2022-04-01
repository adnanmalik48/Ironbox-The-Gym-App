<?php

namespace App\Http\Controllers\Admin\WorkoutplansCalories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutplansCalories;


class WorkoutplansCaloriesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workoutplansCalories=WorkoutplansCalories::all();
 
        return view('admin.workout_plans_calories.calories-main')->with('workoutplansCalories',$workoutplansCalories);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workout_plans_calories.add-calories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lower_weight' => ['required',  'max:10'],
            'upper_weight' => ['required',  'max:10'],
            'calories' => ['max:10'],
        ]);
        $workoutplansCalories=new WorkoutplansCalories();
        $workoutplansCalories->lower_weight=$request->input('lower_weight');
        $workoutplansCalories->upper_weight=$request->input('upper_weight');
        $caloriesInput=$request->input('calories');
        $caloriesSign=$request->input('sign');
        $calories=$caloriesSign.$caloriesInput;
        $workoutplansCalories->calories= $calories;

     
        $base_candidate=$request->input('base_candidate');
        if( $request->input('base_candidate') =="1")
        {       $workoutplansCalories->calories="0";
            $base_candidate_pervoius= WorkoutplansCalories::select('base_candidate')->where('base_candidate',1)->value('base_candidate');
       if($base_candidate_pervoius=="1")
       {
        return redirect('workoutplans_calories/create')->with('status','Base Candidate Already Exists!');
       }
       else
       {
        $workoutplansCalories->base_candidate='1';
       }
        }
        else
        {
            $workoutplansCalories->base_candidate='0';
        }
        $result=$workoutplansCalories->save();  
        if($result){
          
            return redirect('/workoutplans_calories')->with('status','Calories data created successfully!')->with('statuscode','success');   
        
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
        $workoutplansCalories=WorkoutplansCalories::findOrFail($id);
        return view('admin.workout_plans_calories.edit-calories', compact('workoutplansCalories'));	
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
        if($request->input('updatevalue')==1 )
        {  
            $workoutplansCalories=WorkoutplansCalories::find($id);
         
          $base_candidate_pervoius= WorkoutplansCalories::select('base_candidate')->where('base_candidate',1)->value('base_candidate');
    
        
       if($base_candidate_pervoius==null)
      {
        $workoutplansCalories->calories="0";
        $workoutplansCalories->base_candidate=$request->input('base_candidate');
        $workoutplansCalories->update();
        
        return redirect('/workoutplans_calories')->with('status','Your Base Candidate Is Updated Successfully!') ->with('statuscode','success'); 
      }
          if($base_candidate_pervoius=="1" && $request->input('base_candidate')=="1")
         {   
             WorkoutplansCalories::where('base_candidate',1)->update(['base_candidate' => '0']);
             $workoutplansCalories->calories="0";
            $workoutplansCalories->base_candidate=$request->input('base_candidate');
            $workoutplansCalories->update();
            return redirect('/workoutplans_calories')->with('status','Your Base Candidate Is Updated Successfully!') ->with('statuscode','success'); 

         }
         if( $request->input('base_candidate')==null)
          {
            return redirect('/workoutplans_calories')->with('status','No Candidate choosen!') ->with('statuscode','success'); 
          }
       
        }
        else
        {
            
            $workoutplansCalories=WorkoutplansCalories::find($id);
      
            $workoutplansCalories->lower_weight=$request->input('lower_weight');
            $workoutplansCalories->upper_weight=$request->input('upper_weight');
            $caloriesInput=$request->input('calories');
            $caloriesSign=$request->input('sign');
            $calories=$caloriesSign.$caloriesInput;
            $workoutplansCalories->calories= $calories;
            
            $base_candidate=$request->input('base_candidate');
            if( $request->input('base_candidate') =="1")
            {       $workoutplansCalories->calories="0";
                $base_candidate_pervoius= WorkoutplansCalories::select('base_candidate')->where('base_candidate',1)->value('base_candidate');
                $check_current_id= WorkoutplansCalories::select('id')->where('base_candidate',1)->value('id');
               
           
           if($base_candidate_pervoius=="1" )
           {
            if( $check_current_id==$id)
            {
                WorkoutplansCalories::where('base_candidate',1)->update(['base_candidate' => '1']);
            }
            else{
            return redirect('workoutplans_calories/'.$id.'/edit')->with('status','Base Candidate Already Exists!');
            }
           }
           else
           {
            $workoutplansCalories->base_candidate='1';
           }
            }
            else
            {
                $workoutplansCalories->base_candidate='0';
            }

            
            $result=$workoutplansCalories->update();  
            if($result){
              
                return redirect('/workoutplans_calories')->with('status','Calories data created successfully!')->with('statuscode','success');   
            
            }
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
        $workoutplansCalories=WorkoutplansCalories::findOrFail($id);
        $workoutplansCalories->delete();

        return redirect('/workoutplans_calories')->with('status','Your Data Is Deleted Successfully!')->with('statuscode','error');
    }
}
