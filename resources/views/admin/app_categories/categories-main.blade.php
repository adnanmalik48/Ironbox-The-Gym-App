@extends('layouts.master')

@section('title')
Registered Users | Iron Box
@endsection



@section('content')



<div class="row">
      <div class="col-md-12">
    

   <!-- <div id="main-notice">   <p style="color:black; font-size:15px; background-color:yellow; padding:20px; border-radius:4px;"><b><i class="fas fa-exclamation-triangle" style="color:red;  font-size:30px;"></i> Please be careful of any kind of operation on categories it may change overall application behaviour.</b>  <a type="button" style="text-decoration:none; font-size:18px; margin-left:20px; color:black;" id="toggle"><b>X</b></a></p></div> -->

        <div class="card">
          <div class="card-header">
            <h4 class="card-title">IRON BOX REGISTERED CATEGORIES 
        <a href="{{route('categories.create')}}" class="btn btn-primary btn-sm float-right"  ><i class="fas fa-plus"></i> Add</a>
        
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
                <th style="font-size:15px;"> CATEGORY </th>
                <th style="font-size:15px;"> COVER IMAGE </th>
                <th style="font-size:15px;"> STATUS </th>
                <th style="font-size:15px;"> ACTION</th>
                </thead>
                <tbody>
                @foreach($categories as $row)

                  <tr>
                  <td style="font-size:15px;">{{$row->id}}</td>
                    <td style="font-size:15px;">{{$row->name}}</td>
                    <td><img width="100px" height="40px" src="{{asset('storage/'.$row->cover_img)}}"/></td>
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
                        <form action="/categories/{{$row->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
           
    <input type="hidden" id="updateStatusvalue" name="updateStatusvalue" value="0">
   
    <button type="submit" class="btn btn-sm btn-danger">Inactive</button>      
  </div>
  </form> </td>
    
                      @else
                  <td>  
                       
                  <form action="/categories/{{$row->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
           
    <input type="hidden" id="updateStatusvalue" name="updateStatusvalue" value="1">
   
    <button type="submit" class="btn btn-sm btn-success">Active</button>      
  </div>
  </form>
                        </td>      
                    @endif
                    
                    <td colspan="2">
                    <!-- <a href="{{ route('categories.edit',$row->id) }}"  class="btn btn-primary btn-sm " ><b>Edit Category</b></a> -->
                    <i data-toggle="dropdown" aria-expanded="true" class="fas fa-cog" style="font-size:20px;color:#22b9ff; cursor:pointer;"></i>
        <div class="dropdown-menu dropdown-setting" >
            <a href="{{ route('categories.edit',$row->id) }}" class="dropdown-item"><i class="fas fa-pencil-alt" style="color:black;"></i>Edit</a>
           
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
    <h5>Be careful it may change application behaviour. </h5>
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
//   $('#delete_model_form').attr('action', '/categories/'+data[0]);
  
//   $('#deleteModal').modal('show'); 
// });
// } );

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
  $('#update_model_form').attr('action', '/categories/'+data[0]);
  
  $('#updateModal').modal('show'); 
});
} );

// const targetDiv = document.getElementById("main-notice");
// const btn = document.getElementById("toggle");
// btn.onclick = function () {
//   if (targetDiv.style.display !== "none") {
//     targetDiv.style.display = "none";
//   } else {
//     targetDiv.style.display = "block";
//   }
// };
</script>

@endsection