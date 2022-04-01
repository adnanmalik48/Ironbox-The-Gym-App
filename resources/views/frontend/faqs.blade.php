@extends('layouts.frontend')

@section('title')
  Contact Us
@endsection
<style>
.container
{
  padding: 41px;
}
   
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 11px;
  margin: 2px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #000;
    color: white;
}

.accordion:after {
  content: '\002B';
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.main-heading
{
  font-size: 44px;
}
@media screen and (max-width: 426px) {
.main-heading
{
  font-size: 26px;
}
}
</style>

@section('content')
@include('layouts.inc.navbar')
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="main-heading">FAQ'S</h2>

<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>What is the schedule for CrossFit classes?</button>
<div class="panel">
  <p>We have CrossFit classes twice a day. 7am & 7pm. 5 days a week, Monday to Friday. You can join either one of the two slots. Charges are PKR 16,500/- </p>
  <p>
  Location: 186 Y Block Commercial Area, phase 3 DHA, Lahore.</p>
</div>

<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>What are the charges for personal training?</button>
<div class="panel">
  <p>The charges for personal training vary from 15,000Rs  - 18,500Rs.
  </p>
</div>

<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>Do you offer girls only personal training slots?</button>
<div class="panel">
  <p>Women only personal training slots are available in the morning from 10:30am to 1:30pm .
</p>
</div>

<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>What are the membership charges for each branch?</button>
<div class="panel">
  <p>For Askari 11 branch, the membership charges are Rs 10,000 and for Y Block its Rs 5,000.
</p>
</div>
<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>Y Block Timings for Trainers</button>
<div class="panel">
  <p>Ahsan Shehzad</p>
  <p>8Am to 11Am and 5PM to 7PM.</p>
  <p>Waqar Ahmed
  </p>
  <p>
10 AM to 12:30 PM
</p>
  <p>
Khushi
</p>
  <p>
9AM to 10AM | 11AM to 12PM | 12PM to 1PM
</p>
  <p>
Hayyan</p>
  <p>

5Pm to 9Pm
</p>
  <p>
Ahmed Mir
</p>
  <p>
11Am to 1PM | 5Pm to 7PM | 7Pm to 8Pm Cross fit.
</p>
</div>
<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>Askari 11 Timings for Trainers</button>
<div class="panel">
  <p>Afifa:
    </p>
  <p>
5PM to 7PM.
</p>
  <p>
Ali Rauf:
</p>
  <p>
5:30Pm to 8Pm
</p>
  <p>
Amna Cheema:
</p>
  <p>
11:00 AM to 12:30 PM |  6:30 PM to 8:30PM 
</p>
  <p>
Ladies Only Slot :
</p>
  <p>
5:30PM to 6:30Pm
</p>
  <p>
Sidra:
</p>
  <p>
7:30PM to 9:30PM
</p>
  <p>
Namra Nadeem:
</p>
  <p>
7Pm to 9:30PM
</p>
  <p>
Waqar Ahmed:
</p>
  <p>
7PM to 8:30PM
</p>
  <p>
Mustufa:
</p>
  <p>
6:30PM to 8:30PM
</p>
  <p>
Farhan:
</p>
  <p>
4PM to 10PM
</p>
  <p>
Hamza Nadeem:
</p>
  <p>
6PM to 9PM
</p>
</div>
<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>Can you share the details with me for the Askari 11 Branch?</button>
<div class="panel">
  <p><b>GYM</b></p>
  </p>
  <p>
Executive GYM
</p>
  <p>
Ladies GYM
</p>
  <p>
Locker Room/ Shower.
</p>
  <p>
Askari Residents  |  PKR 6500
</p>
  <p>
Non Residents  |  PKR 7500
</p>
  <p>
<b>All Access</b>
</p>
  <p>
To Building Excepts Classes
</p>
  <p>
Askari Residents  |  PKR 8500
</p>
  <p>
Non Residents | PKR 9500
</p>
  <p>
<b>All Access</b>
</p>
  <p>
To Building With classes
</p>
  <p>
Askari Residents  | PKR 13,500
</p>
  <p>
Non Residents | PKR 15000
</p>
  <p>
Cross Fit
</p>
  <p>
Without GYM
</p>
  <p>
Askari Residents  | PKR 6500
</p>
  <p>
Non Residents PKR 7500
</p>
  <p>
<b>Membership Free</b> | PKR 10,000
</p>
  <p>
<b>GYM Facilities</b>
</p>
  <p>
CrossFit 963
</p>
  <p>
Executive GYM
</p>
  <p>
Ladies Gym
</p>
  <p>
Kids Area (Indoor)
</p>
  <p>
Cafeteria
</p>
  <p>
Shower/Changing Room/ Lockers
</p>
  <p>
Suana
</p>
  <p>
Yoga
</p>
</div>
<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>Can you share information about your packages?</button>
<div class="panel">
  <p><b>CROSSFIT 963</b></p>
<p>
7AM | <b>PKR 16,500</b>
</p>
  <p>
Personalised Group
</p>
  <p>
<b>Training Charges:</b>
</p>
  <p>
Trainer <b>PKR 15,500</b>
</p>
  <p>
Senior Trainer <b>PKR 17,500</b>
</p>
  <p>
<b>Personal Training (one on one)</b>
</p>
  <p>
Trainer <b>PKR 22,500 - PKR 2500</b>
</p>
  <p>
Senior Trainer <b>PKR 30,000</b>
</p>
  <p>
Partner Trainer <b>PKR 40,000</b>
</p>
  <p>
  <b>Power Dance  PKR 12,000</b>
</p>
  <p>
6:15 PM  Askari 11</p>
<p>
7PM Y Block
Monday to  Thursday
</p>
  <p><b>Membership Fee</b>
</p>
  <p>
Y Block :<b> PKR  5000</b>
</p>
</div>
<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>Do you offer online classes? If yes, what is the schedule and charges?
</button>
<div class="panel">
  <p>
  </p>
</div>
<button class="accordion"><b style="font-size: 20px; padding:6px;">+</b>Do you offer walk-in clients for both branches?
</button>
<div class="panel">
  <p>No, walk-in clients are only allowed for the Askari 11 branch. The charges for walk-in clients are 7500Rs (Rs.7,500). For the Y Block branch, you need to enroll (register) with a trainer.
  </p>
</div>

</div>
</div>
</div>


@endsection

@section('scripts')
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
@endsection