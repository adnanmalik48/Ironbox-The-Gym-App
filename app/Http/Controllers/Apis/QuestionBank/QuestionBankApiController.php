<?php

namespace App\Http\Controllers\Apis\QuestionBank;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainerQuestions;
use App\Models\QuestionBank;
use App\Models\User;

class QuestionBankApiController extends Controller
{
     /**
     * Trainer Question POST Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function trainer_questions(Request $request)
    {
        $trainerQuestions= TrainerQuestions::create([ 
            'trainer_id' => $request->input('trainer_id'),
            'question_id' => $request->input('question_id'),
            'optional' =>   $request->input('optional')
        ]);
    $updateStatus = User::where('id',  $trainerQuestions->trainer_id)->update(['questionare_status' => 1]);       

    $trainerQuestion=TrainerQuestions::select('*')->where('id',  $trainerQuestions->id)->get();
 
    return response()->json(['status' => 'Trainers Question Added Successfully!',   'data' =>  $trainerQuestion
    ],200);
}
  /**
     * All Trainer Question GET Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function trainer_all_questions($trainer_id,$category)
    {
   
    $trainerQuestions=TrainerQuestions::select('question_id')->where('trainer_id',  $trainer_id)->pluck('question_id');
 
   $questionBank=QuestionBank::select('*')->where('status', 1)->where('category', $category)->whereNotIn('id',  $trainerQuestions)->with(['options'])->get();
 
    return response()->json(['status' => 'Questions Fetched Successfully!',   'data' =>  $questionBank
    ],200);
}
  /**
     * All Question GET Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function all_questions($category)
    {
   $questionBank=QuestionBank::select('*')->where('category', $category)->where('status', 1)->with(['options'])->get();
 
    return response()->json(['status' => 'Questions Fetched Successfully!',   'data' =>  $questionBank
    ],200);
}
  /**
     * Delete Question GET Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete_trainer_question($id)
    {
     $trainerId=TrainerQuestions::select('trainer_id')->where('id', $id)->value('trainer_id');
    TrainerQuestions::where('id', $id)->delete();
    $trainerQuestions=TrainerQuestions::select('*')->where('trainer_id', $trainerId)->get();
    if($trainerQuestions->isEmpty())
    {
        $updateStatus = User::where('id',  $trainerId)->update(['questionare_status' => 0]);    
    }
    return response()->json(['status' => 'Questions Deleted Successfully!'
    ],200);

}
  /**
     * All Trainer Questions GET Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_trainer_questions($trainer_id)
    {
        $trainerQuestions=TrainerQuestions::select('*')->with(['questions'])->where('trainer_id',  $trainer_id)->get();
        
    return response()->json(['status' => 'Questions Fetched Successfully!',   'data' =>  $trainerQuestions
],200);
}
/**
     * All Trainer  GET Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_trainers($category)
    {
        $trainers= User::with(['ratings'])->select('*')->where([['accountStatus',1],['is_trainer',  1],['questionare_status',  1],['specialisation_category',  $category]])->get();
        
    return response()->json(['status' => 'All Trainers Fetched Successfully!',   'data' =>  $trainers
],200);
}
  /**
     * Delete Question from list GET Api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete_trainers_question($trainer_id,$question_id)
    {
    $trainerQuestions = TrainerQuestions::where('trainer_id', $trainer_id)->where('question_id', $question_id)->delete();
    $trainerQuestions=TrainerQuestions::select('*')->where('trainer_id', $trainer_id)->get();
    if($trainerQuestions->isEmpty())
    {
        $updateStatus = User::where('id',  $trainer_id)->update(['questionare_status' => 0]);    
    }
    return response()->json(['status' => 'Questions Deleted Successfully!'
    ],200);
}

}