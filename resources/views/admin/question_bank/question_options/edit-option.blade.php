@extends('layouts.master')
@section('title')
Edit Option Information | Iron Box
@endsection



@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">EDIT QUESTION
<a href="{{ url('/question_bank/'.request()->session()->get('question_id')) }}" class="btn btn-primary btn-sm float-right"  > Back</a>
</h4>

    <div class="card-body">
    
    <form action="/question_options/{{$questionOptions->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{method_field('PUT')}}
             
        <div class="form-group row">
            
        <div class="col-md-12">
                   <label for="option_statement" class="control-label mb-1">{{ __('Option Statement') }}</label>
                   <input id="option_statement" type="text" class="form-control @error('option_statement') is-invalid @enderror" name="option_statement" value="{{$questionOptions->option_statement}}" required autocomplete="option_statement" autofocus>
                       @error('option_statement')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
                       
                   <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary "> Update</button>
</div>
                    </div>
               
                  
                </form>
            </div>
</div>

</div>
</div>
</div>


@endsection

@section('scripts')

@endsection