@extends('layouts.master')

@section('title')
Registered Users | Iron Box
@endsection



@section('content')



<div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">IRON BOX REGISTERED SUB CATEGORIES 
        <!-- <a href="{{route('sub-categories.create')}}" class="btn btn-primary btn-sm float-right"  ><i class="far fa-list-alt"></i> ADD SUB CATEGORY</a> -->
        <a href="" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addcatagoriesmodel" ><i class="fas fa-plus"></i> Add</a>
              
            </h4>
            
            @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
          </div>
        
          <div class="card-body">
              
            <div class="table-responsive">
              <table id="datatable" class="table">
                <thead class=" text-primary">
                <th style="font-size:15px;" >ID</th>
                <th style="font-size:15px;"> CATEGORY NAME </th>
                <th style="font-size:15px;"> SUB CATEGORY NAME </th>
                <th style="font-size:15px;"> STATUS </th>
                <th style="font-size:15px;"> ACTION</th>
                </thead>
                <tbody>
                @foreach($subCategories as $row)

                  <tr>
                  <td style="font-size:15px;">{{$row->id}}</td>
                   
                    <td>
                  @foreach ($row->categories as $category)
                   {{$category->name }} 
                      @endforeach 
                    </td>
                    <td style="font-size:15px;">{{$row->name}}</td>
                    <!-- @if($row->status ==0)         
                        <td style="font-size:15px;" >  
                        <a href="javascript:void(0)"  style="font-weight:900;color:orange;" class=" updatebtn" >Inactive</a> 
                        </td>
                      @else
                  <td style="font-size:15px;">  
                     
                    <a href="javascript:void(0)" style="font-weight:900;color:green;" class=" updatebtn" >Active</a> 
                        </td>      
                    @endif -->

                    @if($row->status ==0)         
                        <td >  
                        <form action="/sub-categories/{{$row->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
           
    <input type="hidden" id="updateStatusvalue" name="updateStatusvalue" value="0">
   
    <button type="submit" class="btn btn-sm btn-danger">Inactive</button>      
  </div>
  </form> </td>
    
                      @else
                  <td>  
                       
                  <form action="/sub-categories/{{$row->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
           
    <input type="hidden" id="updateStatusvalue" name="updateStatusvalue" value="1">
   
    <button type="submit" class="btn btn-sm btn-success">Active</button>      
  </div>
  </form>
                        </td>      
                    @endif
                    <td colspan="2">
                    <!-- <a href="{{ route('sub-categories.edit',$row->id) }}"  class="btn btn-primary btn-sm " ><b>Edit Category</b></a> -->
                    <i data-toggle="dropdown" aria-expanded="true" class="fas fa-cog" style="font-size:20px;color:#22b9ff; cursor:pointer;"></i>
        <div class="dropdown-menu dropdown-setting" >
            <a href="{{ route('sub-categories.edit',$row->id) }}" class="dropdown-item"><i class="fas fa-pencil-alt" style="color:black;"></i>Edit</a>
           
        </div> 
                    
                  </tr>

            


                  @endforeach
                </tbody>
              </table>
             
            </div>
          </div>
        </div>
      </div>


  <!-- Status Update Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="updateModal">CHANGE ACCOUNT STATUS</h5>
    
  </div>
  <form id="update_model_form" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                      
  <div class="modal-body">
    <input type="hidden" id="update_user_id" >
    <input type="hidden" id="updatevalue" name="updatevalue" value="1">
    <select name="status" class="form-control" >
    
<option value="1">Active</option> 
<option value="0">Inactive </option>

</select>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-sm btn-primary deletebtn">Yes! Change</button>      
  </div>
  </form>
</div>
</div>
</div>


 <!-- Adding Sub Category Data Modal -->
 
<div class="modal fade" id="addcatagoriesmodel" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userviewModalLabel">ADD NEW SUB CATEGORY</h5>
        
      </div> 
      <form id="view_model_form" method="post">
                        {{csrf_field()}}
                      
     <div class="modal-body">
     <div class="col-md-12">
                   <label for="name" class="control-label mb-1">{{ __('Sub Category Name') }}</label>
                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   <div class="col-md-12">
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
                   <div class="col-md-12">
                   <label for="category" class="control-label mb-1">{{ __('Category') }}</label>

                   <div class="form-group">
                
<select name="category"class="form-control" required >
@foreach($categories as $row)
<option  value="" hidden>-- Select Category --</option>
<option value="{{$row->id}}">{{$row->name}}</option>
@endforeach
</select></div>
 @error('category')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary deletebtn">Yes! Save</button>      
      </div>
     </form>
    </div>
  </div>
</div>



<!-- Update Catagories Modal -->
<!-- <div class="modal fade" id="updateCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="updateCategoryModal">CHANGE ACCOUNT STATUS</h5>
    
  </div>
  <form id="update_category_model_form" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                      
  <div class="modal-body">
    <input type="hidden" id="update_category_id" >
    <input type="hidden" id="updatevalue" name="updatevalue" value="1">
    <select name="status" class="form-control" >
    
<option value="1">Active</option> 
<option value="0">Inactive </option>

</select>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-sm btn-primary deletebtn">Yes! Change</button>      
  </div>
  </form>
</div>
</div>
</div> -->

@endsection

@section('scripts')
<script>


//update status 
$(document).ready( function () {
$('#datatable').DataTable();
$('#datatable').on('click', '.updatebtn', function(){
  $tr=$(this).closest('tr');
  var data=$tr.children("td").map(function(){
    return $(this).text();
  }).get();
  //console.log(data[3]);
  // $('#current_status').val(data[2]);
  
  $('#update_user_id').val(data[0]);
  $('#update_model_form').attr('action', '/sub-categories/'+data[0]);
  
  $('#updateModal').modal('show'); 
});
} );

//update category model 
// $(document).ready( function () {
// $('#datatable').DataTable();
// $('#datatable').on('click', '.updateCategoryBtn', function(){
//   $tr=$(this).closest('tr');
//   var data=$tr.children("td").map(function(){
//     return $(this).text();
//   }).get();
//   //console.log(data[3]);
//   // $('#current_status').val(data[2]);
  
//   $('#update_category_id').val(data[0]);
//   $('#update_category_model_form').attr('action', '/sub-categories/'+data[0]);
  
//   $('#updateCategoryModal').modal('show'); 
// });
// } );
</script>

@endsection