
@extends('layouts.frontend')

@section('title')
  Home
@endsection



@section('content')

<div class="header-main">
  <div class="header-sec">
  <div class="header-img"><img src="{{asset('frontend/ironbox_logo.png')}}" class="d-block w-100" alt="...">
 </div>
  <div class="header-para"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p></div>
  
            @guest
                @if (Route::has('login'))
                    <span class="tab-item" > 
                       
                        <div class="header-link" ><a href="{{ route('login') }}">{{ __('LOGIN') }}</a></div>
                    </span>
                @endif

                @if (Route::has('register'))
                <span class="tab-item">
                <div class="header-link" > <a class="header-link" href="{{ route('register') }}">{{ __('Register') }}</a></div>
                        </span>
                @endif
            @else
               
                <div class="header-user" > 
                        {{ Auth::user()->name }}
                   
                    
                    </div>

                    <div class="header-link" > 
                        <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
               
            @endguest
  </div>
  
 </div>
  </div>
<style>
.header-user
{
  text-align: center;
  color:yellow;
    padding: 20px;
    font-size: 18px;
    font-weight: bold;
    transition: 0.3s;
}
.header-main{
  background-color: #000;
  height: 100vh;
   display: flex;
  align-items: center;
  justify-content: center;
}
.header-img{
  text-align: center;
}
  .header-para{
    max-width: 800px;
    margin: auto;
    text-align: center;
    color: #fff;
    font-size: 22px;
    margin: 20px 0px 40px;
  }
.header-img img{
  width: 40% !important;
  margin: auto;
}
.header-link{
  text-align: center;
  transition: 0.3s;
}
.header-link a{
  color: #fff;
    border: 2px solid #fff;
    padding: 10px 60px;
    border-radius: 30px;
    font-size: 18px;
    font-weight: bold;
    transition: 0.3s;
}
.header-link a:hover{
  text-decoration: none;
  background-color: #fff;
  color: #000;
}
.header-link:hover{
  transform: scale(1.1);
}
.tab-item
{
  padding:10px;
}
</style>

@endsection

@section('scripts')

@endsection
