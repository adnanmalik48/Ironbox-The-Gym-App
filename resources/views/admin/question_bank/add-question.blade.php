@extends('layouts.master')

@section('title')
   Add User Information | Iron Box
@endsection



@section('content')


<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ADD NEW QUESTION
                <a href="{{route('question_bank.index')}}" class="btn btn-primary btn-sm float-right"  >Back</a>
                </h4>
              </div>
              <div class="card-body">
        <form method="POST" action="/question_bank" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">

            <div class="col-md-12">
                   <label for="statement" class="control-label mb-1">{{ __('Question Statement') }}</label>
                   <input id="statement" type="text" class="form-control @error('statement') is-invalid @enderror" name="statement" value="{{ old('statement') }}" required autocomplete="statement" autofocus>
                       @error('statement')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                  
                

                   <div class="col-md-6">
                   <label for="status" class="control-label mb-1">{{ __('Status ') }}</label>
                   <div class="form-group">
           <select name="status"  class="form-control"  required>
               
           <option value="">-- Select Status --</option>
           <option value="1">Active</option>
       <option value="0">Inactive</option>
               </select></div>
               @error('status')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                       </div>

                       <div class="col-md-6">
                   <label for="category" class="control-label mb-1">{{ __('Category') }}</label>
                   <div class="form-group">
           <select name="category"  class="form-control"  required>
           <option value="">-- Select Category --</option>
           <option value="1">Workout</option>
       <option value="2">Diet</option>
               </select></div>
               @error('category')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                       </div>
               </div>

               <table class="table table-bordered" id="dynamicAddRemove">
                <!-- <tr>
                    <th>Subject</th>
                    <th>Action</th>
                </tr> -->
                <tr>
                    <td><input type="text" name="addMoreInputFields[0][option_statement]" placeholder="Enter option" class="form-control" />
                    </td>
               
               
                    <td> 
                    <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Option</button>
                    </td>
                </tr>
            </table>
                  
                    <button type="submit" class="btn btn-sm btn-primary "> Save</button>

            
              
                    </form>
                
                </div>
            </div>
          </div>
          
        </div>
        @endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][option_statement]" placeholder="Enter option" id="aa" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Remove</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection