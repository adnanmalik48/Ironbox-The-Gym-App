<!--

=========================================================
* Iron Box Dashboard - v1.5.0
=========================================================


* Copyright 2021 Ironbox

* Designed & Devloped by Mindwhiz Coded by mindwhizteam

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
 <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png') }}">

  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
       @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

 

  <!-- CSS Files -->

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />


  <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />

  <!-- CSS For paginantion-->
  
  <link href="{{ asset('assets/css/dataTables.min.css') }}" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body class="">
  <div class="wrapper ">
  <div class="sidebar" >
    <!--<div class="sidebar" data-color="orange">  Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="/dashboard" class="simple-text logo-mini">
        <i class="fas fa-home"></i>
        </a>
        <a href="/dashboard" class="simple-text logo-normal">
         Iron Box Dashboard
        </a>
      
      </div>
      <style>
/*         
 
   .sidebar-wrapper ul li ul
   {
     display: none;  
   
   }
 
   .sidebar-wrapper ul li ul li
   {

    margin-left:-30px; 
    margin-top:2px;
    text-decoration: none;
    
   }
   ::marker {
    font-size: 0px;

}
.sidebar-wrapper ul li:hover ul {  
      
        display: block;  
        position: relative;  
    }  
    .sidebar-wrapper ul li a:active  {  
 
        display: block;  
        position: relative;  
    }

    #sub
    {margin-right:20px;

    }
    #sub a
    { color:white !important;
      font-weight: 100;
      background-color:#282828 !important;
    }
    #sub a p
    { color:white !important;
     
    }
   
    #sub a:hover  {
      background-color:#000 !important;
}
 */

.dropdown-toggle::after {
margin-left: 30px;
    font-size: 17px;}
        </style>
     


      <div class="sidebar-wrapper" id="sidebar-wrapper">
 
        <ul class="nav" id="nav">
     
        <li class=" {{ (request()->is('dashboard*')) ? 'active' : '' }}">
            <a href="/dashboard">
            <i class="fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
     
    
      

<!-- 
          <li  class="">
            <a href="">
            <i class="fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a></li> -->

          <!-- <li  class="{{ 'categories' == request()->path() ? 'active' : '' }} ">
            <a href="/categories" id="show">
            <i class="far fa-list-alt"></i>
              <p> Categories</p>
           
            </a>
            
            
          </li> -->
          
          <!-- <li class="{{ 'subscriptions' == request()->path() ? 'active' : '' }} {{ 'subscriptions_history' == request()->path() ? 'active' : '' }}">
            <a href="">
            <i class="fas fa-user-plus"></i>
              <p>Subscriptions</p>
              <i style="float:right; margin-top:-30px; font-size:15px;" class="fas fa-caret-down"></i>
            </a>
            <ul > 
            <li class="{{ 'subscriptions' == request()->path() ? 'active' : '' }} sub"  id="sub" >
            <a href="/subscriptions" >
            <p>Subscriptions</p>
            </a>
          </li>  
            <li class="{{ 'subscriptions_history' == request()->path() ? 'active' : '' }} sub"  id="sub" >
            <a href="/subscriptions_history" >
            <p>Subscriptions History</p>
            </a>
          </li>
         
    </ul>    
          </li> -->


          <li class="dropdown
          {{ (request()->is('categories*')) ? 'active' : '' }} 
          {{ (request()->is('sub-categories*')) ? 'active' : '' }} 
          {{ (request()->is('child-categories*')) ? 'active' : '' }} ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="far fa-list-alt"></i>Categories</a>
        <div class="dropdown-menu">
            <a href="/categories" class="dropdown-item">Categories</a>
            <a href="/sub-categories" class="dropdown-item">Sub Categories</a>
            <a href="/child-categories" class="dropdown-item">Child Categories</a>
        </div>
</li>
          <li class="dropdown 
          {{ (request()->is('subscriptions*')) ? 'active' : '' }} 
          {{ (request()->is('subscriptions_history*')) ? 'active' : '' }} 
          ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-shopping-basket"></i>Subscriptions</a>
        <div class="dropdown-menu">
            <a href="/subscriptions" class="dropdown-item">Subscriptions</a>
            <a href="/subscriptions_history" class="dropdown-item">Subscriptions History</a>
        </div>
</li>

         
          <li class=" {{ (request()->is('users*')) ? 'active' : '' }}">
            <a href="/users">
            <i class="fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>
          <li>
      
          <li class=" {{ (request()->is('video_library*')) ? 'active' : '' }}">
            <a href="/video_library">
            <i class="fas fa-video"></i>
              <p>Video Library</p>
            </a>
          </li>
          <li>

          <li class="dropdown 
          {{ 'reviewed_trainers' == request()->path() ? 'active' : '' }}
          {{ (request()->is('trainer_reviews/*')) ? 'active' : '' }}
          {{ (request()->is('trainer_review_detail/*')) ? 'active' : '' }} 

           {{ 'trainer_reviewers' == request()->path() ? 'active' : '' }} 
           {{ (request()->is('trainer_reviewer_reviews/*')) ? 'active' : '' }} 
           {{ (request()->is('trainer_review_details/*')) ? 'active' : '' }} 

           {{ 'reviewed_plans' == request()->path() ? 'active' : '' }}
           {{ (request()->is('plan_reviews/*')) ? 'active' : '' }} 
           {{ (request()->is('plan_review_details/*')) ? 'active' : '' }} 
           
           {{ 'plan_reviewers' == request()->path() ? 'active' : '' }}
           {{ (request()->is('reviewer_reviews/*')) ? 'active' : '' }}
           {{ (request()->is('review_details/*')) ? 'active' : '' }}
          ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">  <i class="fas fa-medal"></i></i>Reviews</a>
        <div class="dropdown-menu">
            <a href="/reviewed_trainers" class="dropdown-item">Trainer Reviews</a>
            <a href="/trainer_reviewers" class="dropdown-item">Trainer Reviewers</a>
            <a href="/reviewed_plans" class="dropdown-item">Plan Reviews</a>
            <a href="/plan_reviewers" class="dropdown-item">Plan Reviewers</a>
        </div>
</li>
<li class="{{ 'workout_plans' == request()->path() ? 'active' : '' }} {{ (request()->is('workout_plans_details/*')) ? 'active' : '' }} {{ (request()->is('workout_plans_games/*')) ? 'active' : '' }}  {{ (request()->is('workout_plans_exercise/*')) ? 'active' : '' }} {{ (request()->is('workout_plans_show_exercise/*')) ? 'active' : '' }} {{ (request()->is('workout_plans/*')) ? 'active' : '' }} ">
            <a href="/workout_plans">
            <i class="fas fa-dumbbell"></i>
              <p>Workout Plans</p>
            </a>
          </li>

          <li class="dropdown
          {{ (request()->is('workoutplans_calories*')) ? 'active' : '' }}
         ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-fire"></i>Calories</a>
        <div class="dropdown-menu">
            <a href="/workoutplans_calories" class="dropdown-item">Workout Calories</a>
            <!-- <a href="/sub-categories" class="dropdown-item">Diet Calories</a> -->
        </div>
</li>


<li class=" {{ (request()->is('question_bank*')) ? 'active' : '' }}
{{ (request()->is('question_options*')) ? 'active' : '' }}
">
            <a href="/question_bank">
            <i class="fas fa-question"></i>
              <p>Question Bank</p>
            </a>
          </li>
          <li>

          <li class=" {{ (request()->is('plan_requests*')) ? 'active' : '' }}
">
            <a href="/plan_requests">
            <i class="far fa-dot-circle"></i>
              <p>Plan Requests</p>
            </a>
          </li>
          <li>
          <li class=" {{ 'diet_plans' == request()->path() ? 'active' : '' }} {{ (request()->is('diet_plan_days/*')) ? 'active' : '' }} {{ (request()->is('diet_plan_meals/*')) ? 'active' : '' }}  {{ (request()->is('diet_plan_meal_dishes/*')) ? 'active' : '' }} {{ (request()->is('show_plan_information/*')) ? 'active' : '' }}
">
            <a href="/diet_plans">
            <i class="fas fa-utensils"></i>
              <p>Diet Plans</p>
            </a>
          </li>
          <li>
          <li class=" {{ (request()->is('food_library*')) ? 'active' : '' }}
">
            <a href="/food_library">
            <i class="fas fa-carrot"></i>
              <p>Food Library</p>
            </a>
          </li>
          <li class=" {{ (request()->is('logout-form*')) ? 'active' : '' }}
">
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
          <!-- <li> -->
          <!-- <li class="{{ 'trainer_reviews' == request()->path() ? 'active' : '' }} {{ 'reviewers' == request()->path() ? 'active' : '' }}">
            <a href="">
            <i class="fas fa-medal"></i>
              <p>Reviews</p>
              <i style="float:right; margin-top:-30px; font-size:15px;" class="fas fa-caret-down"></i>
            </a>
            <ul >    
            <li id="sub" class="{{ 'trainer_reviews' == request()->path() ? 'active' : '' }}">
            <a href="/trainer_reviews">
           
              <p>Trainer Reviews</p>
            </a>
          </li>
          <li id="sub" class="{{ 'reviewers' == request()->path() ? 'active' : '' }}">
            <a href="/reviewers">
              <p>Reviewers</p>
            </a>
          </li>
    </ul>    
          </li> -->


        
          
        
<!--                
          <li class="{{ 'logs' == request()->path() ? 'active' : '' }}">
            <a href="/logs">
            <i class="fas fa-tasks"></i>
              <p>User Logs</p>
            </a>
          </li>
          -->
        
          

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <!-- <a class="navbar-brand" href="#">Iron Box Admin Management Panel</a> -->
            <button onclick="reloadPage()"  class="btn btn-primary btn-sm float-left" style="border:none; right: 30px;bottom: 3px; position:fixed; background-color:#1d2327 !important; padding:10px; border-radius:2px;" ><i class="fas fa-sync" style="color:white;"></i> Refresh</button>
      
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
             
          
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" id="messageDropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge" id="notificationCount">0</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header" id="notificationCount"> Notifications</span>
                    <div class="dropdown-divider"></div>
                    <div id="notifications">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-bell mr-2"></i> No Notifications
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                    {{-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
                </div>
            </li>
          <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" id="commentDropdown" href="#">
                    <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge" id="commentCount">0</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header" id="commentCount"> Comments</span>
                    <div class="dropdown-divider"></div>
                    <div id="comments">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> No Comments
                        </a>
                    </div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
           
              </li>
              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
              <li class="nav-item">
               <img  style=" border-radius: 50%;  width: 40px; height: 40px;"  src="{{asset('storage/'.Auth::user()->imgUrl)}}"/>
                <!-- <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a> -->
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
      @yield('content')

      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              
              <li>
                <a href="/return-and-refund-policy">
                  Return Policy
                </a>
              </li>
              <li>
                <a href="/purchase-confirmation-policy">
                Purchase Policy
                </a>
              </li>
              <li>
                <a href="/cancelation-policy">
                Cancelation Policy
                </a>
              </li>
              <li>
                <a href="/privacy-policy">
                Privacy Policy
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Developed & Designed by <a href="https://mindwhiz.co/" target="_blank">MindWhiz</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <!-- Chart JS -->
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>

  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>

  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->

  <script src="{{asset('assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script>
 
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  
  <script src="{{asset('assets/demo/demo.js')}}"></script>
  <script src="{{asset('assets/js/dataTables.min.js')}}"></script>
  <script src="{{asset('assets/js/sweetalert.js')}}"></script>

  <script>
     @if (session('status'))
     //alert('{{ session('status') }}');
     swal({
  title: '{{ session('status') }}',
 // text: "You clicked the button!",
  icon: '{{ session('statuscode') }}',
  button: "OK",
});
      @endif
  </script>
  <script type="text/javascript">
function reloadPage()
  {
  window.location.reload()
  }
</script>
<!-- Notifications Script Start -->
<script>
        var notID = 0;
        setInterval(function() {
            $.ajax({
                type: "get",
                url: '{{ route('admin.notification') }}',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response !=null) {
                        if (response.notifications.length > notID) {
                            $('#messageDropdown svg').addClass('notification-heart');
                            $('#notificationCount').addClass('notification-heart');
                            notID = response.notifications.length;
                            $('#notificationCount').empty();
                            $('#notificationCount').append(response.notifications.length);
                            $('#notifications').empty();
                            response.notifications.forEach(function(notification, index) {
                                $('#notifications').append('<a href="'+notification.url+'" class="dropdown-item" style="white-space: revert !important;"><i class="fas fa-envelope mr-2"></i>'+ notification.message +'</a><div class="dropdown-divider"></div>');
                            });
                            playSound();
                        } else {
                            $('#messageDropdown svg').removeClass('notification-heart');
                            $('#notificationCount').removeClass('notification-heart');
                        }
                    } else {
                        
                    }
                }
            });
        }, 2000);
        function playSound() {
            var audio = new Audio("{{asset('public/audio/notify.mp3') }}");
            audio.play();
        }
    </script>
    <!-- Notifications Script End -->
   @yield('scripts')

</body>

</html>
