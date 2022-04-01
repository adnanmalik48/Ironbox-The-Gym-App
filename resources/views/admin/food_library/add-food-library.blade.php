@extends('layouts.master')

@section('title')
   Add User Information | Iron Box
@endsection



@section('content')


<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ADD NEW FOOD 
                <a href="{{url('/food_library')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
                </h4>
              </div>
              <div class="card-body">
        <form method="POST" action="/add_food_item" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">

            <div class="col-md-6">
                   <label for="name" class="control-label mb-1">{{ __(' Food Name') }}</label>
                   <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-6">
                   <label for="quantity" class="control-label mb-1">{{ __('Quantity') }}</label>
                   <input id="quantity" name="quantity"  type="number" class="form-control @error('quantity') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('quantity')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-6">
                   <label for="weight" class="control-label mb-1">{{ __('Weight ') }}</label>
                   <input id="weight" name="weight" type="number" class="form-control @error('weight') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('weight')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                    <div class="col-md-6">
                   <label for="caution" class="control-label mb-1">{{ __('Caution') }}</label>
                   <input id="caution" name="caution" type="text" class="form-control @error('caution') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('caution')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div> 
                   <div class="col-md-6">
                   <label for="protein_gain" class="control-label mb-1">{{ __('Food Protein') }}</label>
                   <input id="protein_gain" name="protein_gain" type="number" class="form-control @error('protein_gain') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('protein_gain')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                    <div class="col-md-6">
                   <label for="fat_gain" class="control-label mb-1">{{ __('Food Fats') }}</label>
                   <input id="fat_gain"  name="fat_gain" type="number" class="form-control @error('fat_gain') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('fat_gain')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div> 
                   <div class="col-md-6">
                   <label for="calories_gain" class="control-label mb-1">{{ __('Food Calories') }}</label>
                   <input id="calories_gain" name="calories_gain" type="number" class="form-control @error('calories_gain') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('calories_gain')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div> 
                   <div class="col-md-6">
                   <label for="carbohydrates_gain" class="control-label mb-1">{{ __('Food Carbohydrates') }}</label>
                   <input id="carbohydrates_gain" name="carbohydrates_gain" type="number" class="form-control @error('carbohydrates_gain') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
               
           <option value="">-- Select Status --</option>
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
                   <label for="category" class="control-label mb-1">{{ __('Category') }}</label>

                   <div class="form-group">
                
<select name="category" class="form-control" required >
<option  value="" hidden>-- Select Category --</option>
@foreach($foodCategories as $row)
<option value="{{$row->id}}">{{$row->name}}</option>
@endforeach
</select>
<a href="" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addcatagoriesmodel" ><i class="far fa-list-alt"></i> Manage Categories</a>
</div>
 @error('category')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                      
                   </div>
             

   <div class="col-md-12">
                   <label for="image" class="control-label mb-1">{{ __('Select Food Image') }}</label>

                   <input id="image" type="file" style="opacity: 1;
    position: static; height: 60%;"class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  autocomplete="image" autofocus>

                       @error('image')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                    
                    </div>
                   <div class="col-md-12">
                           
                           <label for="description"  class="control-label mb-1">{{ __('Describe the Food') }}</label>
                               <textarea id="description" required class="form-control @error('description') is-invalid @enderror" name="description"  value="{{ old('description') }}"  autocomplete="description" autofocus></textarea>
    
                               @error('description')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                           <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> Save</button>
</div>        
               </div>

           
                  

                       
                    </form>
                
                </div>
            </div>
          </div>
          
        </div>

<!-- Adding New Food Category Data Modal -->
 
<div class="modal fade" id="addcatagoriesmodel" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userviewModalLabel">ADD NEW FOOD CATEGORY</h5>
        
      </div> 
      <form id="view_model_form" method="post" action="/store_food_category">
                        {{csrf_field()}}
                      
     <div class="modal-body">
     <div class="col-md-12">
                   <label for="name" class="control-label mb-1">{{ __('Food Category Name') }}</label>
                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                 

      </div>
      <div class="col-md-12">
           
                @foreach($foodCategories as $row)

            <div style="background-color:black; padding:5px; margin:10px; border-radius:18px;"><span style="margin-left:10px; color:white; font-weight:500;">{{$row->name}}</span> <a href="{{ route('remove_food_category',$row->id) }}"><i style="margin-left:10px; color:white; " class="fas fa-times"></i></a></div> 

                  @endforeach
               
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary deletebtn">Yes! Add</button>      
      </div>
     </form>
    </div>
  </div>
</div>


        
        @endsection

@section('scripts')

@endsection