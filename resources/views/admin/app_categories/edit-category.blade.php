@extends('layouts.master')
@section('title')
Edit User Information | Iron Box
@endsection



@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">EDIT CATEGORY INFORMATION
<a href="{{route('categories.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
</h4>

    <div class="card-body">
    
    <form action="/categories/{{$categories->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{method_field('PUT')}}
             
        <div class="form-group row">
            
                 <div class="col-md-6">
                 <label for="name" class="control-label mb-1">{{ __('Category Name') }}</label>
                            <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{$categories->name}}" autocomplete="name" autofocus>
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
              
                @if($categories->status ==0)      
                        <option hidden value="0">Inactive</option>
                      @else
                  <td>  
                  <option hidden value="1"> Active</option>
                        </td>      
                    @endif

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
                                    <label for="cover_img" class="control-label mb-1">Update Cover Image</label>
                                    <input id="cover_img" name="cover_img" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                    @error('cover_img')
                                    <div class="alert alert-danger" role="alert">
                                    {{$message}}		
                                    </div>
                                    @enderror

                                 
                                <img width="100px" src="{{asset('storage/'.$categories->cover_img)}}"/>
                                        
                                </div> </div>
                              
                    </div>
                    <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> Update</button>
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