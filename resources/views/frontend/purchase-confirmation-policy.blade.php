@extends('layouts.frontend')

@section('title')
  Contact Us
@endsection
<style>
.container{
    width: 53% !important;
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
<h1 class="main-heading">Purchase Confirmation Policy</h1>
<p>Find the workout that’s best for you. Begin your 30-day challenge and after 30 days, you may find that your emotional and intellectual fitness improves along with your physical fitness. Sweat now and find a better you! – Get unlimited access to all features for a reasonable amount. We’ll confirm your subscription by email.</p>

</div>
</div>
</div>


@endsection

@section('scripts')

@endsection