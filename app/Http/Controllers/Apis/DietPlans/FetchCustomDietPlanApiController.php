<?php

namespace App\Http\Controllers\Apis\DietPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomDietPlans;
use App\Models\CustomDietPlanMeals;
use App\Models\CustomDietPlanMealDishes;
use App\Models\CustomDietPlanDay;

class FetchCustomDietPlanApiController extends Controller
{
       /**
     * Fetch Diet Plan on Plan ID 
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_diet_plan($plan_id)
    {   
        $customDietPlan= CustomDietPlans::select('*')->where('status',1)->with(['trainers'])->with(['trainees'])->with(['details'])->where('id',$plan_id)->get();
        return response()->json(['status' => 'Diet Plan Data Feched Successfully ',   'data' =>  $customDietPlan
    ],200);
    }
     /**
     * Fetch Diet Plan on Request ID 
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_request_diet_plan($request_id)
    {   
        $customDietPlan= CustomDietPlans::select('*')->where('status',1)->with(['trainers'])->with(['trainees'])->with(['details'])->where('request_id',$request_id)->get();
        return response()->json(['status' => 'Diet Plan Data Feched Successfully ',   'data' =>  $customDietPlan
    ],200);
    }
        /**
     * Fetch Trainer Diet Plan
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_trainer_diet_plans($trainer_id)
    {   
        $customDietPlan= CustomDietPlans::select('*')->where('status',1)->with(['trainees'])->with(['details'])->where('trainer_id',$trainer_id)->get();
        return response()->json(['status' => 'Trainer Diet Plan Data Feched Successfully ',   'data' =>  $customDietPlan
    ],200);
    }
         /**
     * Fetch Trainee Diet Plan
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_trainee_diet_plans($trainee_id)
    {   
        $customDietPlan= CustomDietPlans::select('*')->where('status',1)->with(['trainers'])->with(['details'])->where('trainee_id',$trainee_id)->get();
        return response()->json(['status' => 'Trainer Diet Plan Data Feched Successfully ',   'data' =>  $customDietPlan
    ],200);
    }
     /**
     * Fetch Diet Plan days
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_diet_plan_day($plan_id,$week_number,$day_number)
    {   
        $customDietPlanMeals= CustomDietPlanDay::select('*')->with(['meals'])->where('plan_id',$plan_id)->where('week_number',$week_number)->where('day_number',$day_number)->get();
        return response()->json(['status' => 'Diet Plan Day Data Feched Successfully ',   'data' =>  $customDietPlanMeals
    ],200);
    }
        /**
     * Fetch Diet Plan Meals
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_diet_plan_meals($detail_id)
    {   
        $customDietPlanMeals= CustomDietPlanMeals::select('*')->with(['dishes'])->where('detail_id',$detail_id)->get();
        return response()->json(['status' => 'Diet Plan Meals Data Feched Successfully ',   'data' =>  $customDietPlanMeals
    ],200);
    }
 /**
     * Fetch Diet Plan Meal Dishes
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_meal_dishs($meal_id)
    {   
        $customDietPlanMealDishes= CustomDietPlanMealDishes::select('*')->where('meal_id',$meal_id)->get();
        return response()->json(['status' => ' Diet Plan Meal Dishes Data Feched Successfully ',   'data' =>  $customDietPlanMealDishes
    ],200);
    }

}
