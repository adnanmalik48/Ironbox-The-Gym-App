@extends('layouts.master')

@section('title')
    User Plans| Iron Box
@endsection



@section('content')



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">IRON BOX WORKOUT PLAN's LIST</h4>
               
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
                    <th style="font-size:15px;" > NAME </th>
                    <th style="font-size:15px;" > RATING </th>
                    <th style="font-size:15px;" >PRICE</th>
                    <th style="font-size:15px;" > STATUS</th>
                    <th style="font-size:15px;" > ACTION</th>
                    </thead>
                    <tbody>
                    @foreach($workoutPlans as $row)

                      <tr>
                      <td>{{$row->id}}</td>
                        <td> {{$row->title}}</td>
                        <td>
                        @foreach ($row->ratings as $rating)
                  <b style="font-size:17px; color:#72aee6;"><i class="fas fa-star"></i> {{substr($rating->avg_rating, 0, 4)}}</b>
                @endforeach 
              </td>
                        <td> {{$row->price}}</td>
                        <!-- @if($row->status ==0)         
                        <td >  
                        <a href="javascript:void(0)"  style="font-weight:900;color:orange;" class=" updatebtn" >Inactive</a> 
                        
                        </td>
    
                      @else
                  <td>  
                       
                    <a href="javascript:void(0)" style="font-weight:900;color:green;" class=" updatebtn" >Active</a> 
                        
                        </td>      
                    @endif -->
                 
                    @if($row->status ==0)         
                        <td >  
                        <form action="/workout_plans/{{$row->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
           
    <input type="hidden" id="updateStatusvalue" name="updateStatusvalue" value="0">
   
    <button type="submit" class="btn btn-sm btn-danger">Inactive</button>      
  </div>
  </form> </td>
    
                      @else
                  <td>  
                       
                  <form action="/workout_plans/{{$row->id}}" method="POST" enctype="multipart/form-data">
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
            <a href="{{ route('workout_plans.show',$row->id) }}" class="dropdown-item"><i class="fas fa-binoculars" style="color:black;"></i>See Details</a>
            <a href="{{ route('workout_plans_details',$row->id) }}" class="dropdown-item"><i class="fas fa-expand-arrows-alt" style="color:black;"></i>View Day Details</a>
            <a href="javascript:void(0)" class="dropdown-item deletebtn"><i class="far fa-trash-alt userbtn" style="color:black;"></i> Delete</a>
           
        
        </div> 
                  
                    <!-- <a href="{{ route('workout_plans.show',$row->id) }}"> <i class="far fa-eye" style="font-size:20px;color:black;"> </i> </a>
                    <a href="{{ route('workout_plans_details',$row->id) }}"> <i class="fas fa-expand-arrows-alt " style="font-size:20px;color:black;"> </i> </a>
                   
                    <a href="javascript:void(0)" class=" deletebtn" > <i class="fas fa-trash-alt" style="font-size:20px;color:black;"> </i> </a>  -->
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
    <h5>This will remove trainer complete plan. </h5>
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
  $('#delete_model_form').attr('action', '/workout_plans/'+data[0]);
  
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
  $('#update_model_form').attr('action', '/workout_plans/'+data[0]);
  
  $('#updateModal').modal('show'); 
});
} );
</script>

@endsection