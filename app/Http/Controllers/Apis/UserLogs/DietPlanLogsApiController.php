<?php

namespace App\Http\Controllers\Apis\UserLogs;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\UserLogs;
use App\Models\CustomDietPlanMealDishes;

class DietPlanLogsApiController extends Controller
{


/**
     * workout auto loggging api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_diet_meal_logs(Request $request)
    {

      $mealLogData=CustomDietPlanMealDishes::select('*')->where('meal_id', $request->input('meal_id'))->get();

     foreach($mealLogData as $log) {
      $logMealId=UserLogs::select('*')->where('meal_id',$log->id)->get();

        if(!$logMealId->isEmpty())
        {
          return response()->json(['status' => 'Already Log Mapped'
        ],200);
        }
        else
        {

            $userLogs=new UserLogs();
            $userLogs->protein_gain=$log->protein;
            $userLogs->cal_gain=$log->calories;
            $userLogs->fat_gain=$log->fat;
            $userLogs->carbohydrates_gain=$log->carbohydrates;
            $userLogs->title=$log->name;
            $userLogs->description=$log->description;
            $userLogs->caution=$log->caution;
            $userLogs->weight=$log->weight;
            $userLogs->quantity=$log->quantity;
            $userLogs->img_url=$log->image;
            $userLogs->meal_id= $request->input('meal_id');
            $userLogs->created_date=$request->input('created_date');
            $userLogs->category_id=$request->input('category_id');
             $userLogs->meal_time=$request->input('meal_time');
            $userLogs->user_id=$request->input('user_id');
            $userLogs->created_by=$request->input('created_by');

                $result=$userLogs->save();

        }
    
    }
    $result= UserLogs::select('*')->where('id',$userLogs->id)->get();
    if(!$result->isEmpty())
    {  return response()->json(['status' => 'Log Created Successfully',   'data' =>  $result
          ],200);
      }
      else 
      {
          return response()->json(['status' => 'No log created '
      ],404);
      }

  
     }
    
   /**
     * self logging POST Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_diet_self_logs(Request $request)
    {

        $userLogs=new UserLogs();
        $userLogs->protein_gain=$request->input('protein_gain');
        $userLogs->fat_gain=$request->input('fat_gain');
        $userLogs->cal_gain=$request->input('cal_gain');
        $userLogs->carbohydrates_gain=$request->input('carbohydrates_gain');
        $userLogs->title=$request->input('title');
        $userLogs->description=$request->input('description');
        $userLogs->caution=$request->input('caution');
        $userLogs->weight=$request->input('weight');
        $userLogs->quantity=$request->input('quantity');
        if(request()->hasFile('img_url')){
            $img_url= $request->file('img_url')->getClientOriginalName();
            $userLogs->img_url = $request->file('img_url')->storeAs('log_images', $img_url ,'public');
            }

            $userLogs->created_date=$request->input('created_date');
            $userLogs->category_id=$request->input('category_id');
            $userLogs->meal_time=$request->input('meal_time');
            $userLogs->user_id=$request->input('user_id');
            $userLogs->created_by=$request->input('created_by');
            $result=$userLogs->save();
           
      $result= UserLogs::select('*')->where('id',$userLogs->id)->get();
      if(!$result->isEmpty())
      {  return response()->json(['status' => 'Log Created Successfully',   'data' =>  $result
            ],200);
        }
        else 
        {
            return response()->json(['status' => 'No log created '
        ],404);
        }
  
     }
}
