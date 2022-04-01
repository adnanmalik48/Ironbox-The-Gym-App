<?php

namespace App\Http\Controllers\Admin\PlanReviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlanReviews;
use App\Models\WorkoutPlans;
use App\Models\User;

class PlanReviewsAdminController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workoutPlans= WorkoutPlans::select('*')->with(['trainers'])->where('status',"1")->get();
        return view('admin.plan_reviews.review-main')->with('workoutPlans',$workoutPlans);
    }
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $request->session()->put('plan_reviews_id', $id);
        $result= PlanReviews::with(['user'])->select('*')->where('plan_id',$id)->get();
        return view('admin.plan_reviews.show-review')->with('result',$result);
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
         $plans= PlanReviews::with(['user'])->select('*')->with(['plan'])->where('id',$id)->get();
        $review_details=PlanReviews::findOrFail($id);
        return view('admin.plan_reviews.show-detail-review')->with('review_details',$review_details)->with('plans',$plans);
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviewid=PlanReviews::findOrFail($id);
        $reviewid->delete();

        return redirect('/reviewed_plans')->with('status','Your Review Is Deleted Successfully!')->with('statuscode','error');
    }
}
