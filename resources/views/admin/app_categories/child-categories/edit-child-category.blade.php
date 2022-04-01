@extends('layouts.master')
@section('title')
Edit User Information | Iron Box
@endsection



@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">EDIT CHILD CATEGORY INFORMATION
<a href="{{route('child-categories.index')}}" class="btn btn-primary btn-sm float-right" >Back</a>
</h4>

    <div class="card-body">
    
    <form action="/child-categories/{{$childCategories->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{method_field('PUT')}}
             
        <div class="form-group row">
            
                 <div class="col-md-6">
                 <label for="name" class="control-label mb-1">{{ __('Child Category Name') }}</label>
                            <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{$childCategories->name}}" autocomplete="name" autofocus>
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
              
                @if($childCategories->status ==0)      
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
                <select name="category" id="category" class="form-control" >
               
                <option value="{{$categoryid}}"  hidden>{{$category}}</option>
              
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
                        <div class="col-md-6">
                    <label for="subcategory" class="control-label mb-1">{{ __('Sub Category ') }}</label>
                        <div class="form-group">
                <select name="subcategory"  class="form-control" >
                <option hidden>{{ \App\Models\SubCategories::where(['id' => $childCategories->sub_categories_id])->value('name') }}</option>
                   
                
                    </select>
                    
                    </div>
                            @error('subcategory')
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
<script>
//sub category poulation
    $(document).ready(function() {
        $('select[name="category"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                   url: '/child-categories/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(show) {

                        
                        $('select[name="subcategory"]').empty();
                        $.each(show, function(key, value) {
                            $('select[name="subcategory"]').append('<option value="'+ value +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="subcategory"]').empty();
            }
        });
    });

   
 
</script>
@endsection