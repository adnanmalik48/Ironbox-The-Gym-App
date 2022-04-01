<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes(['verify'=>true]);
Route::get('/fcm','App\Http\Controllers\Controller@index');
Route::get('/send-notification','App\Http\Controllers\Controller@notification');
// Routes Accessing without Admin Login
//Route::get('/','App\Http\Controllers\FrontendController@index')->middleware('verified');

//frontend routes
//home route
Route::get('/','App\Http\Controllers\FrontendController@index');
//faqs route
Route::get('/faqs','App\Http\Controllers\FrontendController@faqs');
//privacy policy route
Route::get('/privacy-policy','App\Http\Controllers\FrontendController@privacy_policy');
//purchase confirmation policy route
Route::get('/purchase-confirmation-policy','App\Http\Controllers\FrontendController@purchase_confirmation_policy');
//return and refund policy route
Route::get('/return-and-refund-policy','App\Http\Controllers\FrontendController@return_and_refund_policy');
//return and refund policy route
Route::get('/cancelation-policy','App\Http\Controllers\FrontendController@cancelation_policy');




// Admin site routes
Auth::routes();
//For symlink on live server for images 
   Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});



//Route::get('/loginsss', 'App\Http\Controllers\FrontendController@indexm')->name('login');

//Auth::routes();


Route::group(['middleware'=>['auth','admin']], function(){
  Route::get('/notification', 'App\Http\Controllers\Admin\Notifications\NotificationController@checkAdminNotification')->name('admin.notification');
    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // });
    Route::get('/dashboard','App\Http\Controllers\Admin\Dashboard\DashboardAdminController@index');

   // Routes Accessing with Admin Login

   //Registered user route
   Route::resource('/users','App\Http\Controllers\Admin\Users\UserAdminController');
   
   //Categories routes
   //------------------
   Route::resources([
    //App Categories route
    '/categories' => 'App\Http\Controllers\Admin\Categories\CategoriesAdminController',
     //Sub Categories route
    '/sub-categories' => 'App\Http\Controllers\Admin\Categories\SubCategoriesAdminController',
    //Child Categories route
    '/child-categories' => 'App\Http\Controllers\Admin\Categories\ChildCategoriesAdminController',
]);
//    //App Categories  route
//    Route::resource('/categories','App\Http\Controllers\Admin\Categories\CategoriesAdminController');
//    //Sub Categories  route
//    Route::resource('/sub-categories','App\Http\Controllers\Admin\Categories\SubCategoriesAdminController');
//   //Child Categories  route
//   Route::resource('/child-categories','App\Http\Controllers\Admin\Categories\ChildCategoriesAdminController');

  

   //Trainer subscriptions routes
   //---------------------------
   Route::resources([
     //User Subscriptions  route
    '/subscriptions' => 'App\Http\Controllers\Admin\TraineeSubscriptions\UserTrainersSubscriptionsAdminController',
    
     //User Subscriptions History  route
     '/subscriptions_history' => 'App\Http\Controllers\Admin\TraineeSubscriptions\SubscriptionsHistoryAdminController',
]);

//Trainer Reviews  route
Route::get('/reviewed_trainers','App\Http\Controllers\Admin\TrainerReviews\TrainerReviewsAdminController@index')->name('reviewed_trainers');
Route::get('/trainer_reviews/{id}','App\Http\Controllers\Admin\TrainerReviews\TrainerReviewsAdminController@show')->name('trainer_reviews');
Route::delete('/trainer_reviews/{id}','App\Http\Controllers\Admin\TrainerReviews\TrainerReviewsAdminController@destroy')->name('trainer_reviews');
Route::get('/trainer_review_detail/{id}','App\Http\Controllers\Admin\TrainerReviews\TrainerReviewsAdminController@details')->name('trainer_review_detail');

//Trainer Reviewers  route
Route::get('/trainer_reviewers','App\Http\Controllers\Admin\TrainerReviews\TrainerReviewersAdminController@index')->name('trainer_reviewers');
Route::get('/trainer_reviewer_reviews/{id}','App\Http\Controllers\Admin\TrainerReviews\TrainerReviewersAdminController@show')->name('trainer_reviewer_reviews');
Route::delete('/trainer_reviewer_reviews/{id}','App\Http\Controllers\Admin\TrainerReviews\TrainerReviewersAdminController@destroy')->name('trainer_reviewer_reviews');
Route::get('/trainer_review_details/{id}','App\Http\Controllers\Admin\TrainerReviews\TrainerReviewersAdminController@details')->name('trainer_review_details');

    //Video Library routes
   //---------------------
   //video library route
   Route::resource('/video_library','App\Http\Controllers\Admin\VideoLibrary\VideoLibraryAdminController');
   
   //Workout Plans routes
   //---------------------
   //Workout Plans routes
   Route::resource('/workout_plans','App\Http\Controllers\Admin\WorkoutPlans\WorkoutPlansAdminController');

   Route::get('/workout_plans_details/{id}','App\Http\Controllers\Admin\WorkoutPlans\WorkoutPlanDetailsAdminController@details')->name('workout_plans_details');

   Route::get('/workout_plans_games/{id}','App\Http\Controllers\Admin\WorkoutPlans\WorkoutPlanDetailsAdminController@games')->name('workout_plans_games');

   Route::get('/workout_plans_exercise/{id}','App\Http\Controllers\Admin\WorkoutPlans\WorkoutPlanDetailsAdminController@exercises')->name('workout_plans_exercise');

   Route::get('/workout_plans_show_exercise/{id}','App\Http\Controllers\Admin\WorkoutPlans\WorkoutPlanDetailsAdminController@show_exercise')->name('workout_plans_show_exercise');
   
//Plan Reviews route
Route::get('/reviewed_plans','App\Http\Controllers\Admin\PlanReviews\PlanReviewsAdminController@index')->name('reviewed_plans');
Route::get('/plan_reviews/{id}','App\Http\Controllers\Admin\PlanReviews\PlanReviewsAdminController@show')->name('plan_reviews');
Route::delete('/plan_reviews/{id}','App\Http\Controllers\Admin\PlanReviews\PlanReviewsAdminController@destroy')->name('plan_reviews');
Route::get('/plan_review_details/{id}','App\Http\Controllers\Admin\PlanReviews\PlanReviewsAdminController@details')->name('plan_review_details');


//Plan Reviewers  route
Route::get('/plan_reviewers','App\Http\Controllers\Admin\PlanReviews\PlanReviewersAdminController@index')->name('plan_reviewers');
Route::get('/reviewer_reviews/{id}','App\Http\Controllers\Admin\PlanReviews\PlanReviewersAdminController@show')->name('reviewer_reviews');
Route::delete('/reviewer_reviews/{id}','App\Http\Controllers\Admin\PlanReviews\PlanReviewersAdminController@destroy')->name('reviewer_reviews');
Route::get('/review_details/{id}','App\Http\Controllers\Admin\PlanReviews\PlanReviewersAdminController@details')->name('review_details');

//Workout plans calories  route
Route::resource('/workoutplans_calories','App\Http\Controllers\Admin\WorkoutplansCalories\WorkoutplansCaloriesAdminController');
   
     //Question Bank routes
   //---------------------
   //question bank route
   Route::resource('/question_bank','App\Http\Controllers\Admin\QuestionBank\QuestionBankAdminController');
     //question options route
     Route::resource('/question_options','App\Http\Controllers\Admin\QuestionBank\QuestionOptionsAdminController');
   //plan request route
    Route::resource('/plan_requests','App\Http\Controllers\Admin\QuestionBank\PlanRequests\PlanRequestsAdminController');

   //Diet plans route
   //--------------------- 
     //Show Diet plans route
     Route::get('/diet_plans','App\Http\Controllers\Admin\DietPlans\CustomDietPlanAdminController@show_plans')->name('diet_plans');
     //Show Diet plan Information route
      Route::get('/show_plan_information/{id}','App\Http\Controllers\Admin\DietPlans\CustomDietPlanAdminController@show_plan_information')->name('show_plan_information');
        //Show Diet plan days route
        Route::get('/diet_plan_days/{id}','App\Http\Controllers\Admin\DietPlans\CustomDietPlanAdminController@diet_plan_days')->name('diet_plan_days');
      //Show Diet plan meals route
      Route::get('/diet_plan_meals/{id}','App\Http\Controllers\Admin\DietPlans\CustomDietPlanAdminController@diet_plan_meals')->name('diet_plan_meals');
       //Show Diet plan dishes route
       Route::get('/diet_plan_meal_dishes/{id}','App\Http\Controllers\Admin\DietPlans\CustomDietPlanAdminController@diet_plan_meal_dishes')->name('diet_plan_meal_dishes');
     //Show Diet plan meals route
     Route::put('/diet_plan_status_update/{id}','App\Http\Controllers\Admin\DietPlans\CustomDietPlanAdminController@diet_plan_status_update')->name('diet_plan_status_update');

       //Food Library routes
   //---------------------
   //Food library route
   Route::get('/food_library','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@show_food_library')->name('index');
   Route::get('/add_food_item','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@add_food_item')->name('add_food_item');
   Route::post('/store_food_category','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@store_food_category')->name('store_food_category');
   Route::get('/remove_food_category/{id}','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@remove_food_category')->name('remove_food_category');
   Route::post('/add_food_item','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@store_food_item')->name('store_food_item');
   Route::put('/change_status/{id}','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@change_status')->name('change_status');
   Route::delete('/remove_food_item/{id}','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@remove_food_item')->name('remove_food_item');
   Route::get('/edit_food_item/{id}','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@edit_food_item')->name('edit_food_item');
   Route::put('/update_food_item/{id}','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@update_food_item')->name('update_food_item');
   Route::get('/show_food_item/{id}','App\Http\Controllers\Admin\FoodLibrary\FoodLibraryAdminController@show_food_item')->name('show_food_item');
   
    
   
  });
