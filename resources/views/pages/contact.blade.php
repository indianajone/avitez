@extends('app')

@section('content')
<div class="content-push-top">
    <div class="col-md-1"></div>
    <div class="col-md-11">
        @include('partials.alert')
        <div class="col-md-8">
            <h1>Contact<small>Please contact us and we will respond within 24 hours.</small></h1>
            {!! Form::open(['class' => 'row']) !!}
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('Name:') !!}
                        {!! Form::text('name', '', [ 'class' => 'form-control' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Email:') !!}
                        {!! Form::email('email', '', [ 'class' => 'form-control' ]) !!}
                    </div>
                     <div class="form-group">
                        {!! Form::label('Enquiry:') !!}
                        {!! Form::textarea('body', '', [ 'class' => 'form-control', 'rows' => 6 ]) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('Company:') !!}
                        {!! Form::text('company', '', [ 'class' => 'form-control' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Phone:') !!}
                        {!! Form::input('tel', 'phone', '', [ 'class' => 'form-control' ]) !!}
                    </div>
                </div>
                <div class="col-md-12">
                    {!! Form::submit('Send', [ 'class' => 'btn btn-primary' ]) !!}
                    {!! Form::reset('Clear', [ 'class' => 'btn btn-default' ]) !!}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-4">
            <address>
                <strong class="text-green">Address</strong><br>
                Avitez Ltd<br>
                20/12 Sukhumvit 49/13 (Promsri),<br>
                Klongton Nua, Wattana, Bangkok<br>
                10110<br>
            </address>
            <address>
                <strong class="text-green">Head Office</strong><br>
                +66(0)2 185 3321
            </address>
            <address>
                <strong class="text-green">Sales &amp; Marketing</strong><br>
                +66(0)8 7331 7957
            </address>
            <address>
                <strong class="text-green">Operations</strong><br>
                +66(0)2 185 3321
            </address>
            <address>
                <strong class="text-green">Email us at:</strong><br>
                <a href="mailto:info@avitez.com">info@avitez.com</a>,
                <a href="mailto:orders@avitez.com">orders@avitez.com</a>
            </address>
        </div>       
    </div>
</div>

@endsection