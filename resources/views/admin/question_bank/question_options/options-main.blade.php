@extends('layouts.master')

@section('title')
Registered Options | Iron Box
@endsection



@section('content')



<div class="row">
      <div class="col-md-12">
  
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Question Option's
        <a href="{{route('question_options.create')}}" class="btn btn-primary btn-sm float-right"  > <i class="fas fa-plus"></i> Add</a>
        <a href="{{route('question_bank.index')}}" class="btn btn-primary btn-sm float-right"  >Back</a>
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
                <th style="font-size:15px;"> OPTION STATEMENT </th>
                <th style="font-size:15px;"> ACTION</th>
                </thead>
                <tbody>
                @foreach($questionOptions as $row)

                  <tr>
                  <td style="font-size:15px;">{{$row->id}}</td>
                    <td style="font-size:15x;">{{$row->option_statement}}</td>
                  
                  
                    <td colspan="2">
                    <i data-toggle="dropdown" aria-expanded="true" class="fas fa-cog" style="font-size:20px;color:#22b9ff; cursor:pointer;"></i>
        <div class="dropdown-menu dropdown-setting" >
         
            <a href="{{ route('question_options.edit',$row->id) }}" class="dropdown-item"><i class="fas fa-pencil-alt" style="color:black;"></i>Edit</a>
            <a href="javascript:void(0)" class="dropdown-item deletebtn"><i class="far fa-trash-alt userbtn" style="color:black;"></i> Delete</a>
           
        
        </div> 
                    <!-- <a href="{{ route('question_options.edit',$row->id) }}"  class="btn btn-primary btn-sm " ><b>Edit Option</b></a>
                    <a href="javascript:void(0)"class="btn btn-primary btn-sm deletebtn" ><b>Delete Option</b></a> -->

                    
                  </tr>

            


                  @endforeach
                </tbody>
              </table>
            </div>
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
    <h5>This will remove your option. </h5>
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
  $('#delete_model_form').attr('action', '/question_options/'+data[0]);
  
  $('#deleteModal').modal('show'); 
});
} );




</script>

@endsection