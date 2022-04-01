<?php

namespace App\Http\Controllers\Admin\TraineeSubscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTrainersSubscriptions;
use App\Models\User;

class UserTrainersSubscriptionsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
      

        $userSubscriptions= UserTrainersSubscriptions::with(['trainers'])->with(['trainees'])->get();
        return view('admin.subscriptions.subscriptions-main')->with('userSubscriptions',$userSubscriptions);

       // $result= TrainerReviews::with(['user'])->select('*')->where('review_for',$id)->get();
       // return view('admin.trainer_reviews.show-review')->with('result',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $trainerid= UserTrainersSubscriptions::select('trainer_id')->where('id',$id)->value('trainer_id');
        // $trainer_name= User::select('name')->where('id',$trainerid)->value('name');
        //  //dd($trainerid);
        //  $traineeid= UserTrainersSubscriptions::select('trainee_id')->where('id',$id)->value('trainee_id');
        //  $trainee_name= User::select('name')->where('id',$traineeid)->value('name');
       
        // $usersubscriptions=UserTrainersSubscriptions::findOrFail($id);
        // return view('admin.subscriptions.show-subscription')->with('usersubscriptions',$usersubscriptions)->with('trainer_name',$trainer_name)->with('trainee_name',$trainee_name)->with('trainerid',$trainerid);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     


        if($request->input('updateStatusvalue')==1 )
        {  
            $UserSubscriptions=UserTrainersSubscriptions::find($id);
          $UserSubscriptions->status="0";
          $UserSubscriptions->update();
          
          return redirect('/subscriptions')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
        }
      else if($request->input('updateStatusvalue')==0 )
      {  
        $UserSubscriptions=UserTrainersSubscriptions::find($id);
          $UserSubscriptions->status="1";
          $UserSubscriptions->update();
        
        return redirect('/subscriptions')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
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
        //
    }
}
