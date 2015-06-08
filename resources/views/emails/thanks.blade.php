<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thanks</title>
        <style type="text/css">
            .text-green {
                color: #00929e;
            }
        </style>
    </head>
    <body>
        <div>
            <p>Thank you.</p>
            <p><strong>Name:</strong></p>
            <p>{{ $order['payer']['firstname'] }} {{ $order['payer']['lastname'] }} &lt;{{ $order['payer']['email']}}&gt;</p>
            <p><strong>Shipping Address:</strong></p>
            <p>{{ $order['payer']['address']['address'] }}</p>
            <p>{{ $order['payer']['address']['city'] }} {{ $order['payer']['address']['postcode'] }}</p>
            
            @if($order['notice'])
                <p><strong>Extra info:</strong></p> 
                <p>{{ $order['notice'] }}</p>
            @endif
            
            @if($order['payment_method'] == 'transfer')
                @include('orders.partials.payment_details')
            @endif
        </div>
    </body>
</html>