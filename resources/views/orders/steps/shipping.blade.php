@extends('orders.order')

@section('steps')
@include('partials.alert')
<div class="heading">
    <h1>Delivery Details</h1>
</div>
{!! Form::open(['class'=>'frm-shipping form-horizontal']) !!}
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('firstname', null, ['class'=>'control-label col-md-4']) !!}
            <div class="col-md-8">
                {!! Form::text('firstname', $address->firstname, ['class'=>'form-control', 'tabindex' => 1]) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', null, ['class'=>'control-label col-md-4']) !!}
            <div class="col-md-8">
                {!! Form::email('email', $address->email, ['class'=>'form-control', 'tabindex' => 3]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('lastname', null, ['class'=>'control-label col-md-4']) !!}
            <div class="col-md-8">
                {!! Form::text('lastname', $address->lastname, ['class'=>'form-control', 'tabindex' => 2]) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('mobile', null, ['class'=>'control-label col-md-4']) !!}
            <div class="col-md-8">
                {!! Form::text('mobile', $address->mobile, ['class'=>'form-control', 'tabindex' => 4]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('address', null, ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('address', $address->address, ['class'=>'form-control', 'tabindex' => 5]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('city', 'Town/City', ['class'=>'control-label col-md-4']) !!}
            <div class="col-md-8">
                {!! Form::text('city', $address->city, ['class'=>'form-control', 'tabindex' => 6]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('postcode', null, ['class'=>'control-label col-md-4']) !!}
            <div class="col-md-8">
                {!! Form::text('postcode', $address->postcode, ['class'=>'form-control', 'tabindex' => 7]) !!}
            </div>
        </div>
    </div>
     <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('notice', 'Special Delivery Instructions', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::textarea('notice', $address->notice, ['class'=>'form-control', 'rows' => 3, 'tabindex' => 8]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group pull-right">
            <div class="col-md-2">
                {!! Form::button('Next <i class="fa fa-arrow-right"></i>', [ 'class' => 'btn btn-primary', 'type' => 'submit', 'tabindex' => 9]) !!}
            </div>
        </div>
    </div>
{!! Form::close() !!}

@endsection