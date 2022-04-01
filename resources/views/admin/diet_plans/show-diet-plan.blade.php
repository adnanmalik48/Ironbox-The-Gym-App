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
<h4 class="card-title"> DIET PLAN INFORMATION
<a href="{{route('diet_plans')}}" class="btn btn-primary btn-sm float-right"  ><i class="now-ui-icons arrows-1_minimal-left"></i> BACK</a>
</h4>

      <div class="card-body">
      <h5 class="card-title" >  <span style="font-weight:900;" class=" text-primary">  {{$customDietPlans->title}}</span>

@if($customDietPlans->status ==0)         
     <p  style="font-weight:900;color:white;   background-color:orange;" class="text"> Inactive  </p>     
                          @else
       <p style="font-weight:900;color:white;   background-color:green;" class="text">Active </p>       
                         @endif
</h5>

      @foreach ($customDietPlans->trainees as $trainee)
     <p><lable>Plan Made For: </lable>{{$trainee->name}}</p>
      @endforeach 
     
     <p><lable>Difficulty Level: </lable>
     @if($customDietPlans->difficulty_level ==1)         
     <span style="color:green"><b>Easy</b></span>@endif
      @if($customDietPlans->difficulty_level ==2)  
      <span style="color:orange"><b>Intermediate</b></span>
      
      @endif
    @if($customDietPlans->difficulty_level ==3)     
    <span style="color:red"><b>Difficult</b></span>
                         @endif
                         </p>
     <p><lable>Plan Duration: </lable>{{$customDietPlans->duration}} weeks</p>
     <p><lable>Plan Protein: </lable>{{$customDietPlans->total_protein}} </p>
     <p><lable>Plan Fat: </lable>{{$customDietPlans->total_fat}}  </p>
     <p><lable>Plan Calories: </lable>{{$customDietPlans->total_calories}} kcal</p>
     <p><lable>Plan Carbohydrates: </lable>{{$customDietPlans->total_carbohydrates}} </p>
     <p><lable>Plan Goal: </lable>{{$customDietPlans->goal}}</p>
     <p><lable>Plan Version: </lable>{{$customDietPlans->version}}</p>
     <p><lable>Plan Caution: </lable>{{$customDietPlans->caution}}</p>
     <p><lable>Plan Description: </lable>{{$customDietPlans->description}}</p>

     <img width="950px" height="300px" src="{{asset('storage/'.$customDietPlans->cover_image)}}"/>
     @foreach ($customDietPlans->trainers as $trainer)
     <p><lable>Plan Made By : </lable>{{$trainer->name}}</p>
      @endforeach 
     
</div>
</div>
</div>


@endsection

@section('scripts')


@endsection