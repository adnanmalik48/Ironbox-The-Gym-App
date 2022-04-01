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
<h4 class="card-title"> USER COMPLETE INFORMATION
<a href="{{route('users.index')}}" class="btn btn-primary btn-sm float-right"  >Back</a>
<a href="{{ route('users.edit',$users->id) }}" class="btn btn-sm btn-primary float-right"  >Edit</a>
</h4>

    <div class="card-body">
    

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<h5 class="card-title" >  <span style="font-weight:900;" class=" text-primary">  {{$users->name}}</span>

@if($users->accountStatus ==0)         
     <p  style="font-weight:900;color:white;   background-color:orange;" class="text"><img  style=" border: 2px solid orange; " class=" float-right img"   src="{{asset('storage/'.$users->imgUrl)}}"/> Pending</p>     
                          @else
                          <p style="font-weight:900;color:white;   background-color:green;" class="text"><img  style=" border: 2px solid green; " class=" float-right img"   src="{{asset('storage/'.$users->imgUrl)}}"/>Approved</p>       
                         @endif
</h5>
<!-- <div class="container mb-5 mt-5">
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
           
            <div class="card-body">



            <img width="50%"  style="border-radius:50px;" src="{{asset('storage/'.$users->imgUrl)}}"/> 
          <p class="text text-primary"> {{$users->name}}</p>
    <p> <lable class="text-primary table-data-p">Username </lable>{{$users->username}}</p>
    <p><lable class="text-primary table-data-p">User-type </lable>{{$users->usertype}}</p>
    <p><lable class="text-primary table-data-p">Phone: </lable>{{$users->phone}}</p>
    <p><lable class="text-primary table-data-p">Email: </lable>{{$users->email}}</p>
    <p><lable class="text-primary table-data-p">Age: </lable>{{$users->age}}</p>
                <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
            </div>
        </div>
       
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Enterprise</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">$<span class="price">12</span><span class="h6 text-muted ml-2">/ per month</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
            </div>
        </div>
    </div>
</div>
<div class="text-muted mt-5 mb-5 text-center small">by : <a class="text-muted" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div> -->


<!--     
    <p><lable>Name: </lable>{{$users->name}}</p> -->
    <p><lable>Username: </lable>{{$users->username}}</p>
    <p><lable>Phone: </lable>{{$users->phone}}</p>
    <p><lable>Email: </lable>{{$users->email}}</p>
    <p><lable>User Price: </lable>{{$users->price}} <lable>User Role: </lable>{{$users->usertype}}</p>
    <p><lable>Age: </lable>{{$users->age}} <lable>Gender: </lable>{{$users->gender}}<lable> Rating: </lable>{{$rating}}</p>
    <p><lable>Height: </lable>{{$users->height}} <lable>Weight: </lable>{{$users->weight}}</p>
    <p><lable>video Url: </lable>{{$users-> videoUrl}}</p>
    <p><lable>Injury: </lable>{{$users->injury}}</p>
    <p><lable>MedicalBackground: </lable>{{$users->medicalBackground}}</p>
    <p><lable>FamilyMedicalBackground: </lable>{{$users->familyMedicalBackground}}</p>
    <p><lable>SecializesIn: </lable>{{$users->specializesIn}}</p>
    <p><lable>Experience: </lable>{{$users->experience}}</p>
  
    <p><lable>User Description: </lable>{{$users->description}}</p>
    
                 
                   

    <!-- <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                        <div class="modal-footer">

                        <a href="{{route('users.index')}}" class="btn btn-primary float-right"  >BACK</a>
    <a href="{{ route('users.edit',$users->id) }}" class="btn btn-primary float-right"  >EDIT USER</a>
    </div>
    </div>
</div> -->
</div>
</div>
</div>


@endsection

@section('scripts')

@endsection