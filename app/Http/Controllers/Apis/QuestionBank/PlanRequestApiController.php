<?php

namespace App\Http\Controllers\Apis\QuestionBank;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestQuestionsAnswers;
use App\Models\PlanRequests;
use App\Models\Contacts;

class PlanRequestApiController extends Controller
{
    
  /**
     * plan request api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function request_plan(Request $request)
    {  

        $planRequest= PlanRequests::create([ 
            'trainer_id' => $request->input('trainer_id'),
            'trainee_id' => $request->input('trainee_id'),
            'status' => $request->input('status'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'created_date' => $request->input('created_date'),
            'payment_status' => $request->input('payment_status')
        ]);


    $answers = $request->input();
        foreach($answers['answers'] as $value) {
            RequestQuestionsAnswers::create([
            'plan_request_id' => $planRequest->id,
            'trainer_question_id' => $value['trainer_question_id'],
            'answer_statement' =>   $value['answer_statement'],
         ]);
        }

        return response()->json(['status' => 'Your Request Submitted Successfully!'
    ],200);
}

  /**
     * All Request GET Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_plan_request($trainer_id)
    {
        $planRequests=PlanRequests::select('*')->with(['trainee'])->with(['answers'])->where('trainer_id',  $trainer_id)->get();
        return response()->json(['status' => 'Requests Fetched Successfully!',   'data' =>  $planRequests
    ],200);
    }
  /**
     * All Request GET Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_trainee_plan_request($trainee_id)
    {
        $planRequests=PlanRequests::select('*')->with(['trainer'])->with(['answers'])->where('trainee_id',  $trainee_id)->get();
        return response()->json(['status' => 'Requests Fetched Successfully!',   'data' =>  $planRequests
    ],200);
    }
    /**
     * Updating request status 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_request_status(Request $request,$request_id)
    {
        $planRequests=PlanRequests::find($request_id);
        $planRequests->status=$request->input('status');
        $planRequests->update();
        $planRequestsStatus=PlanRequests::select('status')->where('id',  $request_id)->value('status');
        if($planRequestsStatus==2)
        {    
            $trainerId=PlanRequests::select('trainer_id')->where('id',  $request_id)->value('trainer_id');
            $traineeId=PlanRequests::select('trainee_id')->where('id',  $request_id)->value('trainee_id');

            $checkContacts= Contacts::select('*')->where('user_id', $trainerId)->where('contact_id', $traineeId)->get();
       
        if (!$checkContacts->isEmpty() ) 
        {
          return response()->json(['status' => 'Already Added']);
        }
        else
        {
               //Adding data in contact table
               $contacts=new Contacts();
               $contacts->user_id=$trainerId;
               $contacts->contact_id=$traineeId;
               $contactresult=$contacts->save();
              
              //Data saved for contacts after switching
               $contactsswap=new Contacts();
               $contactsswap->user_id=$traineeId;
               $contactsswap->contact_id=$trainerId;
               $contactresultswap=$contactsswap->save();

               return response()->json(['status' => 'Requests Status Updated Successfully With Contacts!'
            ],200);
            }
        }
        return response()->json(['status' => 'Requests Status Updated Successfully!'
    ],200);
    }
}
