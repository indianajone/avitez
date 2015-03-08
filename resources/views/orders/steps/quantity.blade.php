@extends('orders.order')

@section('steps')
@include('partials.alert')
<div class="heading">
    <h1>Online Ordering</h1>
    <h3>Order online or call 026637755 Free delivery when you order direct.</h3>
    <h4>Minimun of 4 cartons per order Thailand wide.</h4>
</div>
<div class="products">
    <div class="product">
        <h3><small>Minimum</small>4 cases</h3>
        <hr>
        <p><span>600 THB</span><small>per pack of 24</small></p>
    </div>
    <div class="product">
        <h3><small>8 cases or more</small>Save 10%</h3>
        <hr>
        <p><span>540 THB</span><small>per pack of 24</small></p>
    </div>
    <div class="product">
        <h3><small>12 cases up</small>Save 20%</h3>
        <hr>
        <p><span>480 THB</span><small>per pack of 24</small></p>
    </div>
    {!! Form::open(['class' => 'frm-quantity']) !!}
        <div class="input-group">
            {!! Form::text('cartons', Session::get('quantity'), ['class' => 'form-control', 'placeholder' => 'Enter Cartons']) !!}
            <span class="input-group-btn">
                {!! Form::button('Next <i class="fa fa-arrow-right"></i>', [ 'class' => 'btn btn-primary', 'type' => 'submit' ]) !!}
            </span>
        </div>
    {!! Form::close() !!}
</div>

@endsection