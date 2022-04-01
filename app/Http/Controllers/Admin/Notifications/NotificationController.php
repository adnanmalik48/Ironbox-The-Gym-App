<?php

namespace App\Http\Controllers\Admin\Notifications;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function checkAdminNotification(Request $request)
    {
        $admin = Auth::user();
       
      //  if($admin->usertype == "admin"){
            $notifications = Notification::where('user_id',$admin->id)->get();
            
            foreach($notifications as $notification){
                if($notification->is_send == 2){
                    $data[] = [
                        'message' => $notification->message,
                        'url' => url( route('users.show',$notification->user_id))
                    ];
               }
               
            }
        // }
        // elseif($admin->user_type == "trainer"){
        //     $notifications = Notification::where('admin_id',$admin->id)->get();
        //     foreach($notifications as $notification){
        //         if($notification->is_send == 1){
        //             $data[] = [
        //                 'message' => $notification->message,
        //                 'url' => url(route('admin.project-request.detail',$notification->id))
        //             ];
        //         }
        //     }
        // }
        return response()->json(['notifications' => $data]);
    }

    public function checkAdminComment(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if($admin->user_type == 1){
            $comments = Comment::where('sender_type',1)->get();
            foreach($comments as $comment){ 
                $data[] = [
                    'text' => $comment->text,
                    'sender_name' => $comment->sender_name,
                    'sender_image_url' => $comment->sender_image_url,
                ];    
            }
        }

        return response()->json(['comments' => $data]);
    }
}
