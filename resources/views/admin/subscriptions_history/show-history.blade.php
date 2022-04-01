@extends('layouts.master')

@section('title')
Registered Users | Iron Box
@endsection



@section('content')



<div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">IRON BOX  SUBSCRIBED TRAINER's USER HISTORY
            <a href="{{route('subscriptions_history.index')}}" class="btn btn-primary btn-sm float-right"  > Back</a>
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
                <!-- <th>ID</th> -->
                
                <th style="font-size:15px;" > TRAINER </th>
                <th style="font-size:15px;" >START DATE</th>
                <th style="font-size:15px;" > END DATE </th>
                <th style="font-size:15px;" > UNSUBCRIBE DATE </th>
                <th style="font-size:15px;" > PRICE </th>
                </thead>
                <tbody>
                @foreach($userSubscriptionsHistory as $row)

                  <tr>
                  <!-- <td >{{$row->id}}</td> -->
              
                  <td>
                  @foreach ($row->trainers as $trainer)
                   {{$trainer->name }} 
    @endforeach 
                    </td>
                  
                  <td >{{$row->start_date}}</td>
                
                  <td>{{$row->end_date}}</td>
                  <td>{{$row->unsub_date}}</td>
                  <td>{{$row->sub_price}}</td>
                  
                    <!-- @if($row->status ==0)         
                        <td >  
                        <a href="javascript:void(0)"  style="  font-weight:900;color:orange;" class=" updatebtn" >Inactive</a> 
                        
                        </td>
    
                      @else
                  <td>  
                        
                    <a href="javascript:void(0)" style="font-weight:900;color:green;" class=" updatebtn" >Active</a> 
                        
                        </td>      
                    @endif -->
                   
                    
                    <!-- <td colspan="2"> -->
                    <!-- <a href="{{ route('subscriptions_history.edit',$row->id) }}"  class="btn btn-primary btn-sm " >View Details</a> -->

                    <!-- <a href="{{ route('users.edit',$row->id) }}"><i class="fas fa-edit " style="font-size:20px;color:black;"></i></a> -->

                    <!-- <a href="{{ route('users.show',$row->id) }}"><i class="fas fa-eye " style="font-size:20px;color:green;"></i></a> -->

                    <!-- <a href="javascript:void(0)" class=" deletebtn" ><i class="fas fa-trash userbtn" style="font-size:20px;color:red;" ></i></a>  -->
                    
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
<!-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <h5>This may remove your complete profile. </h5>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-sm btn-danger updatebtn">Yes! Delete</button>      
  </div>
  </form>
</div>
</div>
</div> -->

@endsection

@section('scripts')
<script>
//delete row
// $(document).ready( function () {
// $('#datatable').DataTable();
// $('#datatable').on('click', '.deletebtn', function(){
//   $tr=$(this).closest('tr');
//   var data=$tr.children("td").map(function(){
//     return $(this).text();
//   }).get();
//   //console.log(data);
//   $('#delete_user_id').val(data[0]);
//   $('#delete_model_form').attr('action', '/users/'+data[0]);
  
//   $('#deleteModal').modal('show'); 
// });
// } );

//update status 
$(document).ready( function () {
$('#datatable').DataTable();
// $('#datatable').on('click', '.updatebtn', function(){
//   $tr=$(this).closest('tr');
//   var data=$tr.children("td").map(function(){
//     return $(this).text();
//   }).get();
//   //console.log(data[3]);
//   // $('#current_status').val(data[2]);
  
//   $('#update_user_id').val(data[0]);
//   $('#update_model_form').attr('action', '/subscriptions/'+data[0]);
  
//   $('#updateModal').modal('show'); 
// });
} );



</script>

@endsection