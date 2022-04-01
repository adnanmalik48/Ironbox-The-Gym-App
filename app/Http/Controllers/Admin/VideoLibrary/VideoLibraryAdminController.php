<?php

namespace App\Http\Controllers\Admin\VideoLibrary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoLibrary;

class VideoLibraryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoLibrary=VideoLibrary::all();
        return view('admin.video_library.video-library-main')->with('videoLibrary',$videoLibrary);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video_library.add-video-library');
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
            'description' => ['required'],
            'link' => ['required', 'string', 'max:255','regex:~^(?:https://)(?:m[.])?(?:www[.])?(?:youtube[.]com/watch[?]v=|youtu[.]be/)([^&]{11})
            ~x'],
           
        ]);
  
        $videoLibrary=new VideoLibrary();
        $videoLibrary->name=$request->input('name');
        $videoLibrary->description=$request->input('description');
        $videoLibrary->status=$request->input('status');
        $videoLibrary->link=$request->input('link');
        $result=$videoLibrary->save();  
       
            return redirect('/video_library')->with('status','Vedio Link Created Successfully!')  ->with('statuscode','success');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videoLibrary=videoLibrary::findOrFail($id);
        return view('admin.video_library.show-video-library', compact('videoLibrary'));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videoLibrary=VideoLibrary::findOrFail($id);
        return view('admin.video_library.edit-video-library')->with('videoLibrary',$videoLibrary);
 
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
               'name' => ['required', 'string', 'max:255'],
               'description' => ['required'],
               'link' => ['required', 'string', 'max:255','regex:~^(?:https://)(?:m[.])?(?:www[.])?(?:youtube[.]com/watch[?]v=|youtu[.]be/)([^&]{11})
               ~x'],
               // 'link' => ['required', 'string', 'max:255','regex:~^(?:https://)(?:m[.])?(?:www[.])?(?:youtube[.]com/)([^&]{11})
               // ~x'],
              
           ]);
        
           $videoLibrary=VideoLibrary::find($id);
           $videoLibrary->name=$request->input('name');
           $videoLibrary->description=$request->input('description');
           $videoLibrary->status=$request->input('status');
           $videoLibrary->link=$request->input('link');
           $result=$videoLibrary->update();  
          
               return redirect('/video_library')->with('status','Your Data Updated Successfully!')  ->with('statuscode','success');
           
        }
        else
        {

        if($request->input('updateStatusvalue')==1 )
        {  
            $videoLibrary=VideoLibrary::find($id);
          $videoLibrary->status="0";
          $videoLibrary->update();
          
          return redirect('/video_library')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
        }
      else if($request->input('updateStatusvalue')==0 )
      {  
        $videoLibrary=VideoLibrary::find($id);
          $videoLibrary->status="1";
          $videoLibrary->update();
        
        return redirect('/video_library')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
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
        $videoLibrary=VideoLibrary::findOrFail($id);
        $videoLibrary->delete();

        return redirect('/video_library')->with('status','Your Data Is Deleted Successfully!')->with('statuscode','error');
    }
}
