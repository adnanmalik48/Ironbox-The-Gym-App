@extends('layouts.master')

@section('title')
Meal Dishes | Iron Box
@endsection



@section('content')



<div class="row">
      <div class="col-md-12">

        <div class="card">
          <div class="card-header">
            <h4 class="card-title">IRON BOX MEAL DISHES
            <a href="{{ route('diet_plan_meals',request()->session()->get('meal_id')) }}" class="btn btn-primary btn-sm float-right"  ><i class="now-ui-icons arrows-1_minimal-left"></i> BACK</a>
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
        
                <th style="font-size:15px;"> IMAGE </th>
                <th style="font-size:15px;"> DISH </th>
                <th style="font-size:15px;"> QUANTITY  </th>
                <th style="font-size:15px;">WEIGHT</th>
                <th style="font-size:15px;">CALORIES</th>
                <th style="font-size:15px;">PROTEIN</th>
                <th style="font-size:15px;">FAT</th>
                <th style="font-size:15px;">CARBS</th>
                <th style="font-size:15px;">CAUTION</th>
                <th style="font-size:15px;">DESCRIPTION</th>
            
                </thead>
                <tbody>
                @foreach($customDietPlanMealDishes as $row)

                  <tr>
                 
                  <td><img width="40px" height="40px" src="{{asset('storage/'.$row->image)}}"/></td>
                  <td>{{$row->name}}</td>
                    <td>{{$row->quantity}}</td>
                    
                    <td> {{$row->weight}}</td>
                    <td> {{$row->calories}} Kcal</td>
                    <td> {{$row->protein}}</td>
                    <td> {{$row->fat}}</td>
                    <td> {{$row->carbohydrates}}</td>
                    <td> {{$row->caution}}</td>
                    <td> {{$row->description}}</td>
                    
             
                 
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