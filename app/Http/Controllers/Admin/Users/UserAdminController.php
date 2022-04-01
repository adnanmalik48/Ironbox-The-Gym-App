<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRatings;
use App\Models\Notification;


class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $users= User::with(['ratings'])->select('*')->get();
 
        return view('admin.users.users-main')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.add-user');
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
            'username' => ['required', 'string', 'max:255','min:3','unique:users'],
            'usertype' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:13', 'min:13', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'age' => ['required',  'max:255'],
            'gender' => ['required',  'max:255'],
            'height' => ['required',  'max:255'],
            'weight' => ['required',  'max:255'],
            'injury' => [ 'max:255'],
            'medicalBackground' => [ 'max:255'],
            'familyMedicalBackground' => [  'max:255'],
            'specializesIn' => [ 'max:255'],
            'experience' => [ 'max:255'],
            'price' => [ 'max:255'],
            'description' => [ 'max:255'],
            'videoUrl' => [ 'max:255'],
            'avatar' => ['sometimes','mimes:png,jpeg,jpg','max:5000'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        $user=new User();
        $user->name=$request->input('name');
        $user->username=$request->input('username');
        $user->usertype=strtolower($request->input('usertype'));
        $user->phone=$request->input('phone');
        $user->email=$request->input('email');
        $user->age=$request->input('age');
        $user->gender=$request->input('gender');
        $user->height=$request->input('height');
        $user->weight=$request->input('weight');
        $user->injury=$request->input('injury');
        $user->medicalBackground=$request->input('medicalBackground');
        $user->familyMedicalBackground=$request->input('familyMedicalBackground');
        $user->specializesIn=$request->input('specializesIn');
        $user->experience=$request->input('experience');
        $user->description=$request->input('description');
        $user->price=$request->input('price');
        $user->videoUrl=$request->input('videoUrl');
        if( strtolower($request->input('usertype'))=="trainee")
        {
            $user->accountStatus='1';
        }
        else if(strtolower($request->input('usertype'))=="trainer")
        {
            $user->accountStatus='0';
        }
        else if(strtolower($request->input('usertype'))=="admin")
        {
            $user->accountStatus='1';
        }

   if(request()->hasFile('avatar')){
        $avatar= $request->file('avatar')->getClientOriginalName();
        $user->imgUrl = $request->file('avatar')->storeAs('avatars', $avatar ,'public');
    }
       // $user->password=bcrypt($request->input('password'));
        $user->password=Hash::make($request->input('password'));
        $result=$user->save();  
        if($result){
            UserRatings::create([ 
            
                'user_id' => $user->id,
               
            ]);
            $message = $request->input('name').' Has Request You Cost Estimate';
            Notification::create([
                'user_id' => $user->id,
                'is_send' => 2,
                'message' => $message, 
            ]);
            
            return redirect('/users')->with('status','User created successfully!')  ->with('statuscode','success');     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $rating= UserRatings::select('avg_rating')->where('user_id',$id)->value('avg_rating');
       $users=User::findOrFail($id);
       $notify = Notification::select('*')->where('user_id',$id);
       $notify->delete();
       return view('admin.users.show-user')->with('users',$users)->with('rating',$rating);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::findOrFail($id);
        return view('admin.users.edit-user', compact('users'));	
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
             $this->validate($request, [
             'name' => ['required', 'string', 'max:255'],
             'username' => ['required', 'string', 'max:255','min:3'],
             'usertype' => ['required', 'string', 'max:255'],
             'phone' => ['required', 'string', 'max:13', 'min:13'],
             'email' => ['required', 'string', 'email', 'max:255'],
             'age' => ['required',  'max:255'],
             'gender' => ['required',  'max:255'],
             'height' => ['required',  'max:255'],
             'weight' => ['required',  'max:255'],
             'injury' => [ 'max:255'],
             'medicalBackground' => [ 'max:255'],
             'familyMedicalBackground' => [  'max:255'],
             'specializesIn' => [ 'max:255'],
             'experience' => [ 'max:255'],
             'avatar' => ['sometimes','mimes:png,jpeg,jpg','max:5000'],
             // 'password' => ['required', 'min:8', 'confirmed'],
         ]);
             $user=User::find($id);
           
             $user->name=$request->input('name');
             $user->username=$request->input('username');
             $user->usertype=strtolower($request->input('usertype'));
             $user->phone=$request->input('phone');
             $user->email=$request->input('email');
             $user->age=$request->input('age');
             $user->gender=$request->input('gender');
             $user->height=$request->input('height');
             $user->weight=$request->input('weight');
             $user->injury=$request->input('injury');
             $user->medicalBackground=$request->input('medicalBackground');
             $user->familyMedicalBackground=$request->input('familyMedicalBackground');
             $user->specializesIn=$request->input('specializesIn');
             $user->experience=$request->input('experience');
             $user->description=$request->input('description');
             $user->videoUrl=$request->input('videoUrl');
             if( strtolower($request->input('usertype'))=="trainee")
             {
                 $user->accountStatus='1';
             }
             else if(strtolower($request->input('usertype'))=="trainer")
             {
                 $user->accountStatus='0';
             }
             else if(strtolower($request->input('usertype'))=="admin")
             {
                 $user->accountStatus='1';
             }
             if(request()->hasFile('avatar')){
                 $avatar= $request->file('avatar')->getClientOriginalName();
                 $user->imgUrl = $request->file('avatar')->storeAs('avatars', $avatar ,'public');
                 }
                    $user->price=$request->input('price');
                 //$user->accountStatus=$request->input('accountStatus');
             // $user->password=bcrypt($request->input('password'));
             $user->update();
             return redirect('/users')->with('status','Your Data Is Updated Successfully!') ->with('statuscode','success');   ;
           
        }
        else
        {
        if($request->input('updateStatusvalue')==1 )
      {  
          $user=User::find($id);
        $user->accountStatus="0";
        $user->update();
        
        
        return redirect('/users')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
      }
      else if($request->input('updateStatusvalue')==0 )
      {  
          $user=User::find($id);
        $user->accountStatus="1";
        $user->update();
        
        
        return redirect('/users')->with('status','Your Status Is Updated Successfully!') ->with('statuscode','success');   
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
        $users=User::findOrFail($id);
        $users->delete();

        return redirect('/users')->with('status','Your Data Is Deleted Successfully!')->with('statuscode','error');
    }
}
