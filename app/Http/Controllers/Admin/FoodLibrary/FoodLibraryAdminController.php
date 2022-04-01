<?php

namespace App\Http\Controllers\Admin\FoodLibrary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodLibrary;
use App\Models\FoodCategories;
use Illuminate\Support\Facades\Auth;

class FoodLibraryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_food_library()
    {   
        $foodLibrary=FoodLibrary::all();
        return view('admin.food_library.food-library-main')->with(['food_category'])->with('foodLibrary',$foodLibrary);  
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_food_item()
    {  $foodLibrary=FoodLibrary::all();
        $foodCategories=FoodCategories::all();
        return view('admin.food_library.add-food-library')->with('foodCategories',$foodCategories);  
    }
 
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_food_category(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255','unique:food_category'],       
        ]);
        if ($validator->fails())
        {
                return redirect('/add_food_item')->with('status','Food Category Must Be Unique!')  ->with('statuscode','error');    
   
      }
       else{
        $foodCategories=new FoodCategories();
        $foodCategories->name=$request->input('name');
        $result=$foodCategories->save();  }
     
            return redirect('/add_food_item')->with('status','Food Category added successfully!')  ->with('statuscode','success');    
    }

        /**
     * Remove food categories fro table 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove_food_category($id)
    {
        $foodCategories=FoodCategories::findOrFail($id);
         $foodCategories->delete();

        return redirect('/add_food_item')->with('status','Food Category Is Deleted Successfully!')->with('statuscode','error');
    }

       /**
     * store food 
     *
     * @return \Illuminate\Http\Response
     */
    public function store_food_item(Request $request)
    {
        
        $foodLibrary=new FoodLibrary();
        $foodLibrary->name=$request->input('name');
        $foodLibrary->quantity=$request->input('quantity');
        $foodLibrary->weight=$request->input('weight');
        $foodLibrary->category_id=$request->input('category');
        $foodLibrary->description=$request->input('description');
        $foodLibrary->caution=$request->input('caution');
        $foodLibrary->protein_gain=$request->input('protein_gain');
        $foodLibrary->fat_gain=$request->input('fat_gain');
        $foodLibrary->calories_gain=$request->input('calories_gain');
        $foodLibrary->carbohydrates_gain=$request->input('carbohydrates_gain');
        $foodLibrary->status=$request->input('status');
        $foodLibrary->added_by=  Auth::user()->id;
        if(request()->hasFile('image')){
            $image= $request->file('image')->getClientOriginalName();
            $foodLibrary->image = $request->file('image')->storeAs('FoodImages', $image ,'public');
        }
        $result=$foodLibrary->save();  
     if($result)
     {
            return redirect('/food_library')->with('status','Food Item added successfully!')  ->with('statuscode','success');    
}

}
/**
     * Update status
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Request $request, $id)
    { 
      
      if($request->input('updateStatusvalue')==1 )
      {  
        $foodLibrary=FoodLibrary::find($id);
        $foodLibrary->status="0";
        $foodLibrary->update();
        
        return redirect('/food_library')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
      }
    else if($request->input('updateStatusvalue')==0 )
    {  
        $foodLibrary=FoodLibrary::find($id);
        $foodLibrary->status="1";
        $foodLibrary->update();
      
      return redirect('/food_library')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
    }
    }
   /**
     * Remove food  fro table 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove_food_item($id)
    {
        $foodLibrary=FoodLibrary::findOrFail($id);
         $foodLibrary->delete();

        return redirect('/food_library')->with('status','Food Item Is Deleted Successfully!')->with('statuscode','error');
    }

       /**
     * edit and updating the food inforamation
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_food_item($id)
    {
        $foodLibrary=FoodLibrary::findOrFail($id);
        $foodCategories=FoodCategories::all();
        return view('admin.food_library.edit-food-library', compact('foodLibrary'))->with('foodCategories',$foodCategories); 
    }

    /**
     * Update the food item
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_food_item(Request $request, $id)
    { 
       $foodLibrary=FoodLibrary::find($id);
       $foodLibrary->name=$request->input('name');
        $foodLibrary->quantity=$request->input('quantity');
        $foodLibrary->weight=$request->input('weight');
        $foodLibrary->category_id=$request->input('category');
        $foodLibrary->description=$request->input('description');
        $foodLibrary->caution=$request->input('caution');
        $foodLibrary->protein_gain=$request->input('protein_gain');
        $foodLibrary->fat_gain=$request->input('fat_gain');
        $foodLibrary->calories_gain=$request->input('calories_gain');
        $foodLibrary->carbohydrates_gain=$request->input('carbohydrates_gain');
        $foodLibrary->status=$request->input('status');
        $foodLibrary->added_by=  Auth::user()->id;
        if(request()->hasFile('image')){
            $image= $request->file('image')->getClientOriginalName();
            $foodLibrary->image = $request->file('image')->storeAs('FoodImages', $image ,'public');
        }
       
        $foodLibrary->update();
        
        return redirect('/food_library')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   

    }

      /**
     * Display the food item
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_food_item($id)
    {
       $foodLibrary=FoodLibrary::find($id);
        return view('admin.food_library.show-food-library')->with(['food_category'])->with('foodLibrary',$foodLibrary);
    }
}
