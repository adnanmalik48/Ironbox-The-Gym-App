@extends('layouts.master')
@section('title')
  Show User Information | Iron Box
@endsection
@section('content')
<style>
.card-body lable {
    font-weight: bold;
}
.card .card-header{
    padding: 50px;
}
.card .card-body {
    padding: 20px 0px
}
.text
{
    font-size:15px;
    font-weight: bold;
    font-size:10px;
    display: inline;
    padding: 5px;
    border-radius: 10px;
}
.img
{
    border-radius: 2%; 
    width: 500px; 
    height: 150px;
    
}
.accordion {
  background-color: #2c2c2c;
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin:2px;
}

.active, .accordion:hover {
  background-color: #000;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

/* .active:after {
  content: "\2212";
} */

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title"> REVIEW INFORMATION 

<a href="{{ route('trainer_reviews',request()->session()->get('trainer_reviews_id')) }}" class="btn btn-primary btn-sm float-right"  >Back</a>
</h4>

      <div class="card-body">
      <h5 class="card-title" >  <span style="font-weight:900;" class=" text-primary">   @foreach($trainerReviews as $row)  @foreach ($row->user as $username)
                   {{$username->name }} 
    @endforeach @endforeach</span>


</h5>

   
 
     <!-- <p><lable>User Rating: </lable><b style="font-size:17px; color:#72aee6;"> {{$row->rating}}<i class="fas fa-star" style="font-size:10px;"></i></b></p> -->
    
     <p><lable>Review Message: </lable>{{$review_details->message}}</p>

     

    
</div>
</div>
</div>


@endsection

@section('scripts')


@endsection