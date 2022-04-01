<?php

namespace App\Http\Controllers\Apis\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTrainersSubscriptions;
use App\Models\Contacts;
use App\Models\User;
use App\Models\UserRatings;
use Carbon\Carbon;
use App\Models\SubscriptionsHistory;

class UserTrainersSubscriptionsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($trainer_id,$trainee_id)
    {
        $result= UserTrainersSubscriptions::with(['trainers'])->select('*')->where('trainee_id',$trainee_id)->where('trainer_id',$trainer_id)->get()->toArray();
       if($result){

        return response()->json(['status' => 'Success' ,   'data' =>  $result],200);
             
          }
          else{
             return response()->json(
                 ['status'=>" Failed"]
                 ,404); 
          }
      // return response()->json(['status' => 'Trainer Already Subscribed'],200);
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
        $validator = \Validator::make($request->all(), [
            'trainer_id' => [ 'string', 'max:255'],
            'trainee_id' => [ 'string', 'max:255'],
            'start_date' => ['string', 'max:255'],
            'end_date' => ['string', 'max:255'],
            'sub_price' => ['string', 'max:255'],
            'status' => ['max:255'],
          
        ]);
        if ($validator->fails())
       {
       return response()->json(
           ['errors'=>$validator->errors()->all()]
           ,500);  
     }
      else{

        $checksubscription= UserTrainersSubscriptions::select('*')->where('trainee_id', $request->trainee_id)->where('trainer_id', $request->trainer_id)->get();
       
        if (!$checksubscription->isEmpty() ) 
        {
          return response()->json(['status' => 'Already Subscribed']);
        }
        else
        { 
        $subscriptions=new UserTrainersSubscriptions();
        $subscriptions->trainer_id=$request->input('trainer_id');
        $subscriptions->trainee_id=$request->input('trainee_id');
        $subscriptions->start_date=strtolower($request->input('start_date'));
        $subscriptions->end_date=$request->input('end_date');
        $subscriptions->sub_price=$request->input('sub_price');
        $subscriptions->status=$request->input('status');
        $result=$subscriptions->save();  

           //Adding data in contact table
           $contacts=new Contacts();
           $contacts->user_id=$request->input('trainee_id');
           $contacts->contact_id=$request->input('trainer_id');
           $contactresult=$contacts->save();
          
          //Data saved for contacts after switching
           $contactsswap=new Contacts();
           $contactsswap->user_id=$request->input('trainer_id');
           $contactsswap->contact_id=$request->input('trainee_id');
           $contactresultswap=$contactsswap->save();
      
           if($result){

       return response()->json(['status' => 'Success' ],200);
            
         }
         else{
            return response()->json(
                ['status'=>" Not Success"]
                ,404); 
         }
    }
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     
         $result= UserTrainersSubscriptions::select('trainer_id')->where('trainee_id',$id)->get()->toArray();
       
         $subs= User::select('*')->whereIn('id',   $result)->get();
         $user= UserTrainersSubscriptions::with(['trainers'])->select('*')->where('trainee_id',$id)->get();
        return response()->json(['status' => 'User Trainers Data Fetched',   'data' =>  $user
   ],200);
   
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
        
       
        //Adding data in history table
        $subscriptionsHistory=new SubscriptionsHistory();
        $subscriptionsHistory->trainer_id=UserTrainersSubscriptions::select('trainer_id')->where('id',$id)->value('trainer_id');

        $subscriptionsHistory->trainee_id=UserTrainersSubscriptions::select('trainee_id')->where('id',$id)->value('trainee_id');

        $subscriptionsHistory->start_date=UserTrainersSubscriptions::select('start_date')->where('id',$id)->value('start_date');

        $subscriptionsHistory->end_date=UserTrainersSubscriptions::select('end_date')->where('id',$id)->value('end_date');

        $subscriptionsHistory->sub_price=UserTrainersSubscriptions::select('sub_price')->where('id',$id)->value('sub_price');
       
        $dt = Carbon::now();
        $subscriptionsHistory->unsub_date=$dt->toDateString();

        $result=$subscriptionsHistory->save();  
       

           //Deleting data in contact table
           $trainer_id=UserTrainersSubscriptions::select('trainer_id')->where('id',$id)->value('trainer_id');
           $trainee_id=UserTrainersSubscriptions::select('trainee_id')->where('id',$id)->value('trainee_id');
           $contact_id=Contacts::select('id')->where('user_id',$trainer_id)->where('contact_id',$trainee_id)->value('id');
           $contactResult=Contacts::findOrFail($contact_id);
           $contactResult->delete();

          
          //Data saved for contacts after switching
          $trainer_id=UserTrainersSubscriptions::select('trainer_id')->where('id',$id)->value('trainer_id');
          $trainee_id=UserTrainersSubscriptions::select('trainee_id')->where('id',$id)->value('trainee_id');
          $contactresultswap_id=Contacts::select('id')->where('user_id',$trainee_id)->where('contact_id',$trainer_id)->value('id');
          $contactresultswap=Contacts::findOrFail($contactresultswap_id);
          $contactresultswap->delete();

        $UserSubscription=UserTrainersSubscriptions::findOrFail($id);
        $UserSubscription->delete();
           if($result){

       return response()->json(['status' => 'Success' ],200);
            
         }
         else{
            return response()->json(
                ['status'=>" Not Success"]
                ,404); 
         }
  

    }
}
