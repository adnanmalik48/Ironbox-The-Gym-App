<?php

namespace App\Http\Controllers\Admin\DietPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomDietPlans;
use App\Models\CustomDietPlanMeals;
use App\Models\CustomDietPlanMealDishes;
use App\Models\CustomDietPlanDay;

class CustomDietPlanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_plans()
    {   
        $customDietPlans=CustomDietPlans::all();
        return view('admin.diet_plans.diet-plans-main')->with(['trainers'])->with(['trainees'])->with('customDietPlans',$customDietPlans);
    }
    /**
     * Display a diet plan informaion
     *
     * @return \Illuminate\Http\Response
     */
    public function show_plan_information($id)
    {  
        $customDietPlans=CustomDietPlans::findOrFail($id);
        return view('admin.diet_plans.show-diet-plan')->with(['trainers'])->with(['trainees'])->with('customDietPlans',$customDietPlans);
    }
    /**
     * Display a diet plan days
     *
     * @return \Illuminate\Http\Response
     */
    public function diet_plan_days(Request $request,$id)
    {  
        $customDietPlanDay=CustomDietPlanDay::select('*')->where('plan_id',$id)->get();
        $request->session()->put('day_id', $id);
        return view('admin.diet_plans.diet-plan-days')->with('customDietPlanDay',$customDietPlanDay);  
    }
/**
     * Display a diet plan meals
     *
     * @return \Illuminate\Http\Response
     */
    public function diet_plan_meals(Request $request,$id)
    {  
        $customDietPlanMeals=CustomDietPlanMeals::select('*')->where('detail_id',$id)->get();
        $request->session()->put('meal_id', $id);
        return view('admin.diet_plans.diet-plan-meals')->with('customDietPlanMeals',$customDietPlanMeals);  
    }
/**
     * Display a diet plan meal dishes
     *
     * @return \Illuminate\Http\Response
     */
    public function diet_plan_meal_dishes(Request $request,$id)
    {  
        $customDietPlanMealDishes=CustomDietPlanMealDishes::select('*')->where('meal_id',$id)->get();
    
        return view('admin.diet_plans.diet-plan-meal-dishes')->with('customDietPlanMealDishes',$customDietPlanMealDishes);  
    }

 /**
     * Update status
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function diet_plan_status_update(Request $request, $id)
    { 
      
      if($request->input('updateStatusvalue')==1 )
      {  
        $customDietPlans=CustomDietPlans::find($id);
        $customDietPlans->status="0";
        $customDietPlans->update();
        
        return redirect('/diet_plans')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
      }
    else if($request->input('updateStatusvalue')==0 )
    {  
        $customDietPlans=CustomDietPlans::find($id);
        $customDietPlans->status="1";
        $customDietPlans->update();
      
      return redirect('/diet_plans')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
    }
    }
}
