<?php

namespace App\Http\Controllers\Apis\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRatings;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserRegistrationApiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validator = \Validator::make($request->all(), [
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
            'avatar' => ['sometimes','mimes:png,jpeg,jpg','max:5000'],
            'password' => ['required', 'min:8'],
        ]);
        if ($validator->fails())
       {
       return response()->json(
           ['errors'=>$validator->errors()->all()]
           ,500);  
     }
      else{
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
        $user->specialisation_category=$request->input('specialisation_category');
        $accessToken = $user->createToken('authToken')->accessToken;
        $user->access_token=$accessToken;
        if(request()->hasFile('avatar')){
            $avatar= $request->file('avatar')->getClientOriginalName();
            $user->imgUrl = $request->file('avatar')->storeAs('avatars', $avatar ,'public');
            }
        $user->isPremiumUser=$request->input('isPremiumUser');
        // if(strtolower($request->input('usertype'))=="trainee")
        // {
        //     $user->accountStatus='1';
        // }
        // else if(strtolower($request->input('usertype'))=="trainer")
        // {
        //     $user->accountStatus='0';
        // }
        $user->workout='0';
         $user->is_trainer=$request->input('is_trainer');
         $user->is_trainee=$request->input('is_trainee');
         $user->price=$request->input('price');
         $user->videoUrl=$request->input('videoUrl');
    //    $user->password=bcrypt($request->input('password'));
        $user->password=Hash::make($request->input('password'));
        $result=$user->save();
     if($result){
        UserRatings::create([ 
        
            'user_id' => $user->id,
           
        ]);

        $results= User::with(['ratings'])->select('*')->where('id',$user->id)->get();
 

        return response()->json(['status' => 'User Registetred Successfully',   'data' =>  $results
        ],200);
        
     }
     else{
        return response()->json(
            ['status'=>"User Not registered"]
            ,404); 
     }

    }

    }
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);    
        $result= User::with(['ratings'])->select('*')->where('id',$id)->get();
 

return response()->json(['status' => ' User Data Fetched Successfully',   'data' =>  $result
],200);
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
        $validator = \Validator::make($request->all(), [
        'name' => [ 'string', 'max:255'],
        'username' => ['string', 'max:255','min:3'],
        'usertype' => [ 'string', 'max:255'],
        'phone' => [ 'string', 'max:13', 'min:13'],
        'email' => [ 'string', 'email', 'max:255'],
        'age' => [  'max:255'],
        'gender' => [  'max:255'],
        'height' => [  'max:255'],
        'weight' => [  'max:255'],
        'injury' => [ 'max:255'],
        'medicalBackground' => [ 'max:255'],
        'familyMedicalBackground' => [  'max:255'],
        'specializesIn' => [ 'max:255'],
        'experience' => [ 'max:255'],
        'avatar' => ['sometimes','mimes:png,jpeg,jpg','max:5000']
    ]);
    if ($validator->fails())
   {
    return response([
        'message' => ['errors'=>$validator->errors()->all()]
    ], 500);
  }
  else{
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
        $user->isPremiumUser=$request->input('isPremiumUser');
        $user->is_trainer=$request->input('is_trainer');
        $user->is_trainee=$request->input('is_trainee');
        $user->description=$request->input('description');
        $user->price=$request->input('price');
        $user->videoUrl=$request->input('videoUrl');
        $user->specialisation_category=$request->input('specialisation_category');
        if(request()->hasFile('avatar')){
            $avatar= $request->file('avatar')->getClientOriginalName();
            $user->imgUrl = $request->file('avatar')->storeAs('avatars', $avatar ,'public');
            }
        // if( strtolower($request->input('usertype'))=="trainee")
        // {
        //     $user->accountStatus='1';
        // }
        // else if(strtolower($request->input('usertype'))=="trainer")
        // {
        //     $user->accountStatus='0';
        // }
       
        $result=$user->update();
     if($result){
        $results= User::with(['ratings'])->select('*')->where('id',$user->id)->get();
 

        return response()->json(['status' => 'Data Updated Successfully',   'data' =>  $results
        ],200);
        
   
}
     else{
         return ["result"=>"operation failed"];
     }
    }
    }
}
