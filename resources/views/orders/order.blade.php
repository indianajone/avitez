@extends('app')

@section('content')

<div class="our-bottle-2">
    <img src="images/online-order/bottle.png" alt="Avitez's Bottle" />
    <p class="text-center">Avitez 500 ml.<span>Delivered to your door</span></p>
</div>
<div class="orders">
   @yield('steps')
</div>

@endsection