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

/* .active:after {
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
<h4 class="card-title"> EXERCISE INFORMATION 
<a href="{{ route('workout_plans_exercise',request()->session()->get('exercise_id')) }}" class="btn btn-primary btn-sm float-right"  > Back</a>
</h4>

      <div class="card-body">
      <h5 class="card-title" >  <span style="font-weight:900;" class=" text-primary">  {{$showWorkoutPlanExercise->name}}</span>

                     
                
</h5>

   
     <p><lable>No of Reps : </lable>{{$showWorkoutPlanExercise->reps}} </p>
     <p><lable>Dxercise Duration: </lable>{{$showWorkoutPlanExercise->duration}}</p>
    
     <p><lable>Exercise Description: </lable>{{$showWorkoutPlanExercise->description}}</p>

     <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{substr($showWorkoutPlanExercise->video_url,strpos($showWorkoutPlanExercise->video_url, "v=") + 2,11)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    
</div>
</div>
</div>


@endsection

@section('scripts')


@endsection