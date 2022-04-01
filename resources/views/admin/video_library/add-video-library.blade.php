@extends('layouts.master')

@section('title')
   Add User Information | Iron Box
@endsection



@section('content')


<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ADD NEW VIDEO LIBRARY
                <a href="{{route('video_library.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
                </h4>
              </div>
              <div class="card-body">
        <form method="POST" action="/video_library" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">

            <div class="col-md-6">
                   <label for="name" class="control-label mb-1">{{ __('Video Title') }}</label>
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
             
              
                       <div class="col-md-12">
                   <label for="link" class="control-label mb-1">{{ __('Youtube Video Link (Simple Link: https://www.youtube.com/watch?v=fvFQU6NvJo8 or https://m.youtube.com/watch?v=gIun2SDyd88)') }}</label>
                       <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}"  autocomplete="link" required autofocus>
                  

                       @error('link')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-12">
                           
                           <label for="description"  class="control-label mb-1">{{ __('Tell Something About Video') }}</label>
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
        @endsection

@section('scripts')

@endsection