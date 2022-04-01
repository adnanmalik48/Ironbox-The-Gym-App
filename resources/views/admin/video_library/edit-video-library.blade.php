@extends('layouts.master')
@section('title')
Edit User Information | Iron Box
@endsection



@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">EDIT USER INFORMATION
<a href="{{route('video_library.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
</h4>

    <div class="card-body">
    
    <form action="/video_library/{{$videoLibrary->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{method_field('PUT')}}
             
        <div class="form-group row">
            
        <div class="col-md-6">
                   <label for="name" class="control-label mb-1">{{ __('Video Title') }}</label>
                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$videoLibrary->name}}" required autocomplete="name" autofocus>
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   
           

                   <div class="col-md-6">
                   <label for="status" class="control-label mb-1">{{ __('Status ') }}</label>
                   <div class="form-group">
           <select name="status"  class="form-control"  required>
      

           @if($videoLibrary->status ==0)         
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
             
              
                       <div class="col-md-12">
                   <label for="link" class="control-label mb-1">{{ __('Youtube Video Link (Simple Link: https://www.youtube.com/watch?v=fvFQU6NvJo8 or https://m.youtube.com/watch?v=gIun2SDyd88)') }}</label>
                       <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{$videoLibrary->link}}"  autocomplete="link" required autofocus>
                  

                       @error('link')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-12">
                           
                           <label for="description"  class="control-label mb-1">{{ __('Tell Something About Video') }}</label>
                               <textarea id="description" required class="form-control @error('description') is-invalid @enderror" name="description"   value="{{ old('description') }}   autocomplete="description" autofocus>{{$videoLibrary->description}}</textarea>
    
                               @error('description')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                   
                           <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> Update</button>
</div>
                    </div>
               
                 
                    <!-- <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                        <div class="modal-footer">
                     
                      
    <button type="submit" class="btn btn-primary">UPDATE USER </button>
</div>
                        </div>
                    </div> -->
                </form>
            </div>
</div>

</div>
</div>
</div>


@endsection

@section('scripts')
<script>$('#usertype').change(function() {
    if( $(this).val() == "Trainee" ) {
        //trainee fields
        $('#injury').prop( "disabled", false );  
        $('#medicalBackground').prop( "disabled", false );
        $('#familyMedicalBackground').prop( "disabled", false );
       //tariner fields
        $('#description').prop( "disabled", true );
        $('#price').prop( "disabled", true );
        $('#videoUrl').prop( "disabled", true );
        $('#experience').prop( "disabled", true );
        $('#specializesIn').prop( "disabled", true );
        
    } 
    else if( $(this).val() == "Trainer"  ) {     
        //trainee fields
        $('#injury').prop( "disabled", true );  
        $('#medicalBackground').prop( "disabled", true );
        $('#familyMedicalBackground').prop( "disabled", true );
        //tariner fields
        $('#description').prop( "disabled", false );
        $('#price').prop( "disabled", false );
        $('#videoUrl').prop( "disabled", false );
        $('#experience').prop( "disabled", false );
        $('#specializesIn').prop( "disabled", false );
        
        
    }
    else if( $(this).val() == "Admin" ) {     
         //trainee fields
        $('#injury').prop( "disabled", true );  
        $('#medicalBackground').prop( "disabled", true );
        $('#familyMedicalBackground').prop( "disabled", true );
        //tariner fields
        $('#description').prop( "disabled", true );
        $('#price').prop( "disabled", true );
        $('#videoUrl').prop( "disabled", true );
        $('#experience').prop( "disabled", true );
        $('#specializesIn').prop( "disabled", true );
    }
});</script>
@endsection