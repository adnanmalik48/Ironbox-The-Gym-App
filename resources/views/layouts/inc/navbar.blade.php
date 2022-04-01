<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  z-index: 1;
  background: #f00501;
  color: #f1f1f1;
  text-align: center;
}
.header a{
  padding: 6px;
  color: #fff;
  font-size:16px;
   text-decoration: none;
}
.header img{
  padding: 6px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.mobile-menu
  {
    display:none;
  }
  .mobile-nav
  {
    display:none;
  }
  @media screen and (max-width: 426px) {
  .sidenav {padding-top: 64px;}
  .sidenav a {
    font-size: 18px;
    color: white;
  }
  .mobile-menu
  { display:block;
    font-size:30px;
    cursor:pointer;
    color: white;
    text-align: right;
   
    padding: 0 10px 0 0;
  }
  .mobile-nav
  { background-color: #f00501;
    display:block;
    padding: 15px;
  }
  .logo {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
}
  .header {
    display: none;
}
}
</style>
</head>
<body>

<!-- <div class="top-container">
  <h1>Scroll Down</h1>
  <p>Scroll down to see the sticky effect.</p>
 
</div> -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a  href="/">Home</a>
   <a  href="/faqs">FAQ's</a>
  <a href="/privacy-policy">Privacy Policy</a>
  <a href="/purchase-confirmation-policy"> Confirmation Policy</a>
  <a href="/return-and-refund-policy">Return & Refund Policy</a>
  <a href="/cancelation-policy">Cancelation Policy</a>
</div>

<div class="mobile-nav">
<span class="mobile-menu"  onclick="openNav()">&#9776;</span>
<img src="{{asset('frontend/ironbox_logo.png')}}" class="logo" width="70" height="70" alt="...">
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="header" id="myHeader">

<a  href="/faqs">FAQ's</a>
  <a href="/privacy-policy">Privacy Policy</a>
  <a href="/purchase-confirmation-policy"> Confirmation Policy</a>

   <a href="/"> <img src="{{asset('frontend/ironbox_logo.png')}}" width="80" height="80" alt="..."></a>

  <a href="/return-and-refund-policy">Return & Refund Policy</a>
  <a href="/cancelation-policy">Cancelation Policy</a>
</div>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>
