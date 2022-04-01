<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;
use App\Models\SubscriptionsHistory;
use App\Models\Contacts;
use App\Models\UserTrainersSubscriptions;

class WorkoutCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'workout:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         //subscrption ending on current date
        $today = Carbon::now();
        $date=$today->toDateString();

        $userSubscription = UserTrainersSubscriptions::select('*')->where('end_date', $date)->get();
    
          foreach($userSubscription as $subscription) {
            $subscriptionsHistory=  SubscriptionsHistory::create([ 

                'trainer_id' => $subscription->trainer_id,
                'trainee_id' => $subscription->trainee_id,
                'start_date' =>$subscription->start_date,
                'end_date' => $subscription->end_date,
                'sub_price'=>$subscription->sub_price,
                'unsub_date' => $subscription->end_date
            
              ]);
      //Deleting data in contact table
      $trainer_id=UserTrainersSubscriptions::select('trainer_id')->where('id',$subscription->id)->value('trainer_id');
      $trainee_id=UserTrainersSubscriptions::select('trainee_id')->where('id',$subscription->id)->value('trainee_id');
      $contact_id=Contacts::select('id')->where('user_id',$trainer_id)->where('contact_id',$trainee_id)->value('id');
      $contactResult=Contacts::findOrFail($contact_id);
     $contactResult->delete();
              //Data saved for contacts after switching
          $trainer_id=UserTrainersSubscriptions::select('trainer_id')->where('id',$subscription->id)->value('trainer_id');
          $trainee_id=UserTrainersSubscriptions::select('trainee_id')->where('id',$subscription->id)->value('trainee_id');
          $contactresultswap_id=Contacts::select('id')->where('user_id',$trainee_id)->where('contact_id',$trainer_id)->value('id');
          $contactresultswap=Contacts::findOrFail($contactresultswap_id);
          $contactresultswap->delete();


          $UserSubscription=UserTrainersSubscriptions::findOrFail($subscription->id);
          $UserSubscription->delete();
            }
     
        //workout field
        $user = User::where('id', '>', 0)->update(['workout' =>  '0','calories_burn' =>  '0']);
        $this->info("Your Workout Data Reset Successfully");
    }
}
