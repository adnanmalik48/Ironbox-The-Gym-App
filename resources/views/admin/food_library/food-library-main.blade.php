@extends('layouts.master')

@section('title')
Registered Users | Iron Box
@endsection



@section('content')



<div class="row">
      <div class="col-md-12">
  
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">IRON BOX FOOD's LIBRARY
        <a href="{{url('/add_food_item')}}" class="btn btn-primary btn-sm float-right"  > <i class="fas fa-plus"></i> Add</a>
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
                <th style="font-size:15px;">ID</th>
                <th style="font-size:15px;"> IMAGE </th>
                <th style="font-size:15px;"> FOOD </th>
                <th style="font-size:15px;" >CATEGORY</th>
                 <th style="font-size:15px;">CAUTION </th>
                <th style="font-size:15px;"> STATUS </th>
                <th style="font-size:15px;"> ACTION</th>
                </thead>
                <tbody>
                @foreach($foodLibrary as $row)

                  <tr>
                  <td style="font-size:14px;">{{$row->id}}</td>
                  <td style="font-size:14px;"><img width="40px" height="40px" src="{{asset('storage/'.$row->image)}}"/></td>
                    <td style="font-size:14px;">{{$row->name}}</td>
                    <td>
                  @foreach ($row->food_category as $category)
                   {{$category->name }} 
                      @endforeach 
                    </td>

                    <td style="font-size:14px;">{{$row->caution}}</td>
                    <!-- @if($row->status ==0)         
                        <td >  
                        <a href="javascript:void(0)"  style="font-size:14px; font-weight:700;color:orange;" class=" updatebtn" >Inactive</a> 
                        </td>
    
                      @else
                  <td>  
                    <a href="javascript:void(0)" style="font-size:14px; font-weight:700;color:green;" class=" updatebtn" >Active</a> 
                        
                        </td>      
                    @endif -->
                    @if($row->status ==0)         
                        <td >  
                        <form action="/change_status/{{$row->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
           
    <input type="hidden" id="updateStatusvalue" name="updateStatusvalue" value="0">
   
    <button type="submit" class="btn btn-sm btn-danger">Inactive</button>      
  </div>
  </form> </td>
    
                      @else
                  <td>  
                       
                  <form action="/change_status/{{$row->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
           
    <input type="hidden" id="updateStatusvalue" name="updateStatusvalue" value="1">
   
    <button type="submit" class="btn btn-sm btn-success">Active</button>      
  </div>
  </form>
                        </td>      
                    @endif
                    
                    <td colspan="2">
                    <i data-toggle="dropdown" aria-expanded="true" class="fas fa-cog" style="font-size:20px;color:#22b9ff; cursor:pointer;"></i>
        <div class="dropdown-menu dropdown-setting" >
            <a href="{{ route('show_food_item',$row->id) }}" class="dropdown-item"><i class="fas fa-binoculars" style="color:black;"></i>See Details</a>
            <a href="{{ route('edit_food_item',$row->id) }}" class="dropdown-item"><i class="fas fa-pencil-alt" style="color:black;"></i>Edit</a>
            <a href="javascript:void(0)" class="dropdown-item deletebtn"><i class="far fa-trash-alt userbtn" style="color:black;"></i> Delete</a>
           
        
        </div> 
                    <!-- <a href="{{ route('edit_food_item',$row->id) }}"><i class="fas fa-edit " style="font-size:20px;color:black;"></i></a>

                    <a href="{{ route('show_food_item',$row->id) }}"><i class="fas fa-eye " style="font-size:20px;color:green;"></i></a>

                    <a href="javascript:void(0)" class=" deletebtn" ><i class="fas fa-trash userbtn" style="font-size:20px;color:red;" ></i></a>  -->
                    
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
    <h5 class="modal-title" id="updateModal">CHANGE FOOD ITEM STATUS</h5>
    
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



<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="userDeleteModalLabel">Are you sure?</h5>
    
  </div>
  <form id="delete_model_form" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                      
  <div class="modal-body">
    <input type="hidden" id="delete_user_id">
    <h5>This action delete the food item details . </h5>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-sm btn-danger updatebtn">Yes! Delete</button>      
  </div>
  </form>
</div>
</div>
</div>

@endsection

@section('scripts')
<script>
//delete row
$(document).ready( function () {
$('#datatable').DataTable();
$('#datatable').on('click', '.deletebtn', function(){
  $tr=$(this).closest('tr');
  var data=$tr.children("td").map(function(){
    return $(this).text();
  }).get();
  //console.log(data);
  $('#delete_user_id').val(data[0]);
  $('#delete_model_form').attr('action', '/remove_food_item/'+data[0]);
  
  $('#deleteModal').modal('show'); 
});
} );

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
  $('#update_model_form').attr('action', '/change_status/'+data[0]);
  
  $('#updateModal').modal('show'); 
});
} );



</script>

@endsection