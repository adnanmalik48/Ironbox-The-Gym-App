@extends('layouts.frontend')

@section('title')
  Contact Us
@endsection
<style>
.container{
    width: 57% !important;
    margin: 79px 0 129px 285px;
}
.main-heading
{
  font-size: 44px;
}
@media screen and (max-width: 426px) {
  .container{
    width: 100% !important;
    margin: 10px 0 10px 0;
}
.main-heading
{
  font-size: 26px;
}
}
</style>

@section('content')
@include('layouts.inc.navbar')

<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="main-heading">Return and Refund Policy</h1>
<p>You will not receive a refund for unused time in the membership after cancelling the subscription. You may use the app until the end of your current payment month. If you terminate a free trial, you will no longer be able to use the subscription.</p>

</div>
</div>
</div>


@endsection

@section('scripts')

@endsection