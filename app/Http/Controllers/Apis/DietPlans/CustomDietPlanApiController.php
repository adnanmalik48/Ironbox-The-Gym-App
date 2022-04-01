<?php

namespace App\Http\Controllers\Apis\DietPlans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomDietPlans;
use App\Models\CustomDietPlanMeals;
use App\Models\CustomDietPlanMealDishes;
use App\Models\CustomDietPlanDay;

class CustomDietPlanApiController extends Controller
{
      /**
     * store_diet_plan api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_diet_plan(Request $request)
    {  
        $customDietPlans=new CustomDietPlans();
        $customDietPlans->title=$request->input('title');
        $customDietPlans->difficulty_level=$request->input('difficulty_level');
        $customDietPlans->description=$request->input('description');
        $customDietPlans->duration=$request->input('duration');
        $customDietPlans->goal=$request->input('goal');
        $customDietPlans->caution=$request->input('caution');
        $customDietPlans->request_id=$request->input('request_id');
        $customDietPlans->trainee_id=$request->input('trainee_id');
        $customDietPlans->trainer_id=$request->input('trainer_id');
        if(request()->hasFile('cover_image')){
          $coverimg= $request->file('cover_image')->getClientOriginalName();
          $customDietPlans->cover_image = $request->file('cover_image')->storeAs('diet_plans_cover_images', $coverimg ,'public');
          }
        $result=$customDietPlans->save();
        if($result)
        {
            $results= CustomDietPlans::select('*')->where('id',$customDietPlans->id)->get();
            return response()->json(['status' => 'Diet Plan Data Saved Successfully ',   'data' =>  $results
        ],200);
}

}
  /**
     * store_diet_plan day api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_diet_plan_day(Request $request)
    {  
      $customDietPlanDay=CustomDietPlanDay::select('*')->where('plan_id',$request->input('plan_id'))->where('week_number',$request->input('week_number'))->where('day_number',$request->input('day_number'))->get();

      if(!$customDietPlanDay->isEmpty())
      {
        $results= CustomDietPlanDay::select('*')->where('plan_id',$request->input('plan_id'))->where('week_number',$request->input('week_number'))->where('day_number',$request->input('day_number'))->get();
            return response()->json(['status' => 'Diet Plan Day Saved Successfully ',   'data' =>  $results
        ],200);
      }
      else
      {
        $customDietPlanDay=new CustomDietPlanDay();
        $customDietPlanDay->plan_id=$request->input('plan_id');
        $customDietPlanDay->week_number=$request->input('week_number');
        $customDietPlanDay->day_number=$request->input('day_number');
        $result=$customDietPlanDay->save();
        if($result)
        {
            $results= CustomDietPlanDay::select('*')->where('id',$customDietPlanDay->id)->get();
            return response()->json(['status' => 'Diet Plan Day Saved Successfully ',   'data' =>  $results
        ],200);
}
      }
}

 /**
     * store_diet_plan_meals api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_diet_plan_meals(Request $request)
    {    
      $customDietPlanMeals=new CustomDietPlanMeals();
      $customDietPlanMeals->title=$request->input('title');
      $customDietPlanMeals->detail_id=$request->input('detail_id');
      $customDietPlanMeals->time=$request->input('time');
      $result=$customDietPlanMeals->save();
      if($result)
      {
        $dayMealCount = CustomDietPlanMeals::where('detail_id',$request->input('detail_id'))->count();
        $updateDayMealCount = CustomDietPlanDay::where('id',$request->input('detail_id'))->update(['total_meals' => $dayMealCount]);

          $results= CustomDietPlanMeals::select('*')->where('id',$customDietPlanMeals->id)->get();
          return response()->json(['status' => 'Diet Plan Meal Data Saved Successfully ',   'data' =>  $results
      ],200);
}
}
/**
     * store_diet_plan_meal_dishes api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_diet_plan_meal_dishes(Request $request)
    {  
      
      $customDietPlanMealDishes=new CustomDietPlanMealDishes();
      $customDietPlanMealDishes->name=$request->input('name');
      $customDietPlanMealDishes->meal_id=$request->input('meal_id');
      $customDietPlanMealDishes->quantity=$request->input('quantity');
      $customDietPlanMealDishes->description=$request->input('description');
      $customDietPlanMealDishes->weight=$request->input('weight');
      if(request()->hasFile('image')){
        $coverimg= $request->file('image')->getClientOriginalName();
        $customDietPlanMealDishes->image = $request->file('image')->storeAs('diet_plans_dishes_cover_images', $coverimg ,'public');
        }
      $customDietPlanMealDishes->protein=$request->input('protein'); $customDietPlanMealDishes->calories=$request->input('calories');
      $customDietPlanMealDishes->fat=$request->input('fat');
      $customDietPlanMealDishes->carbohydrates=$request->input('carbohydrates');
      $customDietPlanMealDishes->caution=$request->input('caution');
      $result=$customDietPlanMealDishes->save();
      if($result)
      {
        //Sum PFCC values of dishes
        $protein= CustomDietPlanMealDishes::select('protein')->where('meal_id',$request->input('meal_id'))->sum('protein');
        $fat= CustomDietPlanMealDishes::select('fat')->where('meal_id',$request->input('meal_id'))->sum('fat');
        $calories= CustomDietPlanMealDishes::select('calories')->where('meal_id',$request->input('meal_id'))->sum('calories');
        $carbohydrates= CustomDietPlanMealDishes::select('carbohydrates')->where('meal_id',$request->input('meal_id'))->sum('carbohydrates');

        //Update PFCC values in meal table 
        $updateTotalProtein = CustomDietPlanMeals::where('id',$request->input('meal_id'))->update(['total_protein' =>  $protein]);
        $updateTotalFat = CustomDietPlanMeals::where('id',$request->input('meal_id'))->update(['total_fat' =>  $fat]);
        $updateTotalCalories = CustomDietPlanMeals::where('id',$request->input('meal_id'))->update(['total_calories' => $calories]);
        $updateTotalCarbohydrates = CustomDietPlanMeals::where('id',$request->input('meal_id'))->update(['total_carbohydrates' => $carbohydrates]);


        //Sum PFCC values of meals
        $detailId= CustomDietPlanMeals::select('detail_id')->where('id',$request->input('meal_id'))->value('detail_id');
        $mealProtein= CustomDietPlanMeals::select('total_protein')->where('detail_id',$detailId)->sum('total_protein');
        $mealFat= CustomDietPlanMeals::select('total_fat')->where('detail_id',$detailId)->sum('total_fat');
        $mealCalories= CustomDietPlanMeals::select('total_calories')->where('detail_id',$detailId)->sum('total_calories');
        $mealCarbohydrates= CustomDietPlanMeals::select('total_carbohydrates')->where('detail_id',$detailId)->sum('total_carbohydrates');

         //Update PFCC values in day table 
        $updateTotalProtein = CustomDietPlanDay::where('id', $detailId)->update(['total_protein' =>  $mealProtein]);
        $updateTotalFat = CustomDietPlanDay::where('id',$detailId)->update(['total_fat' =>  $mealFat]);
        $updateTotalCalories = CustomDietPlanDay::where('id',$detailId)->update(['total_calories' => $mealCalories]);
        $updateTotalCarbohydrates = CustomDietPlanDay::where('id',$detailId)->update(['total_carbohydrates' => $mealCarbohydrates]);

       //Sum PFCC values of days
       $planId= CustomDietPlanDay::select('plan_id')->where('id',$detailId)->value('plan_id');
       $dayProtein= CustomDietPlanDay::select('total_protein')->where('plan_id',$planId)->sum('total_protein');
       $dayFat= CustomDietPlanDay::select('total_fat')->where('plan_id',$planId)->sum('total_fat');
       $dayCalories= CustomDietPlanDay::select('total_calories')->where('plan_id',$planId)->sum('total_calories');
       $dayCarbohydrates= CustomDietPlanDay::select('total_carbohydrates')->where('plan_id',$planId)->sum('total_carbohydrates');

          //Update PFCC values in plan table 
          $updateTotalProtein = CustomDietPlans::where('id', $planId)->update(['total_protein' =>  $dayProtein]);
          $updateTotalsFat = CustomDietPlans::where('id',$planId)->update(['total_fat' =>  $dayFat]);
          $updateTotalCalories = CustomDietPlans::where('id',$planId)->update(['total_calories' => $dayCalories]);
          $updateTotalCarbohydrates = CustomDietPlans::where('id',$planId)->update(['total_carbohydrates' => $dayCarbohydrates]);

          $results= CustomDietPlanMealDishes::select('*')->where('id',$customDietPlanMealDishes->id)->get();

          return response()->json(['status' => 'Diet Plan Meal Dish Data Saved Successfully ',   'data' => $results
      ],200);
}
}

 /**
     * update_diet_plan api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_diet_plan(Request $request, $id)
    {  
      $isEdited= CustomDietPlans::select('is_edited')->where('status',1)->where('id',$id)->value('is_edited');
      if($isEdited==1)
      {
        return response()->json(['status' => 'You did not edit the plan'
      ],200);
      }
      else
      {
        $customDietPlans=CustomDietPlans::find($id);
        $customDietPlans->title=$request->input('title');
        $customDietPlans->difficulty_level=$request->input('difficulty_level');
        $customDietPlans->description=$request->input('description');
        $customDietPlans->duration=$request->input('duration');
        $customDietPlans->goal=$request->input('goal');
        $customDietPlans->caution=$request->input('caution');
        $customDietPlans->request_id=$request->input('request_id');
        $customDietPlans->trainee_id=$request->input('trainee_id');
        $customDietPlans->trainer_id=$request->input('trainer_id');
        if(request()->hasFile('cover_image')){
          $coverimg= $request->file('cover_image')->getClientOriginalName();
          $customDietPlans->cover_image = $request->file('cover_image')->storeAs('diet_plans_cover_images', $coverimg ,'public');
          }
        $result=$customDietPlans->update();
        if($result)
        {
            $results= CustomDietPlans::select('*')->where('id',$customDietPlans->id)->get();
            return response()->json(['status' => 'Diet Plan Data Updated Successfully ',   'data' =>  $results
        ],200);
}
      }

}
   /**
     * update_diet_plan_meals api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_diet_plan_meals(Request $request, $id)
    {    
      $isEdited= CustomDietPlans::select('is_edited')->where('status',1)->where('id',$id)->value('is_edited');
      if($isEdited==1)
      {
        return response()->json(['status' => 'You did not edit the plan'
      ],200);
      }
      else
      {
      $customDietPlanMeals=CustomDietPlanMeals::find($id);
      $customDietPlanMeals->title=$request->input('title');
      $customDietPlanMeals->time=$request->input('time');
      $result=$customDietPlanMeals->update();
      if($result)
      {
          $results= CustomDietPlanMeals::select('*')->where('id',$customDietPlanMeals->id)->get();
          return response()->json(['status' => 'Diet Plan Meal Data Updated Successfully ',   'data' =>  $results
      ],200);
}
}}

/**
     * update_diet_plan_meal_dishes api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_diet_plan_meal_dishes(Request $request, $id)
    {    
      $isEdited= CustomDietPlans::select('is_edited')->where('status',1)->where('id',$id)->value('is_edited');
      if($isEdited==1)
      {
        return response()->json(['status' => 'You did not edit the plan'
      ],200);
      }
      else
      {
      $customDietPlanMealDishes=CustomDietPlanMealDishes::find($id);
      $customDietPlanMealDishes->name=$request->input('name');
      $customDietPlanMealDishes->meal_id=$request->input('meal_id');
      $customDietPlanMealDishes->quantity=$request->input('quantity');
      $customDietPlanMealDishes->description=$request->input('description');
      $customDietPlanMealDishes->weight=$request->input('weight');
      if(request()->hasFile('image')){
        $coverimg= $request->file('image')->getClientOriginalName();
        $customDietPlanMealDishes->image = $request->file('image')->storeAs('diet_plans_dishes_cover_images', $coverimg ,'public');
        }
      $customDietPlanMealDishes->protein=$request->input('protein'); $customDietPlanMealDishes->calories=$request->input('calories');
      $customDietPlanMealDishes->fat=$request->input('fat');
      $customDietPlanMealDishes->carbohydrates=$request->input('carbohydrates');
      $customDietPlanMealDishes->caution=$request->input('caution');
      $result=$customDietPlanMealDishes->update();
      if($result)
      {
         //Sum PFCC values of dishes
         $protein= CustomDietPlanMealDishes::select('protein')->where('meal_id',$request->input('meal_id'))->sum('protein');
         $fat= CustomDietPlanMealDishes::select('fat')->where('meal_id',$request->input('meal_id'))->sum('fat');
         $calories= CustomDietPlanMealDishes::select('calories')->where('meal_id',$request->input('meal_id'))->sum('calories');
         $carbohydrates= CustomDietPlanMealDishes::select('carbohydrates')->where('meal_id',$request->input('meal_id'))->sum('carbohydrates');
 
         //Update PFCC values in meal table 
         $updateTotalProtein = CustomDietPlanMeals::where('id',$request->input('meal_id'))->update(['total_protein' =>  $protein]);
         $updateTotalFat = CustomDietPlanMeals::where('id',$request->input('meal_id'))->update(['total_fat' =>  $fat]);
         $updateTotalCalories = CustomDietPlanMeals::where('id',$request->input('meal_id'))->update(['total_calories' => $calories]);
         $updateTotalCarbohydrates = CustomDietPlanMeals::where('id',$request->input('meal_id'))->update(['total_carbohydrates' => $carbohydrates]);
 
 
         //Sum PFCC values of meals
         $detailId= CustomDietPlanMeals::select('detail_id')->where('id',$request->input('meal_id'))->value('detail_id');
         $mealProtein= CustomDietPlanMeals::select('total_protein')->where('detail_id',$detailId)->sum('total_protein');
         $mealFat= CustomDietPlanMeals::select('total_fat')->where('detail_id',$detailId)->sum('total_fat');
         $mealCalories= CustomDietPlanMeals::select('total_calories')->where('detail_id',$detailId)->sum('total_calories');
         $mealCarbohydrates= CustomDietPlanMeals::select('total_carbohydrates')->where('detail_id',$detailId)->sum('total_carbohydrates');
 
          //Update PFCC values in day table 
         $updateTotalProtein = CustomDietPlanDay::where('id', $detailId)->update(['total_protein' =>  $mealProtein]);
         $updateTotalFat = CustomDietPlanDay::where('id',$detailId)->update(['total_fat' =>  $mealFat]);
         $updateTotalCalories = CustomDietPlanDay::where('id',$detailId)->update(['total_calories' => $mealCalories]);
         $updateTotalCarbohydrates = CustomDietPlanDay::where('id',$detailId)->update(['total_carbohydrates' => $mealCarbohydrates]);
 
        //Sum PFCC values of days
        $planId= CustomDietPlanDay::select('plan_id')->where('id',$detailId)->value('plan_id');
        $dayProtein= CustomDietPlanDay::select('total_protein')->where('plan_id',$planId)->sum('total_protein');
        $dayFat= CustomDietPlanDay::select('total_fat')->where('plan_id',$planId)->sum('total_fat');
        $dayCalories= CustomDietPlanDay::select('total_calories')->where('plan_id',$planId)->sum('total_calories');
        $dayCarbohydrates= CustomDietPlanDay::select('total_carbohydrates')->where('plan_id',$planId)->sum('total_carbohydrates');
 
           //Update PFCC values in plan table 
           $updateTotalProtein = CustomDietPlans::where('id', $planId)->update(['total_protein' =>  $dayProtein]);
           $updateTotalsFat = CustomDietPlans::where('id',$planId)->update(['total_fat' =>  $dayFat]);
           $updateTotalCalories = CustomDietPlans::where('id',$planId)->update(['total_calories' => $dayCalories]);
           $updateTotalCarbohydrates = CustomDietPlans::where('id',$planId)->update(['total_carbohydrates' => $dayCarbohydrates]);
 
          $results= CustomDietPlanMealDishes::select('*')->where('id',$customDietPlanMealDishes->id)->get();
          return response()->json(['status' => 'Diet Plan Meal Dish Data Updated Successfully ',   'data' =>  $results
      ],200);
}
}
    }


/**
     * Remove the Diet Plan from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_diet_plan($id)
    {
         $deleteDietPlan= CustomDietPlans::select('*')->where('id',$id)->delete();
         $customDietPlanDayid= CustomDietPlanDay::select('id')->where('plan_id',$id)->pluck('id');
        $customDietPlanMealsid= CustomDietPlanMeals::select('id')->whereIn('detail_id',$customDietPlanDayid)->pluck('id');
        $deleteDietPlanDays= CustomDietPlanDay::select('*')->where('plan_id',$id)->delete();
        $deleteDietPlanMeals= CustomDietPlanMeals::select('*')->whereIn('detail_id',$customDietPlanDayid)->delete();
       $deleteDietPlanMealDishes= CustomDietPlanMealDishes::select('*')->whereIn('meal_id',$customDietPlanMealsid)->delete();
       return response()->json(['status' => 'Diet Plan Deleted Successfully!'
       ],200);

}
/**
     * Remove the Diet Plan Meal from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_diet_plan_meal($id)
    { 
       $detailId= CustomDietPlanMeals::select('detail_id')->where('id',$id)->value('detail_id');
      $deleteDietPlanMeals= CustomDietPlanMeals::select('*')->where('id',$id)->delete();
       $deleteDietPlanMealDishes= CustomDietPlanMealDishes::select('*')->where('meal_id',$id)->delete();

             //Sum PFCC values of meals
             $mealProtein= CustomDietPlanMeals::select('total_protein')->where('detail_id',$detailId)->sum('total_protein');
             $mealFat= CustomDietPlanMeals::select('total_fat')->where('detail_id',$detailId)->sum('total_fat');
             $mealCalories= CustomDietPlanMeals::select('total_calories')->where('detail_id',$detailId)->sum('total_calories');
             $mealCarbohydrates= CustomDietPlanMeals::select('total_carbohydrates')->where('detail_id',$detailId)->sum('total_carbohydrates');
     
              //Update PFCC values in day table 
             $updateTotalProtein = CustomDietPlanDay::where('id', $detailId)->update(['total_protein' =>  $mealProtein]);
             $updateTotalFat = CustomDietPlanDay::where('id',$detailId)->update(['total_fat' =>  $mealFat]);
             $updateTotalCalories = CustomDietPlanDay::where('id',$detailId)->update(['total_calories' => $mealCalories]);
             $updateTotalCarbohydrates = CustomDietPlanDay::where('id',$detailId)->update(['total_carbohydrates' => $mealCarbohydrates]);
     
            //Sum PFCC values of days
            $planId= CustomDietPlanDay::select('plan_id')->where('id',$detailId)->value('plan_id');
            $dayProtein= CustomDietPlanDay::select('total_protein')->where('plan_id',$planId)->sum('total_protein');
            $dayFat= CustomDietPlanDay::select('total_fat')->where('plan_id',$planId)->sum('total_fat');
            $dayCalories= CustomDietPlanDay::select('total_calories')->where('plan_id',$planId)->sum('total_calories');
            $dayCarbohydrates= CustomDietPlanDay::select('total_carbohydrates')->where('plan_id',$planId)->sum('total_carbohydrates');
     
               //Update PFCC values in plan table 
               $updateTotalProtein = CustomDietPlans::where('id', $planId)->update(['total_protein' =>  $dayProtein]);
               $updateTotalsFat = CustomDietPlans::where('id',$planId)->update(['total_fat' =>  $dayFat]);
               $updateTotalCalories = CustomDietPlans::where('id',$planId)->update(['total_calories' => $dayCalories]);
               $updateTotalCarbohydrates = CustomDietPlans::where('id',$planId)->update(['total_carbohydrates' => $dayCarbohydrates]);
       return response()->json(['status' => 'Diet Plan Meal Deleted Successfully!'
       ],200);
}
/**
     * Remove the Diet Plan Meal Dish from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_diet_plan_meal_dish($id)
    {      
      $mealId= CustomDietPlanMealDishes::select('meal_id')->where('id',$id)->value('meal_id');
       $deleteDietPlanMealDishes= CustomDietPlanMealDishes::select('*')->where('id',$id)->delete();
        //Sum PFCC values of dishes
        $protein= CustomDietPlanMealDishes::select('protein')->where('meal_id',$mealId)->sum('protein');
        $fat= CustomDietPlanMealDishes::select('fat')->where('meal_id',$mealId)->sum('fat');
        $calories= CustomDietPlanMealDishes::select('calories')->where('meal_id',$mealId)->sum('calories');
        $carbohydrates= CustomDietPlanMealDishes::select('carbohydrates')->where('meal_id',$mealId)->sum('carbohydrates');

        //Update PFCC values in meal table 
        $updateTotalProtein = CustomDietPlanMeals::where('id',$mealId)->update(['total_protein' =>  $protein]);
        $updateTotalFat = CustomDietPlanMeals::where('id',$mealId)->update(['total_fat' =>  $fat]);
        $updateTotalCalories = CustomDietPlanMeals::where('id',$mealId)->update(['total_calories' => $calories]);
        $updateTotalCarbohydrates = CustomDietPlanMeals::where('id',$mealId)->update(['total_carbohydrates' => $carbohydrates]);


        //Sum PFCC values of meals
        $detailId= CustomDietPlanMeals::select('detail_id')->where('id',$mealId)->value('detail_id');
        $mealProtein= CustomDietPlanMeals::select('total_protein')->where('detail_id',$detailId)->sum('total_protein');
        $mealFat= CustomDietPlanMeals::select('total_fat')->where('detail_id',$detailId)->sum('total_fat');
        $mealCalories= CustomDietPlanMeals::select('total_calories')->where('detail_id',$detailId)->sum('total_calories');
        $mealCarbohydrates= CustomDietPlanMeals::select('total_carbohydrates')->where('detail_id',$detailId)->sum('total_carbohydrates');

         //Update PFCC values in day table 
        $updateTotalProtein = CustomDietPlanDay::where('id', $detailId)->update(['total_protein' =>  $mealProtein]);
        $updateTotalFat = CustomDietPlanDay::where('id',$detailId)->update(['total_fat' =>  $mealFat]);
        $updateTotalCalories = CustomDietPlanDay::where('id',$detailId)->update(['total_calories' => $mealCalories]);
        $updateTotalCarbohydrates = CustomDietPlanDay::where('id',$detailId)->update(['total_carbohydrates' => $mealCarbohydrates]);

       //Sum PFCC values of days
       $planId= CustomDietPlanDay::select('plan_id')->where('id',$detailId)->value('plan_id');
       $dayProtein= CustomDietPlanDay::select('total_protein')->where('plan_id',$planId)->sum('total_protein');
       $dayFat= CustomDietPlanDay::select('total_fat')->where('plan_id',$planId)->sum('total_fat');
       $dayCalories= CustomDietPlanDay::select('total_calories')->where('plan_id',$planId)->sum('total_calories');
       $dayCarbohydrates= CustomDietPlanDay::select('total_carbohydrates')->where('plan_id',$planId)->sum('total_carbohydrates');

          //Update PFCC values in plan table 
          $updateTotalProtein = CustomDietPlans::where('id', $planId)->update(['total_protein' =>  $dayProtein]);
          $updateTotalsFat = CustomDietPlans::where('id',$planId)->update(['total_fat' =>  $dayFat]);
          $updateTotalCalories = CustomDietPlans::where('id',$planId)->update(['total_calories' => $dayCalories]);
          $updateTotalCarbohydrates = CustomDietPlans::where('id',$planId)->update(['total_carbohydrates' => $dayCarbohydrates]);
       return response()->json(['status' => 'Diet Plan Meal Dish Deleted Successfully!'
       ],200);
}



}