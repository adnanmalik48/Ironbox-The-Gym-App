<?php

namespace App\Http\Controllers\Admin\PlanReviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlanReviewers;
use App\Models\User;

class PlanReviewersAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::select('*')->where('is_trainee',"1")->get();
        return view('admin.plan_reviewers.review-main')->with('users',$users);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $request->session()->put('plan_reviewers_id', $id);
        $result= PlanReviewers::with(['plan'])->select('*')->where('user_id',$id)->get();
        return view('admin.plan_reviewers.show-review')->with('result',$result);
    }
  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
         $plans= PlanReviewers::with(['plan'])->select('*')->with(['user'])->where('id',$id)->get();
        $review_details=PlanReviewers::findOrFail($id);
        return view('admin.plan_reviewers.show-detail-review')->with('review_details',$review_details)->with('plans',$plans);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviewid=PlanReviewers::findOrFail($id);
        $reviewid->delete();

        return redirect('/plan_reviewers')->with('status','Your Review Is Deleted Successfully!')->with('statuscode','error');
    }
}
