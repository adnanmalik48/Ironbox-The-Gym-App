@extends('layouts.master')

@section('title')
   Add User Information | Iron Box
@endsection



@section('content')


<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ADD NEW CATEGORY INFORMATION
                <a href="{{route('categories.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
                </h4>
              </div>
              <div class="card-body">
        <form method="POST" action="/categories" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
            
            <div class="col-md-6">
                   <label for="name" class="control-label mb-1">{{ __('Category Name') }}</label>
                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
              
                
               <div class="col-md-6">
                   <label for="status" class="control-label mb-1">{{ __('Status ') }}</label>
                   <div class="form-group">
           <select name="status"  class="form-control" >
           <option value="1">Active</option>
       <option value="0">Inactive</option>
               </select>
   </div>
                       @error('status')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
           

</div>

                   <div class=" row">
                   <div class="col-md-12">
                   <label for="cover_img" class="control-label mb-1">{{ __('Select Cover Image') }}</label>

                   <input id="cover_img" type="file" class="form-control @error('cover_img') is-invalid @enderror" name="cover_img" value="{{ old('cover_img') }}"  autocomplete="cover_img" autofocus>

                       @error('cover_img')
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
        @endsection

@section('scripts')


@endsection