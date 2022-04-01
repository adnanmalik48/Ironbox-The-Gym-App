@extends('layouts.master')

@section('title')
Registered Users | Iron Box
@endsection



@section('content')



<div class="row">
      <div class="col-md-12">

        <div class="card">
          <div class="card-header">
            <h4 class="card-title">IRON BOX PLAN DETAILS
     
            <a href="{{route('workout_plans.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>

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
                <th style="font-size:15px;" > Day Title </th>
                <th style="font-size:15px;"> Min Calories </th>
                <th style="font-size:15px;">Max Calories</th>
                <th style="font-size:15px;">Day Number</th>
                <th style="font-size:15px;"> Week Number	 </th>
                <th style="font-size:15px;"> ACTION</th>
                </thead>
                <tbody>
                @foreach($workoutPlanDetails as $row)

                  <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->day_title}}</td>
                    <td>{{$row->min_calories}}</td>
                    <td> {{$row->max_calories}}</td>
                    <td> day no {{$row->day_number}}</td>
                    <td> week no {{$row->week_number}}</td>

                    <td colspan="2">
                    <a href="{{ route('workout_plans_games',$row->id) }}"  class="btn btn-primary btn-sm " ><b>See Circuits</b></a>
                  
                       
                  </tr>

            


                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


  <!-- Status Update Modal -->
  <!-- <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> -->



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
    <h5>It may down moral of application user. </h5>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-sm btn-danger deletebtn">Yes! Delete</button>      
  </div>
  </form>
</div>
</div>
</div>

@endsection

@section('scripts')
<script>
//delete row
//delete row
$(document).ready( function () {
$('#datatable').DataTable();
$('#datatable').on('click', '.deletebtn', function(){
  $tr=$(this).closest('tr');
  var data=$tr.children("td").map(function(){
    return $(this).text();
  }).get();
 
  $('#delete_user_id').val(data[0]);
  console.log(data[0]);
  $('#delete_model_form').attr('action', '/trainer_reviews/'+data[0]);
  
  $('#deleteModal').modal('show'); 
});
} );

</script>

@endsection