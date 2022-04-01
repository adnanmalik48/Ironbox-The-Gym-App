@extends('layouts.master')
@section('title')
Edit Question Information | Iron Box
@endsection



@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">EDIT QUESTION
<a href="{{route('question_bank.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
</h4>

    <div class="card-body">
    
    <form action="/question_bank/{{$questionBank->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{method_field('PUT')}}
             
        <div class="form-group row">
            
        <div class="col-md-12">
                   <label for="statement" class="control-label mb-1">{{ __('Question Statement') }}</label>
                   <input id="statement" type="text" class="form-control @error('statement') is-invalid @enderror" name="statement" value="{{$questionBank->statement}}" required autocomplete="statement" autofocus>
                       @error('statement')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   
                  

                   <div class="col-md-6">
                   <label for="status" class="control-label mb-1">{{ __('Status ') }}</label>
                   <div class="form-group">
           <select name="status"  class="form-control"  required>
      

           @if($questionBank->status ==0)         
           <option value="0" hidden>Inactive</option>
                      @else
                      <option value="1" hidden>Active</option>      
                    @endif
           <option value="1">Active</option>
       <option value="0">Inactive</option>
               </select></div>
               @error('status')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror


   </div>
             
              
   <div class="col-md-6">
                   <label for="category" class="control-label mb-1">{{ __('Category ') }}</label>
                   <div class="form-group">
           <select name="category"  class="form-control"  required>
      

           @if($questionBank->category ==1)         
           <option value="1" hidden>Workout</option>
                      @elseif($questionBank->category ==2)  
                      <option value="2" hidden>Diet</option>      
                    @endif
           <option value="1">Workout</option>
       <option value="2">Diet</option>
               </select></div>
               @error('category')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror


   </div>
   
                   
   <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> Update</button>
</div>
                       
                    </div>
               
                    
                </form>
            </div>
</div>

</div>
</div>
</div>


@endsection

@section('scripts')

@endsection