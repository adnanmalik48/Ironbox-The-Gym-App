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
<h4 class="card-title"> VIDEO INFORMATION

<a href="{{route('video_library.index')}}" class="btn btn-primary btn-sm float-right"  >Back</a>
<a href="{{ route('video_library.edit',$videoLibrary->id) }}" class="btn btn-sm btn-primary float-right"  >Edit</a>
</h4>

    <div class="card-body">
    

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<h5 class="card-title" >  <span style="font-weight:900;" class=" text-primary">  {{$videoLibrary->name}}</span>

@if($videoLibrary->status ==0)         
     <p  style="font-weight:900;color:white;   background-color:orange;" class="text"> Inactive</p>     
                          @else
                          <p style="font-weight:900;color:white;   background-color:green;" class="text">Active</p>       
                         @endif
</h5>

<!-- <p><lable>Video Link: </lable>https://www.youtube.com/embed/{{substr($videoLibrary->link,strpos($videoLibrary->link, "v=") + 2,11)}}</p> 
  -->
 <!-- <p><lable>Video Link: </lable>https://www.youtube.com/embed/{{substr($videoLibrary->link, -11)}}</p>  -->
 
    <!-- <p><lable>Video Link: </lable>{{$videoLibrary->link}}</p>   -->
  
        <iframe width="800" height="315" src="https://www.youtube.com/embed/{{substr($videoLibrary->link,strpos($videoLibrary->link, "v=") + 2,11)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p><lable>Video Description: </lable>{{$videoLibrary->description}}</p>
   
                    
   
    
</div>
</div>
</div>


@endsection

@section('scripts')

@endsection