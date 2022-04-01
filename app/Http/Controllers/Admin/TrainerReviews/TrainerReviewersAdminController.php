<?php

namespace App\Http\Controllers\Admin\TrainerReviews;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainerReviewers;
use App\Models\User;

class TrainerReviewersAdminController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::select('*')->where('is_trainee',"1")->get();
           
            return view('admin.trainer_reviewers.review-main')->with('users',$users);
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $result= TrainerReviewers::with(['user'])->select('*')->where('review_by',$id)->get();
        $request->session()->put('trainer_reviewiers_id', $id);
        return view('admin.trainer_reviewers.show-review')->with('result',$result);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
         $trainerReviewers= TrainerReviewers::select('*')->with(['user'])->where('id',$id)->get();
        $review_details=TrainerReviewers::findOrFail($id);
        return view('admin.trainer_reviewers.show-detail-review')->with('review_details',$review_details)->with('trainerReviewers',$trainerReviewers);
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviewerid=TrainerReviewers::findOrFail($id);
        $reviewerid->delete();

        return redirect('/trainer_reviewers')->with('status','Your Review Is Deleted Successfully!')->with('statuscode','error');
    }
}
