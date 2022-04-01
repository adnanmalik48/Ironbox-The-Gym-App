@extends('layouts.master')

@section('title')
   Add User Information | Iron Box
@endsection



@section('content')


<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ADD NEW USER INFORMATION
                <a href="{{route('users.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
                </h4>
              </div>
              <div class="card-body">
        <form method="POST" action="/users" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">

            <div class="col-md-4">
                   <label for="category_name" class="control-label mb-1">{{ __('Full Name') }}</label>
                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
              
                   <div class="col-md-4">
                   <label for="username" class="control-label mb-1">{{ __('User Name') }}</label>
                   <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" required value="{{ old('username') }}"  autocomplete="username" autofocus>

                       @error('username')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
               <div class="col-md-4">
                   <label for="usertype" class="control-label mb-1">{{ __('Give Role ') }}</label>
                   <div class="form-group">
           <select name="usertype" id="usertype" class="form-control" required>
           <option  value="" hidden>--Select User Role --</option>

           <option value="Trainee">Trainee</option>
       <option value="Trainer">Trainer</option>
       <option value="Admin">Admin</option>
               </select>
   </div>
                       @error('usertype')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
           

          
                   <div class="col-md-4">
                   <label for="phone" class="control-label mb-1">{{ __('Phone Number') }}</label>
                   <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" required value="{{ old('phone') }}"  autocomplete="phone" autofocus>

                       @error('phone')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
               
                   <div class="col-md-4">
                   <label for="email" class="control-label mb-1">{{ __('E-Mail Address') }}</label>
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                       @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
              <div class="col-md-4">
                   <label for="age"  class="control-label mb-1">{{ __('Age') }}</label>
                   <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}"  required autocomplete="age" autofocus>

                       @error('age')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
              
               
                   <div class="col-md-4">
                   <label for="gender" class="control-label mb-1">{{ __('Gender') }}</label>

                   <div class="form-group">
<select name="gender"class="form-control" required>
<option  value="" hidden>-- Select Gender --</option>

<option value="male">Male</option>
<option value="female">Female</option>
</select> </div>
                       @error('gender')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
             

                   <div class="col-md-4">
                   <label for="height" class="control-label mb-1">{{ __('Height') }}</label>
                   <input id="height" type="number" class="form-control @error('name') is-invalid @enderror" name="height" required value="{{ old('height') }}"  autocomplete="height" autofocus>

                       @error('height')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
              

                   <div class="col-md-4">
                   <label for="weight" class="control-label mb-1">{{ __('Weight') }}</label>
                   <input id="weight" type="number" class="form-control @error('weight') is-invalid @enderror" name="weight" required value="{{ old('weight') }}"  autocomplete="weight" autofocus>

                       @error('weight')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
           
                   <div class="col-md-4">
                   <label for="injury" class="control-label mb-1">{{ __('Injury (for trainee only)') }}</label>
                   <input id="injury" type="text" class="form-control @error('injury') is-invalid @enderror" name="injury" value="{{ old('injury') }}"  autocomplete="injury" autofocus>

                       @error('injury')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
              

                   <div class="col-md-4">
                       
                   <label for="medicalBackground"  class="control-label mb-1">{{ __('Medical Background (for trainee only)') }}</label>
                   <input id="medicalBackground" type="text" class="form-control @error('medicalBackground') is-invalid @enderror" name="medicalBackground" value="{{ old('medicalBackground') }}"  autocomplete="medicalBackground" autofocus>

                       @error('medicalBackground')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
             
                   <div class="col-md-4">
                   <label for="familyMedicalBackground" class="control-label mb-1">{{ __('Family Medical Background (for trainee only)') }}</label>
                   <input id="familyMedicalBackground" type="text" class="form-control @error('familyMedicalBackground') is-invalid @enderror" name="familyMedicalBackground" value="{{ old('familyMedicalBackground') }}"  autocomplete="familyMedicalBackground" autofocus>

                       @error('familyMedicalBackground')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                  
                 

                   <div class="col-md-4">
                       
                   <label for="specializesIn" class="control-label mb-1">{{ __('Specializes In (for trainer only)') }}</label>
                   <input id="specializesIn" type="text" class="form-control @error('specializesIn') is-invalid @enderror" name="specializesIn" value="{{ old('specializesIn') }}"  autocomplete="specializesIn" autofocus>

                       @error('specializesIn')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
             
                   <div class="col-md-4">
                   <label for="experience" class="control-label mb-1">{{ __('Experience (for trainer only)') }}</label>
                   <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}"  autocomplete="experience" autofocus>

                       @error('experience')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                  
               <!-- <div class="col-md-4">
                       <label for="status" class="control-label mb-1">{{ __('Status ') }}</label>
                       <div class="form-group">
              <select name="accountStatus"class="form-control" >
              
              <option value="0">Pending</option>
               <option value="1">Approved</option>
                  </select> </div>
                           @error('status')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                       </div>  -->
                       <div class="col-md-4">
                   <label for="videoUrl" class="control-label mb-1">{{ __('Video Url (for trainer only)') }}</label>
                       <input id="videoUrl" type="text" class="form-control @error('videoUrl') is-invalid @enderror" name="videoUrl" value="{{ old('videoUrl') }}"  autocomplete="videoUrl" autofocus>
                  

                       @error('videoUrl')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                       <div class="col-md-4">
                   <label for="price" class="control-label mb-1">{{ __('Price (for trainer only)') }}</label>
                       <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('experience') }}"  autocomplete="price" autofocus>
                  

                       @error('price')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   
                 <div class="col-md-4">
                   <label for="price" class="control-label mb-1">{{ __('Password') }}</label>
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                
                   <div class="col-md-4">
                   <label for="price" class="control-label mb-1">{{ __('Confirm Password') }}</label>
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                   </div>
               </div>

                   <div class=" row">
                   <div class="col-md-12">
                   <label for="avatar" class="control-label mb-1">{{ __('Select Profile Image') }}</label>

                   <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar" autofocus>

                       @error('avatar')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   
                       <div class="col-md-12">
                           
                       <label for="description"  class="control-label mb-1">{{ __('Tell About Yourself (for trainer only)') }}</label>
                           <textarea id="description"  class="form-control @error('description') is-invalid @enderror" name="description"  value="{{ old('description') }}"  autocomplete="description" autofocus></textarea>

                           @error('description')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                       </div>

                   </div>
                   <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> save</button>
</div>
               </div>
          
            
                       
                    </form>
                
                </div>
            </div>
          </div>
          
        </div>
        @endsection

@section('scripts')
<script>$('#usertype').change(function() {
    if( $(this).val() == "Trainee") {
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
    else if( $(this).val() == "Trainer") {     
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
    else if( $(this).val() == "Admin") {     
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