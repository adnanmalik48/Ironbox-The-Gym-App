<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\RapiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\Ratings\RatingsApiController;
use App\Http\Controllers\ReviewsApiController;
use App\Http\Controllers\Users\UserRatingsApiController;
use App\Http\Controllers\Users\FetchTrainersApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['middleware' => 'auth:sanctum'], function(){
    
// //Apis Authentication

//     });

//Apis without Authentication

//Fetch Base Urls Route
Route::get('fetch_base_urls','App\Http\Controllers\Apis\Urls\BaseUrlsApiController@fetch_base_urls');
//User Registration Api 
Route::get('register_user/{id}','App\Http\Controllers\Apis\Users\UserRegistrationApiController@show');
Route::post('register_user','App\Http\Controllers\Apis\Users\UserRegistrationApiController@store');
Route::post('register_user/{id}','App\Http\Controllers\Apis\Users\UserRegistrationApiController@update');

//Login Api
Route::apiResource('login','App\Http\Controllers\Apis\Users\LoginApiController');

// Trainers Api's
Route::apiResources([
    //Fetch Trainers Api
    'trainers' => 
    'App\Http\Controllers\Apis\Users\FetchTrainersApiController',
     //Fetch User Subcribed Trainers Api
    'subscriptions' =>
    'App\Http\Controllers\Apis\Subscriptions\UserTrainersSubscriptionsApiController',
    //Fetch Subcribed Trainers Api 
    'subscriptions/trainer_id={trainer_id}/trainee_id={trainee_id}/'=>
    'App\Http\Controllers\Apis\Subscriptions\UserTrainersSubscriptionsApiController',
    //User Contacts route
    'contacts'=>
    'App\Http\Controllers\Apis\Contacts\ContactsApiController',
    //User trainer reviews route
    'trainer_reviews'=>
    'App\Http\Controllers\Apis\Users\TrainerReviewsApiController',
    //Trainer User Ratings route
    'user_rating'=>
    'App\Http\Controllers\Apis\Users\UserRatingApiController',

]);

//App categories Routes
//---------------------
Route::apiResources([
    //App Categories route
    'categories' => 
    'App\Http\Controllers\Apis\Categories\CategoriesApiController',
    //Sub Categories route
    'sub_categories' =>
    'App\Http\Controllers\Apis\Categories\SubCategoriesApiController',
    //Child Categories route
    'child_categories'=>
    'App\Http\Controllers\Apis\Categories\ChildCategoriesApiController'

]);

//Workout Plans routes
//---------------------
//Workout plans routes
Route::get('workout_plans/{id}','App\Http\Controllers\Apis\WorkoutPlans\WorkoutPlansApiController@show');

Route::post('workout_plans','App\Http\Controllers\Apis\WorkoutPlans\WorkoutPlansApiController@store');

Route::post('workout_plans/{id}','App\Http\Controllers\Apis\WorkoutPlans\WorkoutPlansApiController@update');
 Route::delete('workout_plans/{id}','App\Http\Controllers\Apis\WorkoutPlans\WorkoutPlansApiController@destroy');

 //Workout plans details routes
Route::apiResources([
    //Workout plans details route
    'workout_plans_details' => 'App\Http\Controllers\Apis\WorkoutPlans\WorkoutPlanDetailsApiController',
    //Workout plans games route
    'workout_plans_games' =>
    'App\Http\Controllers\Apis\WorkoutPlans\WorkoutPlanGamesApiController',
    //Workout plans exercise route
    'workout_plans_exercise'=>
    'App\Http\Controllers\Apis\WorkoutPlans\WorkoutPlanExerciseApiController',
    //User Plan Ratings route
    'plan_ratings' =>
    'App\Http\Controllers\Apis\WorkoutPlans\Ratings\PlanRatingsApiController',
    //User Plan Reviews route
    'plan_reviews'=>
    'App\Http\Controllers\Apis\WorkoutPlans\Reviews\PlanReviewsApiController'

]);
 //Workout plans fetching routes

   //all workout plans api route
   Route::get('all_workout_plans','App\Http\Controllers\Apis\WorkoutPlans\FetchingPlans\FetchWorkoutPlansApiController@all_workout_plans');

    //category wise  workout plans api route
    Route::get('category_workout_plans/{category_id}/','App\Http\Controllers\Apis\WorkoutPlans\FetchingPlans\FetchWorkoutPlansApiController@category_workout_plans');

  //trainer plans  api route
  Route::get('trainer_workout_plans/{trainer_id}/','App\Http\Controllers\Apis\WorkoutPlans\FetchingPlans\FetchWorkoutPlansApiController@trainer_workout_plans');
  
 //day details api route
 Route::get('day_details/plan_id={plan_id}/week_number={week_number}/day_number={day_number}/','App\Http\Controllers\Apis\WorkoutPlans\FetchingPlans\FetchWorkoutPlansApiController@day_details');
 //game details api routes
 Route::get('game_details/{workout_plan_details_id}','App\Http\Controllers\Apis\WorkoutPlans\FetchingPlans\FetchWorkoutPlansApiController@game_details');
 //exercise details api routes
 Route::get('exercise_details/{game_id}','App\Http\Controllers\Apis\WorkoutPlans\FetchingPlans\FetchWorkoutPlansApiController@exercise_details');

//Video Library routes
//---------------------
//video library route
Route::apiResource('video_library/skip={skip}/take={take}/','App\Http\Controllers\Apis\VideoLibrary\VideoLibraryApiController');
//search video library route
Route::post('search_vedio_library','App\Http\Controllers\Apis\VideoLibrary\SearchVedioLibraryApiController@search_vedio_library');


//User Workout Plans  api controllers 
 //storing subscription workout plans api route
 Route::get('user_subscription/plan_id={plan_id}/user_id={user_id}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@store_user_subscription');
 //getting single user workout plans api route
 Route::get('user_subscribed_plans/category_id={category_id}/user_id={user_id}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@user_subscribed_plans');
  //checking user subscription exixts or not api route
  Route::get('check_user_subscription/plan_id={plan_id}/user_id={user_id}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@check_user_subscription');
 //fetching user plans details api route
 Route::get('fetch_user_plans_details/plan_id={plan_id}/week_no={week_no}/day_no={day_no}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@fetch_user_plans_details');
 //fetching user plans games api route
 Route::get('fetch_user_plans_games/{detail_id}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@fetch_user_plans_games');
 //fetching user plans excercises api route
 Route::get('fetch_user_plans_exercises/{game_id}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@fetch_user_plans_exercises');
 //Getting all user workout plans api route
 Route::get('get_user_workoutplans/{user_id}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@get_user_workoutplans');
 //Deletion Trainer workout plans api route
 Route::delete('delete_plan/{id}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@delete_plan');

//Deletion Trainer workout plans api route
Route::delete('reset_user_workoutplan/{user_workoutplan_id}/','App\Http\Controllers\Apis\UserWorkoutPlans\UserWorkoutPlanSubscriptionApiController@reset_user_workoutplan');


//User Logs route
Route::post('store_workout_logs','App\Http\Controllers\Apis\UserLogs\UserLogsApiController@store_workout_logs');
Route::post('store_self_logs','App\Http\Controllers\Apis\UserLogs\UserLogsApiController@store_self_logs');
Route::delete('delete_log/{id}','App\Http\Controllers\Apis\UserLogs\UserLogsApiController@delete_log');
Route::get('fetch_user_logs/user_id={user_id}/date={created_date}/','App\Http\Controllers\Apis\UserLogs\UserLogsApiController@fetch_user_logs')->middleware('auth:api');
Route::patch('update_log_status/{log_id}','App\Http\Controllers\Apis\UserLogs\UserLogsApiController@update_log_status');
Route::patch('update_excercise_status/{exercise_id}','App\Http\Controllers\Apis\UserLogs\UserLogsApiController@update_excercise_status');
Route::post('weeks_auto_map/week_number={week_number}/plan_id={plan_id}/','App\Http\Controllers\Apis\UserLogs\UserLogsApiController@weeks_auto_map');


//Question Bank Routs
//---------------------

//Trainer Question Route
Route::post('trainer_questions','App\Http\Controllers\Apis\QuestionBank\QuestionBankApiController@trainer_questions');
//All Trainer Questions Route
Route::get('trainer_all_questions/trainer_id={trainer_id}/category={category}','App\Http\Controllers\Apis\QuestionBank\QuestionBankApiController@trainer_all_questions');
//All Question Route
Route::get('all_questions/category={category}','App\Http\Controllers\Apis\QuestionBank\QuestionBankApiController@all_questions');
//Delete Trainer Question Route
Route::delete('delete_trainer_question/{id}','App\Http\Controllers\Apis\QuestionBank\QuestionBankApiController@delete_trainer_question');
//Trainer Questions Route
Route::get('trainer_questions/{trainer_id}','App\Http\Controllers\Apis\QuestionBank\QuestionBankApiController@get_trainer_questions');
//Trainers User Fetching Route
Route::get('get_trainers/category={category}','App\Http\Controllers\Apis\QuestionBank\QuestionBankApiController@get_trainers');

//Delete Trainer Question Route From main list
Route::delete('delete_trainer_question/trainer_id={trainer_id}/question_id={question_id}','App\Http\Controllers\Apis\QuestionBank\QuestionBankApiController@delete_trainers_question');

//Plan Request Routes
//-------------------
//Plan request Route
Route::post('request_plan','App\Http\Controllers\Apis\QuestionBank\PlanRequestApiController@request_plan');
//Get request Route for trainer
Route::get('get_plan_request/{trainer_id}','App\Http\Controllers\Apis\QuestionBank\PlanRequestApiController@get_plan_request');
//Get request Route for trainee
Route::get('get_trainee_plan_request/{trainee_id}','App\Http\Controllers\Apis\QuestionBank\PlanRequestApiController@get_trainee_plan_request');
//Update request status route
Route::patch('update_request_status/{request_id}','App\Http\Controllers\Apis\QuestionBank\PlanRequestApiController@update_request_status');

//Diet Plan Routes
//-------------------
//Store Diet Plan Route
Route::post('store_diet_plan','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@store_diet_plan');

//Store Diet Plan day Route
Route::post('store_diet_plan_day','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@store_diet_plan_day');

//Store Diet Plan Meals Route
Route::post('store_diet_plan_meals','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@store_diet_plan_meals');
//Store Diet Plan Meal Dishes Route
Route::post('store_diet_plan_meal_dishes','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@store_diet_plan_meal_dishes');

//Update Diet Plan Route
Route::post('update_diet_plan/{id}','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@update_diet_plan');
//Update Diet Plan Meals Route
Route::post('update_diet_plan_meals/{id}','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@update_diet_plan_meals');
//Update Diet Plan Meal Dishes Route
Route::post('update_diet_plan_meal_dishes/{id}','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@update_diet_plan_meal_dishes');

//Delete Diet Plan Route
Route::delete('delete_diet_plan/{id}','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@delete_diet_plan');
//Delete Diet Plan Meal Route
Route::delete('delete_diet_plan_meal/{id}','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@delete_diet_plan_meal');
//Delete Diet Plan Meal dish Route
Route::delete('delete_diet_plan_meal_dish/{id}','App\Http\Controllers\Apis\DietPlans\CustomDietPlanApiController@delete_diet_plan_meal_dish');

//Feching diet plan Route
Route::get('fetch_diet_plan/{plan_id}','App\Http\Controllers\Apis\DietPlans\FetchCustomDietPlanApiController@fetch_diet_plan');
//Feching diet plan Route
Route::get('fetch_request_diet_plan/{request_id}','App\Http\Controllers\Apis\DietPlans\FetchCustomDietPlanApiController@fetch_request_diet_plan');
//Feching Trainer diet plans Route
Route::get('fetch_trainer_diet_plans/{trainer_id}','App\Http\Controllers\Apis\DietPlans\FetchCustomDietPlanApiController@fetch_trainer_diet_plans');
//Feching Trainee diet plans Route
Route::get('fetch_trainee_diet_plans/{trainee_id}','App\Http\Controllers\Apis\DietPlans\FetchCustomDietPlanApiController@fetch_trainee_diet_plans');
//Feching days of diet plans Route
Route::get('fetch_diet_plan_day/plan_id={plan_id}/week_number={week_number}/day_number={day_number}','App\Http\Controllers\Apis\DietPlans\FetchCustomDietPlanApiController@fetch_diet_plan_day');

//Feching Meals of diet plans Route
Route::get('fetch_diet_plan_meals/{detail_id}','App\Http\Controllers\Apis\DietPlans\FetchCustomDietPlanApiController@fetch_diet_plan_meals');
//Feching Dishs of meal of diet plan Route
Route::get('fetch_meal_dishs/{meal_id}','App\Http\Controllers\Apis\DietPlans\FetchCustomDietPlanApiController@fetch_meal_dishs');


//Food Library Apis

//Feching food liabary data route
Route::get('fetch_food_library','App\Http\Controllers\Apis\FoodLibrary\FoodLibraryApiController@fetch_food_library');

//User Diet Logs route
Route::post('store_diet_self_logs','App\Http\Controllers\Apis\UserLogs\DietPlanLogsApiController@store_diet_self_logs');
Route::post('store_diet_meal_logs','App\Http\Controllers\Apis\UserLogs\DietPlanLogsApiController@store_diet_meal_logs');

Route::post('forget_password','App\Http\Controllers\Apis\Users\ResetPasswordApiController@forget_password');

Route::post('reset_password','App\Http\Controllers\Apis\Users\ResetPasswordApiController@reset_password');



