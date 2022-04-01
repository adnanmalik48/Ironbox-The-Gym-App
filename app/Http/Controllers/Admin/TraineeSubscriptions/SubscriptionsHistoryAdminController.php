<?php

namespace App\Http\Controllers\Admin\TraineeSubscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionsHistory;
use App\Models\User;

class SubscriptionsHistoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::select('*')->where('is_trainee',"1")->get();
           
        return view('admin.subscriptions_history.history-main')->with('users',$users);

    
        
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
        $userSubscriptionsHistory= SubscriptionsHistory::with(['trainers'])->where('trainee_id',$id)->get();
        return view('admin.subscriptions_history.show-history')->with('userSubscriptionsHistory',$userSubscriptionsHistory);

        // $trainerid= SubscriptionsHistory::select('trainer_id')->where('id',$id)->value('trainer_id');
        // $trainer_name= User::select('name')->where('id',$trainerid)->value('name');
        //  //dd($trainerid);
        //  $traineeid= SubscriptionsHistory::select('trainee_id')->where('id',$id)->value('trainee_id');
        //  $trainee_name= User::select('name')->where('id',$traineeid)->value('name');
       
        // $userSubscriptionsHistory=SubscriptionsHistory::findOrFail($id);
        // return view('admin.subscriptions_history.show-history')->with('userSubscriptionsHistory',$userSubscriptionsHistory)->with('trainer_name',$trainer_name)->with('trainee_name',$trainee_name);
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
        //
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
