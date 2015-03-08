<?php namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Session\Store; 

class OrdersController extends Controller {

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
        if($this->session->has('order.quantity'))
        {
            return redirect()->route('order_confirm');
        }

        return view('orders.steps.quantity');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cartons' => 'required|integer|minimum_order'
        ]);

        $this->session->put('order.quantity', (int) $request->cartons);  

        return redirect()->route('order_confirm');
    }
}
