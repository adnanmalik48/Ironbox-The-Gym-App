<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;

class SubCategoriesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     $categories=Categories::all();
        $subCategories= SubCategories::select('*')->with(['categories'])->get();
        //$subCategories=SubCategories::all();
        return view('admin.app_categories.sub-categories.sub-categories-main')->with('subCategories',$subCategories)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories=Categories::all();
        // return view('admin.app_categories.sub-categories.add-sub-categories')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $subCategories=new SubCategories();
        $subCategories->name=ucfirst($request->input('name'));
        $subCategories->status=$request->input('status');
        $subCategories->app_categories_id=$request->input('category');
        $result=$subCategories->save();  
        return redirect('/sub-categories')->with('status','Subcategory created successfully!')  ->with('statuscode','success');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
         $categories=Categories::all();
        $subCategories=SubCategories::findOrFail($id);
        return view('admin.app_categories.sub-categories.edit-sub-category', compact('subCategories'))->with('categories',$categories);
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
   
         $subCategories=SubCategories::find($id);
         $subCategories->name=ucfirst($request->input('name'));
         $subCategories->status=$request->input('status');
         $subCategories->app_categories_id=$request->input('category');
          $subCategories->update();
             return redirect('/sub-categories')->with('status','Your Data Is Updated Successfully!') ->with('statuscode','success');   ;
            
        }
        else{
        if($request->input('updateStatusvalue')==1 )
        {  
            $subCategories=SubCategories::find($id);
          $subCategories->status="0";
          $subCategories->update();
          
          return redirect('/sub-categories')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
        }
      else if($request->input('updateStatusvalue')==0 )
      {  
        $subCategories=SubCategories::find($id);
          $subCategories->status="1";
          $subCategories->update();
        
        return redirect('/sub-categories')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
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
        //
    }
}
