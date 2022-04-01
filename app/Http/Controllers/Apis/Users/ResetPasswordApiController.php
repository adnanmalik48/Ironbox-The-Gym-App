<?php

namespace App\Http\Controllers\Apis\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\Rules\Password as RulesPassword;

class ResetPasswordApiController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function forget_password(Request $request)
    { 
        $validator = \Validator::make($request->all(), [
           
            'email' => ['required', 'string', 'email', 'max:255'],
           
        ]);
        if ($validator->fails())
       {
       return response()->json(
           ['errors'=>$validator->errors()->all()]
           ,500);  
     }
      else{

        $status=Password::sendResetLink
        (
            $request->only('email')
        );

        if($status)
        {
            return response()->json(
                ['status'=>'Password Reset Link Send']
                ,200);  
        }
 
    }

    
}


 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reset_password(Request $request)
    { 
        $validator = \Validator::make($request->all(), [
           
            'token' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed',RulesPassword::defaults()],
           
        ]);
        if ($validator->fails())
       {
       return response()->json(
           ['errors'=>$validator->errors()->all()]
           ,500);  
     }
      else{

        $status=Password::reset
        (
            $request->only('email','password','password_confirmation','token'),
            function($user) use ($request)
            {
                $user->forceFill([
                 'password'=>Hash::make($request->password),
                //  'remember_token'=>Str::random(60),
                ])->save();
                event(new PasswordReset($user));
            }
        );

        if($status)
        {
            return response()->json(
                ['status'=>'Password Reset Successfully!']
                ,200);  
        }
 
    }

    
}
}
