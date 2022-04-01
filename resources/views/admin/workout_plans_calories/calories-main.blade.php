@extends('layouts.master')

@section('title')
Registered Users | Iron Box
@endsection



@section('content')



<div class="row">
      <div class="col-md-12">
      
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">IRON BOX WORKOUT PLANS CALORIE's DATA 
        <a href="{{route('workoutplans_calories.create')}}" class="btn btn-primary btn-sm float-right"  ><i class="fas fa-plus"></i> Add</a>
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
                <th style="font-size:15px;">LOWER WEIGHT </th>
                <th style="font-size:15px;" > UPPER WEIGHT </th>
                <th style="font-size:15px;">BASE CANDIDATE</th>
                <th style="font-size:15px;">CALORIES</th>
                <th style="font-size:15px;"> ACTION</th>
                </thead>
                <tbody>
                @foreach($workoutplansCalories as $row)

                  <tr>
                  <td style="font-size:15px;">{{$row->id}}</td>
                  <td style="font-size:15px;">{{$row->lower_weight}}</td>
                    <td style="font-size:15px;">{{$row->upper_weight}}</td>
                  
                    @if($row->base_candidate ==0)         
                        <td >  
                      
                        <a href="javascript:void(0)"  style="font-weight:900;color:orange;" class=" updatebtn" >Not Base candidate</a> 
                        
                        </td>
    
                      @else
                  <td>  
                       
                    <a href="javascript:void(0)" style="font-weight:900;color:green;" class=" updatebtn" >Base candidate</a> 
                        
                        </td>      
                    @endif
                 

                    @if(str_contains($row->calories, '+'))         
                    <td style="font-size:15px;">
                <b style=" color:green;">{{$row->calories}}%</b>
                  </td>
                
                      @else
                      <td style="font-size:15px;">
                <b style="color:red;"> {{$row->calories}}%</b>
                  </td>
                    
                    @endif
                    <td colspan="2">
                    <i data-toggle="dropdown" aria-expanded="true" class="fas fa-cog" style="font-size:20px;color:#22b9ff; cursor:pointer;"></i>
        <div class="dropdown-menu dropdown-setting" >
         
            <a href="{{ route('workoutplans_calories.edit',$row->id) }}" class="dropdown-item"><i class="fas fa-pencil-alt" style="color:black;"></i>Edit</a>
            <a href="javascript:void(0)" class="dropdown-item deletebtn"><i class="far fa-trash-alt userbtn" style="color:black;"></i> Delete</a>
           
        
        </div> 
                    <!-- <a href="{{ route('workoutplans_calories.edit',$row->id) }}"  class="btn btn-primary btn-sm " ><i class="fas fa-edit " style="font-size:14px;color:white;"></i> <b> Edit</b></a>
                   -->
                    <!-- <a href="{{ route('users.show',$row->id) }}"><i class="fas fa-eye " style="font-size:20px;color:green;"></i></a> -->

                    <!-- <a href="javascript:void(0)" class="btn btn-primary btn-sm deletebtn"  ><i class="fas fa-trash userbtn" style="font-size:14px;color:red;" ></i> <b> Trash</b></a>  -->
                    
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
    <h5 class="modal-title" id="updateModal">CHANGE BASE CANDIDATE</h5>
    
  </div>
  <form id="update_model_form" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                      
  <div class="modal-body">
    <input type="hidden" id="update_user_id" >
   
   

    <input type="hidden" id="updatevalue" name="updatevalue" value="1">
    <div class="col-md-12" style="margin-top:10px;">
                  
                   <label for="base_candidate" style="color:black; font-size:15px; font-weight:500;" class="control-label mb-1">{{ __('Make base candidate?') }}</label>
                   <input id="base_candidate" value="1" style="display: inline; 
    width: 9%;" type="checkbox" class="form-control @error('base_candidate') is-invalid @enderror" name="base_candidate"  >

                   </div>
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
    <h5>This may be your important entry. </h5>
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
 // console.log(data[0]);
  $('#delete_user_id').val(data[0]);
  $('#delete_model_form').attr('action', '/workoutplans_calories/'+data[0]);
  
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
  $('#update_model_form').attr('action', '/workoutplans_calories/'+data[0]);
  
  $('#updateModal').modal('show'); 
});
} );


</script>

@endsection