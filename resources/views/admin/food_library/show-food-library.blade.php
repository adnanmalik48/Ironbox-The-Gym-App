@extends('layouts.master')
@section('title')
Show Food Item Information | Iron Box
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
padding: 20px;
text-align:left;
padding-left: 40px;
padding-top: 40px;
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
.card-body .text>p{
margin-bottom:0px;
}
.table-data-p{
    display:block;
}
.img
{
    border-radius: 50%; 
    width: 120px; 
    height: 120px;
    
}
</style>

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title"> SHOW FOOD INFORMATION

<a href="{{url('/food_library')}}" class="btn btn-primary btn-sm float-right"  >Back</a>
<a href="{{ route('edit_food_item',$foodLibrary->id) }}" class="btn btn-sm btn-primary float-right"  >Edit</a>
</h4>

    <div class="card-body">
    


<h5 class="card-title" >  <span style="font-weight:900;" class=" text-primary">  {{$foodLibrary->name}}</span>

@if($foodLibrary->status ==0)         
     <p  style="font-weight:900;color:white;   background-color:orange;" class="text"> Inactive</p>     
                          @else
                          <p style="font-weight:900;color:white;   background-color:green;" class="text">Active</p>       
                         @endif
</h5>

  
       <p><lable>Qantity: </lable>{{$foodLibrary->quantity}}</p>
       <p><lable>Weight: </lable>{{$foodLibrary->weight}}</p>
       <p><lable>Category: </lable>   @foreach ($foodLibrary->food_category as $category)
                   {{$category->name }} 
                      @endforeach </p>
       <p><lable>Caution: </lable>{{$foodLibrary->caution}}</p>
       <p><lable>Protein Gain: </lable>{{$foodLibrary->protein_gain}}</p>
       <p><lable>Fat Gain: </lable>{{$foodLibrary->fat_gain}}</p>
       <p><lable>Carbohydrates Gain: </lable>{{$foodLibrary->carbohydrates_gain}}</p>
       <p><lable>calories_gain: </lable>{{$foodLibrary->calories_gain}}</p>
                
    
</div>
</div>
</div>


@endsection

@section('scripts')

@endsection