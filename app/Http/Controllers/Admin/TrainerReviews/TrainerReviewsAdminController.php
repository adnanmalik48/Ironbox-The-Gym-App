<?php

namespace App\Http\Controllers\Admin\TrainerReviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainerReviews;
use App\Models\User;

class TrainerReviewsAdminController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $users= User::select('*')->where('is_trainer',"1")->where('accountStatus',"1")->get();
        return view('admin.trainer_reviews.review-main')->with('users',$users);
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
       
        $result= TrainerReviews::with(['user'])->select('*')->where('review_for',$id)->get();
        $request->session()->put('trainer_reviews_id', $id);

        return view('admin.trainer_reviews.show-review')->with('result',$result);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
         $trainerReviews= TrainerReviews::select('*')->with(['user'])->where('id',$id)->get();
        $review_details=TrainerReviews::findOrFail($id);
        return view('admin.trainer_reviews.show-detail-review')->with('review_details',$review_details)->with('trainerReviews',$trainerReviews);
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviewid=TrainerReviews::findOrFail($id);
        $reviewid->delete();

        return redirect('/reviewed_trainers')->with('status','Your Review Is Deleted Successfully!')->with('statuscode','error');
    }
}
