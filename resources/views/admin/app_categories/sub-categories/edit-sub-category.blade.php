@extends('layouts.master')
@section('title')
Edit User Information | Iron Box
@endsection



@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">EDIT SUB CATEGORY INFORMATION
<a href="{{route('sub-categories.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
</h4>

    <div class="card-body">
    
    <form action="/sub-categories/{{$subCategories->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{method_field('PUT')}}
             
        <div class="form-group row">
            
                 <div class="col-md-12">
                 <label for="name" class="control-label mb-1">{{ __('Sub Category Name') }}</label>
                            <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{$subCategories->name}}" autocomplete="name" autofocus>
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
              
                @if($subCategories->status ==0)      
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
                
                        <div class="col-md-6">
                    <label for="category" class="control-label mb-1">{{ __('Category ') }}</label>
                        <div class="form-group">
                <select name="category"  class="form-control" >

                    <option hidden>{{ \App\Models\Categories::where(['id' => $subCategories->app_categories_id])->value('name') }}</option>
                    @foreach($categories as $row)
                  <option value="{{$row->id}}">{{$row->name}}</option>
                   @endforeach
                    </select>
                    
                    </div>
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