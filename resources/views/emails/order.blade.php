New Order

Name: {{ $order['payer']['firstname']}} {{ $order['payer']['lastname'] }} <{{ $order['payer']['email']}}>

Quantity: {{ $order['quantity'] }}
Total: {{ $order['total'] }}

Shipping Address: 
{{ $order['payer']['address']['address'] }}
{{ $order['payer']['address']['city'] }} {{ $order['payer']['address']['postcode'] }}

@if($order['notice'])
Extra info: {{ $order['notice'] }}
@endif

