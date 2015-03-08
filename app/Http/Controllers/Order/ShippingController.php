<?php namespace App\Http\Controllers\Order;

use App\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Session\Store; 

class ShippingController extends Controller {

    /**
     * @var Store
     */
    protected $session;

    public function __construct(Store $session) 
    {
        $this->session = $session;
    }

	public function index(Request $request)
    {
        if(!$this->session->has('order.confirmed'))
        {
            return redirect()->route('order_confirm');
        }

        $address = new Address($this->session->get('order.payer', []));

        return view('orders.steps.shipping', compact('address'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
        ]);

        $this->session->put('order.payer', 
            $request->only('firstname', 'lastname', 'email', 'mobile' )
        );

        $this->session->put('order.payer.address', 
            $request->only('address', 'city', 'postcode')
        );

        $this->session->put('order.notice', $request->notice);

        return redirect()->route('order_payment');
    }
}
