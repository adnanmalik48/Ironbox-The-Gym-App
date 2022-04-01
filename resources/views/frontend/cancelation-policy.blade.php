@extends('layouts.frontend')

@section('title')
  Contact Us
@endsection
<style>
.container{
    width: 40% !important;
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
<h1 class="main-heading">Cancelation Policy</h1>
<p>When you sign up for a trial period and then cancel, you face the risk of losing all of the trial content. So, you must cancel a membership manually 24 hours before the trial period <br>expires.</p>

</div>
</div>
</div>


@endsection

@section('scripts')

@endsection