<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categories::all();
        return view('admin.app_categories.categories-main')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
         return view('admin.app_categories.add-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'cover_img' => ['required','mimes:png,jpeg,jpg','max:5000'],
        ]);
        $categories=new Categories();
        $categories->name=ucfirst($request->input('name'));
        $categories->status=$request->input('status');

   if(request()->hasFile('cover_img')){
        $cover_img= $request->file('cover_img')->getClientOriginalName();
        $categories->cover_img = $request->file('cover_img')->storeAs('cover_img', $cover_img ,'public');
    }
        $result=$categories->save();  
       
            return redirect('/categories')->with('status','Category created successfully!')  ->with('statuscode','success');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $categories=Categories::findOrFail($id);
         
        // return view('admin.app_categories.show-category')->with('categories',$categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
        $categories=Categories::findOrFail($id);
        return view('admin.app_categories.edit-category', compact('categories'));	
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
    

    if($request->input('name')!="")
    {
        $this->validate($request, [
        'name' => [ 'string', 'max:255'],
        'status' => [ 'string', 'max:255'],
        'cover_img' => ['sometimes','mimes:png,jpeg,jpg','max:5000'],
    ]);
    $categories=Categories::find($id);
    $categories->name=ucfirst($request->input('name'));
    $categories->status=$request->input('status');

if(request()->hasFile('cover_img')){
    $cover_img= $request->file('cover_img')->getClientOriginalName();
    $categories->cover_img = $request->file('cover_img')->storeAs('cover_img', $cover_img ,'public');
}
        $categories->update();
        return redirect('/categories')->with('status','Your Data Is Updated Successfully!') ->with('statuscode','success');   ;
       }

       else
       {
        if($request->input('updateStatusvalue')==1 )
        {  
            $categories=Categories::find($id);
          $categories->status="0";
          $categories->update();
          
          return redirect('/categories')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
        }
      else if($request->input('updateStatusvalue')==0 )
      {  
          $categories=Categories::find($id);
          $categories->status="1";
          $categories->update();
        
        return redirect('/categories')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
      }
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
        // $categories=Categories::findOrFail($id);
        // $categories->delete();

        // return redirect('/categories')->with('status','Your Data Is Deleted Successfully!')->with('statuscode','error');
    }
}
