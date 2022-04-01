@extends('layouts.master')

@section('title')
   Add User Information | Iron Box
@endsection



@section('content')


<div class="row">

          <div class="col-md-12">
  
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> EDIT CALORIE INFORMATION
                <a href="{{route('workoutplans_calories.index')}}" class="btn btn-primary btn-sm float-right"  >Back</a>
                </h4>
              </div>
              <div class="card-body">
              <form action="/workoutplans_calories/{{$workoutplansCalories->id}}" method="POST" enctype="multipart/form-data">
        @csrf
         {{method_field('PUT')}}
                        <div class="form-group row">

            <div class="col-md-6">
                   <label for="lower_weight" style="color:black;" class="control-label mb-1">{{ __('Lower Weight') }}</label>
                   <input id="lower_weight" type="number" class="form-control @error('lower_weight') is-invalid @enderror" name="lower_weight" value="{{$workoutplansCalories->lower_weight}}" required autocomplete="lower_weight" autofocus>
                       @error('lower_weight')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
              
                   <div class="col-md-6">
                   <label for="upper_weight" style="color:black;"  class="control-label mb-1">{{ __('Upper Weight') }}</label>
                   <input id="upper_weight" type="number" class="form-control @error('upper_weight') is-invalid @enderror"  name="upper_weight" required value="{{$workoutplansCalories->upper_weight}}"  autocomplete="upper_weight" autofocus>

                       @error('upper_weight')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-12" style="margin-top:10px;">
                  
                   <label for="base_candidate" style="color:black; font-size:15px; font-weight:500;" class="control-label mb-1">{{ __('Is this base candidate?') }}</label>
                   @if($workoutplansCalories->base_candidate ==1)   

                   <input id="base_candidate" value="1" checked style="display: inline;  width: 9%;" type="checkbox" class="form-control @error('base_candidate') is-invalid @enderror" name="base_candidate"  >

                      @else
                      
                      <input id="base_candidate" value="1"  style="display: inline;  width: 9%;" type="checkbox" class="form-control @error('base_candidate') is-invalid @enderror" name="base_candidate"  >
    
                    @endif
                
                   </div>
                   @if($workoutplansCalories->base_candidate ==1 ||$workoutplansCalories->calories =="0")   
                   <div class="input-group col-md-4 " >
        <div class="input-group-prepend">
          <select name="sign" style="font-size:20px;"  id="sign"  >
          
           <option style="font-size:20px;" value="+">+</option>
       <option style="font-size:20px;" value="-">-</option>
               </select>
               <input id="calories"  type="number" class="form-control @error('calories') is-invalid @enderror" name="calories"  value="{{$workoutplansCalories->calories}}" placeholder="Burn/Gain Calories"  autocomplete="calories" autofocus>

@error('calories')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div></div>

@else
                  
                   <div class="input-group col-md-4 " id="main-notice">
  <div class="input-group-prepend">
  <select name="sign" style="font-size:20px;" id="sign" >

  <option value="{{substr($workoutplansCalories->calories, 0, 1)}}" hidden>{{substr($workoutplansCalories->calories, 0, 1)}}</option>
           <option style="font-size:20px;" value="+">+</option>
       <option style="font-size:20px;" value="-">-</option>
               </select>
               <input id="calories" type="number" class="form-control @error('calories') is-invalid @enderror" name="calories"  
               value="{{substr($workoutplansCalories->calories,strpos($workoutplansCalories->calories, " ") + 1)}}" placeholder="Burn/Gain Calories"  autocomplete="calories" autofocus>

@error('calories')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div></div> @endif

               
<div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> Update</button>
</div>
               </div>
                       
                    </form>
                
                </div>
            </div>
          </div>
          
        </div>
        @endsection

@section('scripts')
<script>



const targetDiv = document.getElementById("main-notice");
const btn = document.getElementById("base_candidate");

btn.onclick = function () {
  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "none";
  } else {
    targetDiv.style.display = "block";
  }


};
</script>

@endsection