<?php namespace App;

class Price {

    protected $cartons;

	protected $price = 600;

    protected $tax;

    public function __construct($cartons, $tax=7)
    {
        $this->cartons = $cartons;
        $this->tax = $tax;
    }

    public function calculate()
    {
        return $this->price * $this->cartons;
    }

    public function each()
    {
        if($this->cartons >=  8 && $this->cartons < 12) 
        {
            $this->price = 540;
        }
        elseif($this->cartons >= 12)
        {
            $this->price = 480;
        }

        return $this->price;
    }

    public function quantity()
    {
        return $this->cartons;
    }

    public function tax()
    {
        return ($this->tax / 100) * $this->calculate;
    }

    public function total()
    {
        return $this->calculate + $this->tax();
    }

    public function __get($key)
    {
        if(method_exists($this, $key))
        {
            return call_user_func_array([$this, $key], []);
        }

        throw new BadMethodCallException;
    }
}
