<?php

namespace App\Http\Controllers\Apis\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChildCategories;

class ChildCategoriesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  $childCategories= ChildCategories::select('*')->where('status',1)->get();
  return response()->json(['status' => 'Child Categories Data Fetched',   'data' =>  $childCategories
   ],200);

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
        $childCategories= ChildCategories::select('*')->where('status',1)->where('sub_categories_id',$id)->get();
        return response()->json(['status' => 'Child Categories Data Fetched',   'data' =>  $childCategories
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
        //
    }
}
