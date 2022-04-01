<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\WorkoutPlans;
use App\Models\CustomDietPlans;

class FrontendController extends Controller
{
    // protected function index()
    // {
    //     return view('frontend.index');
    // }
    protected function index()
    {
   
        if(Auth::user())
      {
        $trainerCount = User::where('accountStatus','=','1')->where('is_trainer','1')->count();
$traineeCount = User::where('accountStatus','=','1')->where('is_trainee','1')->count();
$workoutPlansCount = WorkoutPlans::where('status','1')->count();
$dietPlansCount = CustomDietPlans::where('status','1')->count();
        return view('admin.dashboard')->with('trainerCount',$trainerCount)->with('workoutPlansCount',$workoutPlansCount)->with('traineeCount',$traineeCount)->with('dietPlansCount',$dietPlansCount);
        ;
      
      }
      else
      {
        // return view('auth.login');
         return view('frontend.index');
      }
    }
    protected function faqs()
    {
      return view('frontend.faqs');
    }
    protected function privacy_policy()
    {
      return view('frontend.privacy-policy');
    }
    protected function purchase_confirmation_policy()
    {
      return view('frontend.purchase-confirmation-policy');
    }  
    protected function return_and_refund_policy()
    {
      return view('frontend.return-and-refund-policy');
    } 
     protected function cancelation_policy()
    {
      return view('frontend.cancelation-policy');
    }

}
