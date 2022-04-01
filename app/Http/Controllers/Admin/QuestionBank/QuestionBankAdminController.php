<?php

namespace App\Http\Controllers\Admin\QuestionBank;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionBank;
use App\Models\QuestionOptions;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class QuestionBankAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $questionBank= QuestionBank::select('*')->with(['users'])->get();
        return view('admin.question_bank.question-main')->with('questionBank',$questionBank);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question_bank.add-question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questionBank= QuestionBank::create([ 
            'statement' => $request->input('statement'),
            'status' => $request->input('status'),
            'created_by' =>    Auth::user()->id ,
            'category' => $request->input('category'),
      
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
          
            $questionOptions=  QuestionOptions::create($value);

       $options = QuestionOptions::where('id', $questionOptions->id)->update(['question_id' => $questionBank->id]);
    if($questionOptions->option_statement==null)
    {
        $options = QuestionOptions::where('id', $questionOptions->id)->delete();
    }
        }
      
        return back()->with('success', 'New Question has been added.')->with('status','Your Question Added Successfully!') ->with('statuscode','success');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        request()->session()->put('question_id', $id);
        $questionBank=QuestionBank::findOrFail($id);
        $questionOptions= QuestionOptions::select('*')->where('question_id', $id)->get();
        return view('admin.question_bank.question_options.options-main', compact('questionOptions'));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questionBank=QuestionBank::findOrFail($id);
        return view('admin.question_bank.edit-question')->with('questionBank',$questionBank);
 
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
        if($request->input('statement')!="")
        {
   
       $questionBank=QuestionBank::find($id);
           $questionBank->statement=$request->input('statement');
           $questionBank->status=$request->input('status');
           $questionBank->created_by=Auth::user()->id;
           $questionBank->category=$request->input('category');
           $result=$questionBank->update();  
          
               return redirect('/question_bank')->with('status','Question Updated Successfully!')  ->with('statuscode','success');
   
            
        }
        else
        {
        if($request->input('updateStatusvalue')==1 )
        {  
            $questionBank=QuestionBank::find($id);
          $questionBank->status="0";
          $questionBank->update();
          
          return redirect('/question_bank')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
        }
      else if($request->input('updateStatusvalue')==0 )
      {  
        $questionBank=QuestionBank::find($id);
          $questionBank->status="1";
          $questionBank->update();
        
        return redirect('/question_bank')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
      }}
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $questionBank=QuestionBank::findOrFail($id);
        $questionBank->delete();
        $questionOptions = QuestionOptions::where('question_id', $id)->delete();
        return redirect('/question_bank')->with('status','Your Question Is Deleted Successfully!')->with('statuscode','error');
    }
}
