@extends('orders.order')

@section('steps')

<h1>Confirm your order</h1>
<table class="table">
    <thead>
        <tr>
            <th width="35%"></th>
            <th width="20%">Price<small>(per carton)</small></th>
            <th width="20%">Quantity<small>(carton)</small></th>
            <th width="20%">Sub Total<small>(THB)</small></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><i class="fa fa-truck fa-lg text-green"></i> 500ml (24 per pack)<br>One-time delivery</td>
            <td class="text-center">{{ $price->each }}</td>
            <td class="text-center">{{ $price->quantity }}</td>
            <td class="text-center">{{ number_format($price->calculate, 2) }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class="text-right">Vat. 7%</td>
            <td class="text-center">{{ number_format($price->tax, 2) }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class="text-right">TOTAL</td>
            <td class="text-center">{{ number_format($price->total, 2) }}</td>
        </tr>
    </tbody>
</table>
{!! Form::open(['method'=>'delete', 'class'=>'pull-left']) !!}
    <div class="form-group">
        {!! Form::button('<i class="fa fa-arrow-left"></i> Cancel', [ 'class' => 'btn btn-default', 'type' => 'submit']) !!}
    </div>
{!! Form::close() !!}
{!! Form::open(['class'=>'pull-right']) !!}
    <div class="form-group">
        {!! Form::button('Check out <i class="fa fa-arrow-right"></i>', [ 'class' => 'btn btn-primary', 'type' => 'submit']) !!}
    </div>
{!! Form::close() !!}

@endsection