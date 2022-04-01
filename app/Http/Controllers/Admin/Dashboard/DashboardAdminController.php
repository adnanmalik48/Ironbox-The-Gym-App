<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WorkoutPlans;
use App\Models\CustomDietPlans;

class DashboardAdminController extends Controller
{
    public function index()
    {
     //  $wordlist = User::where('id', '<=', $correctedComparisons)->get();
//      $users=User::all();
// $wordCount = $users->count();
// dd($wordCount);
//$traineeCount = User::where('accountStatus','=','1')->where('is_trainee','1')->count();

$trainerCount = User::where('is_trainer','1')->count();
$traineeCount = User::where('is_trainee','1')->count();
$workoutPlansCount = WorkoutPlans::where('status','1')->count();
$dietPlansCount = CustomDietPlans::where('status','1')->count();

        return view('admin.dashboard')->with('trainerCount',$trainerCount)->with('traineeCount',$traineeCount)->with('workoutPlansCount',$workoutPlansCount)->with('dietPlansCount',$dietPlansCount);

    }
}
