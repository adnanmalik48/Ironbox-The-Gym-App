@extends('layouts.master')
@section('title')
Edit User Information | Iron Box
@endsection



@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">EDIT FOOD ITEM INFORMATION
<a href="{{url('/food_library')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
</h4>

    <div class="card-body">
    
    <form action="/update_food_item/{{$foodLibrary->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{method_field('PUT')}}
             
        <div class="form-group row">
        <div class="col-md-6">
                   <label for="name" class="control-label mb-1">{{ __(' Food Name') }}</label>
                   <input id="name" name="name" type="text" value="{{$foodLibrary->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-6">
                   <label for="quantity" class="control-label mb-1">{{ __('Quantity') }}</label>
                   <input id="quantity" name="quantity"  type="number" value="{{$foodLibrary->quantity}}" class="form-control @error('quantity') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('quantity')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-6">
                   <label for="weight" class="control-label mb-1">{{ __('Weight ') }}</label>
                   <input id="weight" name="weight" type="number" value="{{$foodLibrary->weight}}" class="form-control @error('weight') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('weight')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                    <div class="col-md-6">
                   <label for="caution" class="control-label mb-1">{{ __('Caution') }}</label>
                   <input id="caution" name="caution" type="text" value="{{$foodLibrary->caution}}" class="form-control @error('caution') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('caution')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div> 
                   <div class="col-md-6">
                   <label for="protein_gain" class="control-label mb-1">{{ __('Food Protein') }}</label>
                   <input id="protein_gain" name="protein_gain" value="{{$foodLibrary->protein_gain}}" type="number" class="form-control @error('protein_gain') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('protein_gain')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                    <div class="col-md-6">
                   <label for="fat_gain" class="control-label mb-1">{{ __('Food Fats') }}</label>
                   <input id="fat_gain"  name="fat_gain" type="number" value="{{$foodLibrary->fat_gain}}" class="form-control @error('fat_gain') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('fat_gain')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div> 
                   <div class="col-md-6">
                   <label for="calories_gain" class="control-label mb-1">{{ __('Food Calories') }}</label>
                   <input id="calories_gain" name="calories_gain" type="number" value="{{$foodLibrary->calories_gain}}" class="form-control @error('calories_gain') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('calories_gain')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div> 
                   <div class="col-md-6">
                   <label for="carbohydrates_gain" class="control-label mb-1">{{ __('Food Carbohydrates') }}</label>
                   <input id="carbohydrates_gain" name="carbohydrates_gain" value="{{$foodLibrary->carbohydrates_gain}}" type="number" class="form-control @error('carbohydrates_gain') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('carbohydrates_gain')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div> 

                   <div class="col-md-6">
                   <label for="status" class="control-label mb-1">{{ __('Status ') }}</label>
                   <div class="form-group">
           <select name="status"  class="form-control"  required>
      

           @if($foodLibrary->status ==0)         
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
                <select name="category"  class="form-control" >

                    <option hidden>{{ \App\Models\FoodCategories::where(['id' => $foodLibrary->category_id])->value('name') }}</option>
                    @foreach($foodCategories as $row)
<option value="{{$row->id}}">{{$row->name}}</option>
@endforeach
                    </select>
                    
                    </div></div>

                        <div class="col-md-12">
                                    <label for="image" class="control-label mb-1">Update Food Item Image</label>
                                    <input id="image" style="opacity: 1;
    position: static; height: 25%;" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                    @error('image')
                                    <div class="alert alert-danger" role="alert">
                                    {{$message}}		
                                    </div>
                                    @enderror

                                 
                                <img width="80px" style="margin-top:10px; margin-bottom:10px;" src="{{asset('storage/'.$foodLibrary->image)}}"/>
                                        
                                </div> 

                   <div class="col-md-12">
                           
                           <label for="description"  class="control-label mb-1">{{ __('Tell Something About Video') }}</label>
                               <textarea id="description" required class="form-control @error('description') is-invalid @enderror" name="description"   value="{{ old('description') }}   autocomplete="description" autofocus>{{$foodLibrary->description}}</textarea>
    
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