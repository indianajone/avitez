@extends('orders.order')

@section('steps')

<div class="heading">
    <h1>Payment options</h1>
</div>
<div class="payments">
    {!! Form::open() !!}
        <div class="col-md-6">
            <div class="radio">
                <label>
                    <input type="radio" name="payments" value="paypal" checked>
                    <img src="images/online-order/paypal.png" alt="pay via paypal">
                </label>
            </div>
        </div>
        <div class="col-md-6">
            <p>You will be redirected to a Paypal site to make payment.</p>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="col-md-6">
            <div class="radio">
                <label>
                    <input type="radio" name="payments" value="transfer">
                    Online Transfer:
                </label>
            </div>
        </div>
        <div class="col-md-6">
             @include('orders.partials.payment_details')
        </div>
        <div class="btns">
            <div class="form-group pull-right">
                {!! Form::button('Done <i class="fa fa-arrow-right"></i>', [ 'class' => 'btn btn-primary', 'type' => 'submit']) !!}
            </div>
        </div>
    {!! Form::close() !!}
    {!! Form::open(['method'=>'delete', 'class'=>'pull-left']) !!}
        <div class="form-group">
            {!! Form::button('<i class="fa fa-arrow-left"></i> Back', [ 'class' => 'btn btn-default', 'type' => 'submit']) !!}
        </div>
    {!! Form::close() !!}
</div>

@endsection