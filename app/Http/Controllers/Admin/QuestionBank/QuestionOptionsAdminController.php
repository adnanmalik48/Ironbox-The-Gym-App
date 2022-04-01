<?php

namespace App\Http\Controllers\Admin\QuestionBank;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionOptions;

class QuestionOptionsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.question_bank.question_options.add-option');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $questionOptions= QuestionOptions::create([ 
            'question_id'=> request()->session()->get('question_id'),
            'option_statement' => $request->input('option_statement')
        ]);
       
        return redirect('/question_bank/'.request()->session()->get('question_id'))->with('status','Option Added Successfully!')  ->with('statuscode','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questionOptions=QuestionOptions::findOrFail($id);
        return view('admin.question_bank.question_options.edit-option')->with('questionOptions',$questionOptions);
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
        $questionOptions=QuestionOptions::find($id);
        $questionOptions->option_statement=$request->input('option_statement');
        $result=$questionOptions->update();  
       
            return redirect('/question_bank/'.request()->session()->get('question_id'))->with('status','Option Updated Successfully!')  ->with('statuscode','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questionOptions=QuestionOptions::findOrFail($id);
        $questionOptions->delete();
        return redirect('/question_bank/'.request()->session()->get('question_id'))->with('status','Your Option Is Deleted Successfully!')->with('statuscode','error');
    }
}
