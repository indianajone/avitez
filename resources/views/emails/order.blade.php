New Order

Name: {{ $order['payer']['firstname']}} {{ $order['payer']['lastname'] }} <{{ $order['payer']['email']}}>

Shipping Address: 
{{ $order['payer']['address']['address'] }}
{{ $order['payer']['address']['city'] }} {{ $order['payer']['address']['postcode'] }}

@if($order['notice'])
Extra info: {{ $order['notice'] }}
@endif

