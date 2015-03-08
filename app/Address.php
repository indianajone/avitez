<?php namespace App;

class Address {

    protected $firstname;

    protected $lastname;

    protected $email;

    protected $mobile;

    protected $address;

    protected $city;

    protected $postcode;

    protected $notice;

    public function __construct($attributes=[])
    {
        $this->setAttributes($attributes);
    }

    public function get($attribute)
    {
        return property_exists($this, $attribute) ? $this->{$attribute} : null;
    }

    protected function setAttributes(array $attributes)
    {
        foreach ($attributes as $key => $value) 
        {
            if(is_array($value))
            {
                return $this->setAttributes($value);
            }

            if(property_exists($this, $key))
            {
                $this->{$key} = $value;
            }
        }
    }

    public function __get($key)
    {
        return $this->get($key);
    }

}