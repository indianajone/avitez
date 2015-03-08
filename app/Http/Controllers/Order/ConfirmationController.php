<?php namespace App\Http\Controllers\Order;

use App\Price;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Session\Store; 

class ConfirmationController extends Controller {

    /**
     * @var Store
     */
    protected $session;

    public function __construct(Store $session) 
    {
        $this->session = $session;
    }

	public function index()
    {
        if(!$this->session->has('order.quantity'))
        {
            return redirect()->route('order_path');
        }

        $price = new Price($this->session->pull('order.quantity'));

        $this->session->put('order.description', '500ml (24 per pack) One-time delivery');

        $this->session->put('order.total', $price->total());

        return view('orders.steps.confirm', compact('price'));
    }

    public function store()
    {
        $this->session->put('order.confirmed', 1);

        return redirect()->route('order_shipping');
    }

    public function detroy()
    {
        $this->session->forget('order');

        return redirect()->route('order_path');
    }

}
