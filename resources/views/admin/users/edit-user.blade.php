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
<a href="{{route('users.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
</h4>

    <div class="card-body">
    
    <form action="/users/{{$users->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{method_field('PUT')}}
             
        <div class="form-group row">
            
                 <div class="col-md-4">
                        <label for="category_name" class="control-label mb-1">{{ __('Full Name') }}</label>
                            <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                   
                        <div class="col-md-4">
                        <label for="username" class="control-label mb-1">{{ __('User Name') }}</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$users->username}}"  autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    <div class="col-md-4">
                        <label for="usertype" class="control-label mb-1">{{ __('Give Role ') }}</label>
                        <div class="form-group">
                <select name="usertype" id="usertype"  class="form-control"  required>
                <option value="{{ucfirst(trans($users->usertype))}}" hidden>{{ucfirst(trans($users->usertype))}}</option>

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
                            <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$users->phone}}"  autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <div class="col-md-4">
                        <label for="email" class="control-label mb-1">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}"  autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                   <div class="col-md-4">
                        <label for="age"  class="control-label mb-1">{{ __('Age') }}</label>
                            <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{$users->age}}"  autocomplete="age" autofocus>

                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                   
                    
                        <div class="col-md-4">
                        <label for="gender" class="control-label mb-1">{{ __('Gender') }}</label>

                        <div class="form-group">
<select name="gender"class="form-control" >
<option hidden>{{$users->gender}}</option>

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
                            <input id="height" type="number" class="form-control @error('name') is-invalid @enderror" name="height" value="{{$users->height}}"  autocomplete="height" autofocus>

                            @error('height')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                   

                        <div class="col-md-4">
                        <label for="weight" class="control-label mb-1">{{ __('Weight') }}</label>
                            <input id="weight" type="number" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{$users->weight}}"  autocomplete="weight" autofocus>

                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="col-md-4">
                        <label for="injury" class="control-label mb-1">{{ __('Injury') }}</label>
                            <input id="injury" type="text" class="form-control @error('injury') is-invalid @enderror" name="injury" value="{{$users->injury}}"  autocomplete="injury" autofocus>

                            @error('injury')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                   

                        <div class="col-md-4">
                            
                        <label for="medicalBackground"  class="control-label mb-1">{{ __('Medical Background') }}</label>
                            <input id="medicalBackground" type="text" class="form-control @error('medicalBackground') is-invalid @enderror" name="medicalBackground" value="{{$users->medicalBackground}}"  autocomplete="medicalBackground" autofocus>

                            @error('medicalBackground')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                  
                        <div class="col-md-4">
                        <label for="familyMedicalBackground" class="control-label mb-1">{{ __('Family Medical Background') }}</label>
                            <input id="familyMedicalBackground" type="text" class="form-control @error('familyMedicalBackground') is-invalid @enderror" name="familyMedicalBackground" value="{{$users->familyMedicalBackground}}"  autocomplete="familyMedicalBackground" autofocus>

                            @error('familyMedicalBackground')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                

                        <div class="col-md-4">
                            
                        <label for="specializesIn" class="control-label mb-1">{{ __('Specializes In') }}</label>
                            <input id="specializesIn" type="text" class="form-control @error('specializesIn') is-invalid @enderror" name="specializesIn" value="{{$users->specializesIn}}"  autocomplete="specializesIn" autofocus>

                            @error('specializesIn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                  
                        <div class="col-md-4">
                        <label for="experience" class="control-label mb-1">{{ __('Experience') }}</label>
                            <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{$users->experience}}"  autocomplete="experience" autofocus>

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
                    @if($users->accountStatus ==0)         
                    <option hidden value="0">Pending</option>        
                    @else
                    <option hidden value="1">Approved</option>      
                     @endif
                   <option value="0">Pending</option>
                    <option value="1">Approved</option>
                       </select> </div>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> -->
                         
                            <div class="col-md-4">
                        <label for="price" class="control-label mb-1">{{ __('Price') }}</label>
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$users->price}}"  autocomplete="price" autofocus>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                        <label for="videoUrl" class="control-label mb-1">{{ __('Video Url') }}</label>
                            <input id="videoUrl" type="text" class="form-control @error('videoUrl') is-invalid @enderror" name="videoUrl" value="{{$users->videoUrl}}"  autocomplete="videoUrl" autofocus>

                            @error('videoUrl')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        </div>
                      
                        <div class=" row">
                        <div class="col-md-12">
                                    <label for="avatar" class="control-label mb-1">Update Profile Image</label>
                                    <input id="avatar" name="avatar" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                    @error('avatar')
                                    <div class="alert alert-danger" role="alert">
                                    {{$message}}		
                                    </div>
                                    @enderror

                                 
                                <img width="100px" src="{{asset('storage/'.$users->imgUrl)}}"/>
                                        
                                </div> </div>

                        <div class=" row">
                        <div class="col-md-12">
                        <!-- <label for="avatar" class="control-label mb-1">{{ __('Update Profile Image') }}</label>
                            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{$users->avatar}}"  autocomplete="avatar" autofocus>

                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror -->
                        
                            <div class="col-md-12">
                                
                            <label for="description"  class="control-label mb-1">{{ __('Descripion') }}</label>
                                <textarea id="description"  class="form-control @error('description') is-invalid @enderror" name="description"  value="{{ old('description') }}"  autocomplete="description" autofocus>{{$users->description}}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                             <!-- <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{$users->password}}" name="password"  autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$users->password}}"  autocomplete="new-password">
                        </div>
                    </div> -->
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