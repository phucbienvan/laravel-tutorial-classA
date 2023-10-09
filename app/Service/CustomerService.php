<?php

namespace App\Service;

use App\Models\Customer;

class CustomerService {
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function create($params)
    {
        try {
            $customer = $this->customer::create($params);

            return $customer;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
