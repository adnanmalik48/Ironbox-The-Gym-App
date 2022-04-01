<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;
use App\Models\Customer;
use App\Models\MerchantUser;
use App\Models\Merchant;

class FCMController extends Controller
{

    public function sendNotification(String $title, String $payloadBody, Array $additionalData, String $token)
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $notificationBuilder = new PayloadNotificationBuilder($title);
        $notificationBuilder->setBody($payloadBody)->setSound('default');


        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData($additionalData);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();


        $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);

        $downstreamResponse->numberSuccess();
        $downstreamResponse->numberFailure();
        $downstreamResponse->numberModification();

        // return Array - you must remove all this tokens in your database
        $tokensToDelete = $downstreamResponse->tokensToDelete();
        if (count($tokensToDelete) > 0) {
            Customer::whereIn('device_token', $tokensToDelete)->update(['device_token' => NULL]);
        }

        // return Array (key : oldToken, value : new token - you must change the token in your database)
        $tokensToModify = $downstreamResponse->tokensToModify();
        if (count($tokensToModify) > 0) {
            foreach ($tokensToModify as $oldToken => $newToken) {
                if(Customer::where('device_token', $oldToken)->count()){
                    Customer::where('device_token', $oldToken)->update(['device_token' => $newToken]);
                }
            }
        }

        // return Array - you should try to resend the message to the tokens in the array
        $tokensToRetry = $downstreamResponse->tokensToRetry();
        if (count($tokensToRetry) > 0) {
            foreach ($tokensToRetry as $oldToken => $newToken) {
                if(Customer::where('device_token', $oldToken)->count()){
                    Customer::where('device_token', $oldToken)->update(['device_token' => $newToken]);
                }
            }
        }

        // return Array (key:token, value:error) - in production you should remove from your database the tokens
        $downstreamResponse->tokensWithError();
        if($downstreamResponse->numberSuccess() > 0){
            return true;
        }else{
            false;
        }

    }
    
        public function sendNotificationMerchant(String $title, String $payloadBody, Array $additionalData, String $token)
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $notificationBuilder = new PayloadNotificationBuilder($title);
        $notificationBuilder->setBody($payloadBody)->setSound('default');


        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData($additionalData);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();


        $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);

        $downstreamResponse->numberSuccess();
        $downstreamResponse->numberFailure();
        $downstreamResponse->numberModification();

        // return Array - you must remove all this tokens in your database
        $tokensToDelete = $downstreamResponse->tokensToDelete();
        if (count($tokensToDelete) > 0) {
            Merchant::whereIn('device_token', $tokensToDelete)->update(['device_token' => NULL]);
        }

        // return Array (key : oldToken, value : new token - you must change the token in your database)
        $tokensToModify = $downstreamResponse->tokensToModify();
        if (count($tokensToModify) > 0) {
            foreach ($tokensToModify as $oldToken => $newToken) {
                if(Merchant::where('device_token', $oldToken)->count()){
                    Merchant::where('device_token', $oldToken)->update(['device_token' => $newToken]);
                }
            }
        }

        // return Array - you should try to resend the message to the tokens in the array
        $tokensToRetry = $downstreamResponse->tokensToRetry();
        if (count($tokensToRetry) > 0) {
            foreach ($tokensToRetry as $oldToken => $newToken) {
                if(Merchant::where('device_token', $oldToken)->count()){
                    Merchant::where('device_token', $oldToken)->update(['device_token' => $newToken]);
                }
            }
        }

        // return Array (key:token, value:error) - in production you should remove from your database the tokens
        $downstreamResponse->tokensWithError();
        if($downstreamResponse->numberSuccess() > 0){
            return true;
        }else{
            false;
        }

    }
    
    public function sendNotificationDP(String $title, String $payloadBody, Array $additionalData, String $token)
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $notificationBuilder = new PayloadNotificationBuilder($title);
        $notificationBuilder->setBody($payloadBody)->setSound('default');


        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData($additionalData);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();


        $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);

        $downstreamResponse->numberSuccess();
        $downstreamResponse->numberFailure();
        $downstreamResponse->numberModification();

        // return Array - you must remove all this tokens in your database
        $tokensToDelete = $downstreamResponse->tokensToDelete();
        if (count($tokensToDelete) > 0) {
            MerchantUser::whereIn('device_token', $tokensToDelete)->update(['device_token' => NULL]);
        }

        // return Array (key : oldToken, value : new token - you must change the token in your database)
        $tokensToModify = $downstreamResponse->tokensToModify();
        if (count($tokensToModify) > 0) {
            foreach ($tokensToModify as $oldToken => $newToken) {
                if(MerchantUser::where('device_token', $oldToken)->count()){
                    MerchantUser::where('device_token', $oldToken)->update(['device_token' => $newToken]);
                }
            }
        }

        // return Array - you should try to resend the message to the tokens in the array
        $tokensToRetry = $downstreamResponse->tokensToRetry();
        if (count($tokensToRetry) > 0) {
            foreach ($tokensToRetry as $oldToken => $newToken) {
                if(MerchantUser::where('device_token', $oldToken)->count()){
                    MerchantUser::where('device_token', $oldToken)->update(['device_token' => $newToken]);
                }
            }
        }

        // return Array (key:token, value:error) - in production you should remove from your database the tokens
        $downstreamResponse->tokensWithError();
        if($downstreamResponse->numberSuccess() > 0){
            return true;
        }else{
            false;
        }

    }

 }
