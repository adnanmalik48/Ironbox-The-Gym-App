@extends('layouts.master')

@section('title')
Registered Plan Requests | Iron Box
@endsection



@section('content')
<style>
.text
{
    font-size:15px;
    font-weight: bold;
    font-size:10px;
    display: inline;
    padding: 5px;
    border-radius: 10px;
}
</style>


<div class="row">
      <div class="col-md-12">
  
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">IRON BOX PLAN REQUESTS
       
            </h4>
          
            @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
          </div>
        
          <div class="card-body">
            <div class="table-responsive">
            <table id="datatable" class="table" >
                <thead class=" text-primary">
                <th style="font-size:12px;">ID</th>
                <th style="font-size:12px;"> TRAINER </th>
                <th style="font-size:12px;">  TRAINEE </th>
                <th style="font-size:12px;"> PRICE</th>
                <th style="font-size:12px;"> CATEGORY</th>
                <th style="font-size:12px;"> CREATED DATE</th>
                <th style="font-size:12px;"> STATUS </th>
            
                </thead>
                <tbody>
                @foreach($planRequests as $row)

                  <tr>
                  <td >{{$row->id}}</td>
                  <td >
                  @foreach ($row->trainer as $trainer_user)
                   {{$trainer_user->name }} 
                      @endforeach 
                    </td>
                  <td >
                  @foreach ($row->trainee as $trainee_user)
                   {{$trainee_user->name }} 
                      @endforeach 
                    </td>
                    <td >{{$row->price}}</td>
                    @if($row->category ==1)         
                        <td> Workout</td>
                      @elseif($row->category ==2)     
                      <td > Diet</td>   
                    @endif
                    <td> {{$row->created_date}} </td>
                    @if($row->status ==1)         
                        <td>  
                        <p  style="font-weight:900;color:white;   background-color:orange;" class="text"> Pending</p>
                        </td>
    
                      @elseif($row->status ==2)
                  <td>  
                  <p  style="font-weight:900;color:white;   background-color:green;" class="text"> Accepted</p> 
                        
                        </td>   
                        @elseif($row->status ==3)
                  <td>  
                  <p  style="font-weight:900;color:white;   background-color:red;" class="text"> Rejected</p> 
                        
                        </td>     
                        @elseif($row->status ==4)
                  <td>  
                  <p  style="font-weight:900;color:white;   background-color:#58bc0c;" class="text"> Completed</p>
                        
                        </td> 
                    @endif

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
    <h5 class="modal-title" id="updateModal">CHANGE QUESTION STATUS</h5>
    
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
    <h5>This will remove your question. </h5>
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
  $('#delete_model_form').attr('action', '/question_bank/'+data[0]);
  
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
  $('#update_model_form').attr('action', '/question_bank/'+data[0]);
  
  $('#updateModal').modal('show'); 
});
} );



</script>

@endsection