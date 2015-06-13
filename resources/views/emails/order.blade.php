<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>New order form web</title>
    </head>
    <body>
        <div>
            <p>Order from {{ $order['payer']['firstname']}} {{ $order['payer']['lastname'] }} <{{ $order['payer']['email']}}></p>

            <p>Quantity: {{ $order['quantity'] }}</p>
            <p>Total: {{ number_format($order['total'], 2) }}</p>
            
            <p>Shipping Address:</p>
            <p>{{ $order['payer']['address']['address'] }}</p>
            <p>{{ $order['payer']['address']['city'] }} {{ $order['payer']['address']['postcode'] }}</p>

            @if($order['notice'])
                <p>Extra info: {{ $order['notice'] }}</p>
            @endif
        
        </div>
    </body>
</html>

