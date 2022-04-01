@extends('layouts.master')
@section('title')
  Show User Information | Iron Box
@endsection
@section('content')
<style>
.card-body lable {
    font-weight: bold;
}
.card .card-header{
    padding: 50px;
}
.card .card-body {
    padding: 20px 0px
}
.text
{
    font-size:15px;
    font-weight: bold;
    font-size:10px;
    display: inline;
    padding: 5px;
    border-radius: 10px;
}
.img
{
    border-radius: 2%; 
    width: 500px; 
    height: 150px;
    
}
.accordion {
  background-color: #2c2c2c;
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin:2px;
}

.active, .accordion:hover {
  background-color: #000;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}
/* 
.active:after {
  content: "\2212";
} */

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title"> PLAN INFORMATION
<a href="{{route('workout_plans.index')}}" class="btn btn-primary btn-sm float-right"  >Back</a>
</h4>

      <div class="card-body">
      <h5 class="card-title" >  <span style="font-weight:900;" class=" text-primary">  {{$workoutPlans->title}}</span>

@if($workoutPlans->status ==0)         
     <p  style="font-weight:900;color:white;   background-color:orange;" class="text"> Inactive 
                @foreach ($workoutPlans->ratings as $rating)
                  <b style="font-size:20px; color:#72aee6; " class="float-right "><i class="fas fa-star"></i> {{substr($rating->avg_rating, 0, 4)}}</b>
                @endforeach 
                </p>     
                          @else
                          <p style="font-weight:900;color:white;   background-color:green;" class="text">Active 
                @foreach ($workoutPlans->ratings as $rating)
                  <b style="font-size:20px; color:#72aee6; " class="float-right "><i class="fas fa-star"></i> {{substr($rating->avg_rating, 0, 4)}}</b>
                @endforeach 
                 </p>       
                         @endif
                     
                
</h5>

     <p><lable>Difficulty Level: </lable>
     @if($workoutPlans->difficulty_level ==1)         
     <span style="color:green"><b>Easy</b></span>@endif
      @if($workoutPlans->difficulty_level ==2)  
      <span style="color:orange"><b>Intermediate</b></span>
      
      @endif
    @if($workoutPlans->difficulty_level ==3)     
    <span style="color:red"><b>Difficult</b></span>
                         @endif
                         </p>
     <p><lable>Plan Duration: </lable>{{$workoutPlans->duration}} weeks</p>
     <p><lable>Muscle Type: </lable>{{$workoutPlans->muscle_type}}</p>
     <p><lable>Plan Price: </lable>{{$workoutPlans->price}}<b> $/-</b> </p>
     <p><lable>Plan Cautions: </lable>{{$workoutPlans->caution}}</p>
     <p><lable>Plan Description: </lable>{{$workoutPlans->description}}</p>

     @foreach ($workoutPlans->trainers as $trainer)
              <p ><lable>Created By: </lable>{{$trainer->name}}</p>
                @endforeach 
     <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{substr($workoutPlans->cover_video,strpos($workoutPlans->cover_video, "v=") + 2,11)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

     
   
     
</div>
</div>
</div>


@endsection

@section('scripts')


@endsection