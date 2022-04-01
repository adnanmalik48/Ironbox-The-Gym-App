@extends('layouts.master')

@section('title')
   Add Option Information | Iron Box
@endsection



@section('content')


<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ADD NEW OPTION
                <a href="{{ url('/question_bank/'.request()->session()->get('question_id')) }}" class="btn btn-primary btn-sm float-right"  >Back</a>
                </h4>
              </div>
              <div class="card-body">
        <form method="POST" action="/question_options" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">

            <div class="col-md-12">
                   <label for="option_statement" class="control-label mb-1">{{ __('Option Statement') }}</label>
                   <input id="option_statement" type="text" class="form-control @error('option_statement') is-invalid @enderror" name="option_statement" value="{{ old('option_statement') }}" required autocomplete="option_statement" autofocus>
                       @error('option_statement')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                   
                   <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> Save</button>
</div>
                  </div>
            
                       
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