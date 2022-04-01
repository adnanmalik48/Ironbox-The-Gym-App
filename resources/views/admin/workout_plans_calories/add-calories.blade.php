@extends('layouts.master')

@section('title')
   Add User Information | Iron Box
@endsection



@section('content')


<div class="row">

          <div class="col-md-12">
  
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ADD NEW  CALORIE INFORMATION
                <a href="{{route('workoutplans_calories.index')}}" class="btn btn-primary btn-sm float-right"  >Back</a>
                </h4>
              </div>
              <div class="card-body">
        <form method="POST" action="/workoutplans_calories" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">

            <div class="col-md-6">
                   <label for="lower_weight" style="color:black;" class="control-label mb-1">{{ __('Lower Weight') }}</label>
                   <input id="lower_weight" type="number" class="form-control @error('lower_weight') is-invalid @enderror" name="lower_weight" value="{{ old('lower_weight') }}" required autocomplete="lower_weight" autofocus>
                       @error('lower_weight')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
              
                   <div class="col-md-6">
                   <label for="upper_weight" style="color:black;"  class="control-label mb-1">{{ __('Upper Weight') }}</label>
                   <input id="upper_weight" type="number" class="form-control @error('upper_weight') is-invalid @enderror"  name="upper_weight" required value="{{ old('upper_weight') }}"  autocomplete="upper_weight" autofocus>

                       @error('upper_weight')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-12" style="margin-top:10px;">
                  
                   <label for="base_candidate" style="color:black; font-size:15px; font-weight:500;" class="control-label mb-1">{{ __('Is this base candidate?') }}</label>
                   <input id="base_candidate" value="1" style="display: inline; 
    width: 9%;" type="checkbox" class="form-control @error('base_candidate') is-invalid @enderror" name="base_candidate"  >

                   </div>
                  
                   <div class="input-group col-md-4 " id="main-notice">
  <div class="input-group-prepend">
  <select name="sign" style="font-size:20px;" id="sign"  >
          
           <option style="font-size:20px;" value="+">+</option>
       <option style="font-size:20px;" value="-">-</option>
               </select>
               <input id="calories" type="number" class="form-control @error('calories') is-invalid @enderror" name="calories"  value="{{ old('calories') }}" placeholder="Burn/Gain Calories"  autocomplete="calories" autofocus>

@error('calories')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div></div>
                  
               
<div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> Save</button>
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