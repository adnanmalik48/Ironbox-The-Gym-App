<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\ChildCategories;

class ChildCategoriesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categories::all();
        $subCategories=SubCategories::all();
        $childCategories= ChildCategories::with(['subcategories'])->get();
        //$subCategories=SubCategories::all();
        return view('admin.app_categories.child-categories.child-categories-main')->with('subCategories',$subCategories)->with('childCategories',$childCategories)->with('categories',$categories);
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
        $childCategories=new ChildCategories();
        $childCategories->name=ucfirst($request->input('name'));
        $childCategories->status=$request->input('status');
      
        $subcategories = SubCategories::select('*')->where('name',$request->input('subcategory'))->value('id');
        

        $childCategories->sub_categories_id=$subcategories;
        $result=$childCategories->save();  
        return redirect('/child-categories')->with('status','Subcategory created successfully!')  ->with('statuscode','success');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $subcategories = Category::where('id',$id)->get();
     
        //           return json_encode($subcategories);

                  $subcategories = SubCategories::select('*')->where('app_categories_id',$id)->pluck('name');
                  return response()->json($subcategories);
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
      
        $childcategory= ChildCategories::select('sub_categories_id')->where('id',$id)->value('sub_categories_id');
        $subcategory= SubCategories::select('app_categories_id')->where('id',  $childcategory)->value('app_categories_id');
        $category= Categories::select('name')->where('id',  $subcategory)->value('name');
        $categoryid= Categories::select('id')->where('id',  $subcategory)->value('id');



        $childCategories=ChildCategories::findOrFail($id);
        return view('admin.app_categories.child-categories.edit-child-category', compact('childCategories'))->with('categories',$categories)->with('category',$category)->with('categoryid',$categoryid);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  if($request->input('name')!="")
        { 
           $childCategories=ChildCategories::find($id);
   
           $childCategories->name=ucfirst($request->input('name'));
           $childCategories->status=$request->input('status');
         
           $subcategories = SubCategories::select('*')->where('name',$request->input('subcategory'))->value('id');
           
   
           $childCategories->sub_categories_id=$subcategories;
   
           $childCategories->update();  
           return redirect('/child-categories')->with('status','Your Data Is Updated Successfully!') ->with('statuscode','success');    
            
        }
    

       else
       {     
        if($request->input('updateStatusvalue')==1 )
        {  
          $childCategories=ChildCategories::find($id);
          $childCategories->status="0";
          $childCategories->update();
          
          return redirect('/child-categories')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
        }
      else if($request->input('updateStatusvalue')==0 )
      {  
        $childCategories=ChildCategories::find($id);
          $childCategories->status="1";
          $childCategories->update();
        
        return redirect('/child-categories')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
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
        //
    }
}
