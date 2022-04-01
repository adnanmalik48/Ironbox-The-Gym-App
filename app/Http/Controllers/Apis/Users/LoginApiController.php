<?php

namespace App\Http\Controllers\Apis\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRatings;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       
        if (( preg_match("/^(\+?)([0-9] ?){9,20}$/", $request->get('phone')))&& strlen($request->get('phone'))==13 )
        { 
              $user= User::where('phone', $request->phone)->first();
        }
    else if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
               $user= User::where('email', $request->email)->first();
        }
        else{
        $user= User::where('username', $request->username)->first();
    }
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
            $access_token = $user->createToken('authToken')->accessToken;
        //  $access_token = $user->createToken('my-app-token')->plainTextToken;
        
            if (( preg_match("/^(\+?)([0-9] ?){9,20}$/", $request->get('phone')))&& strlen($request->get('phone'))==13 )
            { 
               
           $create_token = User::where('phone', $request->phone)->update(['access_token' => $access_token]);
           $device_token = User::where('phone', $request->phone)->update(['device_token'=>$request->device_token]);
     
        }
        else if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
               
            $create_token = User::where('email', $request->email)->update(['access_token' => $access_token]);
            $device_token = User::where('email', $request->email)->update(['device_token'=>$request->device_token]);
     
        }
      
            else{
         
     $create_token = User::where('username', $request->username)->update(['access_token' => $access_token]);
     $device_token = User::where('username', $request->username)->update(['device_token'=>$request->device_token]);
     
        }

       if( $create_token)
           { 
            $device_token= User::select('device_token')->where('id',$user->id)->value('device_token');
           // dd($device_token);
            $token = $device_token;  
           // $token = "dZjycHDJgVM:APA91bFr7Zq6Fowgd8Y-7to8GcezVq6WqkYwI5SqbKM0cekp0twxWuu8w2IRS4wHqOLkN6oZIWFWKDpkhoSoWJiejGvuzg3-L-eXa8SIgbQEjrHP7JgfkODpU1_NVCAYI2XXnxZyRG6Z";  
            $from = "AAAAqcZl__I:APA91bH4i5kMwXGo2RWpxELvotFF6SIdvx4EYrElfCsBdkBLFjo0yCSQyO_luV6FFhv71MNBZyX1ukI0hX3_OqUuedEDNrOReDDlPP9sOtaUVqL7c6IQadw4VFEUdpeX6jyctLl8TVTJ";
            $msg = array
                  (
                    'body'  => "Testing Testing",
                    'title' => "Hi, From Adnan",
                    'receiver' => 'erw',
                    'icon'  => "https://image.flaticon.com/icons/png/512/270/270014.png",/*Default Icon*/
                    'sound' => 'mySound'/*Default sound*/
                  );
    
            $fields = array
                    (
                        'to'        => $token,
                        'notification'  => $msg
                    );
    
            $headers = array
                    (
                        'Authorization: key=' . $from,
                        'Content-Type: application/json'
                    );
             //#Send Reponse To FireBase Server 
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        //dd($result);
        curl_close( $ch );
     $results= User::with(['ratings'])->select('*')->where('id',$user->id)->get();
     return response()->json(
         ['status' => 'Loged In Successfully',   'data' =>  $results
     ],200);
     
      
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
