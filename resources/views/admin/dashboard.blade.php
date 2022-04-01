@extends('layouts.master')

@section('title')
   Dashboard | Iron Box
@endsection



@section('content')
<style>

.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #fff;
    color: #e13f3b;
    
  }

  .card-counter.danger{
    background-color: #fff;
    color: #e13f3b;
  }  

  .card-counter.success{
    background-color: #fff;
    color: #e13f3b;
  }  

  .card-counter.info{
    background-color: #fff;
    color: #e13f3b;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }


  .img
{
    width:120px; 
    height:120px;
      display: block;
       margin-left: auto; 
       margin-right: auto;
}
.top
{
background-color:#E13F3B;
}
  </style>
  
<div class="row">
  
          <div class="col-md-12">
          <div class="top"> <img src="{{asset('frontend/ironbox_logo.png')}}"  class="img" alt="..."></div>
            <div class="card">

              <div class="card-header">
         
              <div class="p-4">
    <div class="welcome">
        <h3 class="mb-0" style="text-align:center;"><b>Welcome to Ironbox</b></h3>
        <p class="mb-0" style="text-align:center;">Hello <b>{{ Auth::user()->name }}</b>, welcome to ironbox dashboard!</p>
        

    </div>
      </div>

        </div>
      </div>
      <!-- <div class="row" style="background-color:red; border-radius:5px;">
      
      <div class="col-md-3" style="background-color:gray;">
        <img  style="   width: 140px; height: 140px;"  src="{{asset('storage/'.Auth::user()->imgUrl)}}"/></div>

    <div class="col-md-3">
          <p class="mb-2" ><b>Email:</b> {{ Auth::user()->email }}</p>
        <p class="mb-2" ><b>Phone:</b> {{ Auth::user()->phone }}</p>
        <p class="mb-2" ><b>User Name:</b> {{ Auth::user()->username }}</p></div>
      
</div> -->


      <div class="row " style="margin-bottom:20px;">
    <div class="col-md-3">
      <div class="card-counter primary">
      <i class="fas fa-dumbbell"></i>
      <span class="count-numbers"  id="trainerCount">{{$trainerCount}}</span>
        <span class="count-name"><b>Trainers</b></span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
      <i class="fab fa-accessible-icon"></i>
        <span class="count-numbers" id="traineeCount">{{$traineeCount}}</span>
        <span class="count-name"><b>Trainees</b></span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
      <i class="fas fa-walking"></i>
        <span class="count-numbers" id="workoutPlansCount">{{$workoutPlansCount}}</span>
        <span class="count-name"><b>Workout Plans</b></span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fas fa-carrot"></i>
        <span class="count-numbers" id="dietPlansCount">{{$dietPlansCount}}</span>
        <span class="count-name"><b>Diet Plans</b></span>
      </div>
    </div>

    
  </div>

              

          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right">{{ Auth::user()->username }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone Number</b> <a class="float-right">{{ Auth::user()->phone }}</a>
                  </li>
                </ul>

                <a  href="{{ route('users.edit',Auth::user()->id) }}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          <!-- <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Table on Plain Background</h4>
                <p class="category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-right">
                        Salary
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td class="text-right">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-right">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td class="text-right">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td class="text-right">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-right">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $98,615
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> -->
        </div>
@endsection

@section('scripts')
<script>

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const trainerCount = document.getElementById("trainerCount");
animateValue(trainerCount, 0, {{$trainerCount}}, 5000);


const traineeCount = document.getElementById("traineeCount");
animateValue(traineeCount, 0, {{$traineeCount}}, 5000);\

const workoutPlansCount = document.getElementById("workoutPlansCount");
animateValue(workoutPlansCount, 0, {{$workoutPlansCount}}, 5000);

const dietPlansCount = document.getElementById("dietPlansCount");
animateValue(dietPlansCount, 0, {{$dietPlansCount}}, 5000);

  </script>
  
@endsection
