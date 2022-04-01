<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function index()
    {
        return view("firebase");
        
    }
    public function notification(){
        $token = "dZjycHDJgVM:APA91bFr7Zq6Fowgd8Y-7to8GcezVq6WqkYwI5SqbKM0cekp0twxWuu8w2IRS4wHqOLkN6oZIWFWKDpkhoSoWJiejGvuzg3-L-eXa8SIgbQEjrHP7JgfkODpU1_NVCAYI2XXnxZyRG6Z";  
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
        dd($result);
        curl_close( $ch );
    }
}
