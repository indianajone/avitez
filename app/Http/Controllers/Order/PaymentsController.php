<?php namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Session\Store;
use Mustache\Billing\Factory as Billing;

class PaymentsController extends Controller {

    /**
     * @var Store
     */
    protected $session;

    /**
     * @var Mustache\Billing\Factory
     */
    protected $billing;

    public function __construct(Store $session,  Billing $billing) 
    {
        $this->session = $session;

        $this->billing = $billing;
    }

	public function index()
    {
        if(!$this->session->has('order.payer'))
        {
            return redirect()->route('order_shipping');
        }

        return view('orders.steps.payment');
    }

    public function store(Request $request)
    {
        // Get payment method from request.
        $this->session->put('driver', $request->payments);

        // Set Redirect HERE...
        $this->session->put('order.return_url', route('order_thanks'));

        // Get order value object from session "order"
        $order = $this->session->get('order');

        // precess to payment method.
        $url = $this->billing->driver($request->payments)->make($order);
        
        return redirect()->away($url);
    }

    public function thanks(Request $request, Mailer $mailer)
    {
        $provider = $this->billing->driver($this->session->get('driver'));
        
        if(!$success = $provider->execute($request->all())) 
        {
            return abort(404, 'Fail payment');
        }

        $order = $this->session->pull('order');

        $this->session->flush();

        // send email to both client and store.
        /*$mailer->send('emails.order', $order, function($message) use ($order)
        {
            $message->from($order['payer']['email'], $order['payer']['firstname']);

            $message->to('accounts@avitez.com')->subject('New Order');

        });*/
        
        return view('orders.steps.thankyou');
    }

    public function destroy()
    {
        return redirect()->route('order_shipping');
    }
}
