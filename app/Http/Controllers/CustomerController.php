<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\CreateCustomerRequest;
use App\Models\Customer;
use App\Service\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    
    public function store(CreateCustomerRequest $request)
    {
        // normal
        try {
            $customer = Customer::create($request->validated());

            if ($customer) {
                return response()->json([
                    'code' => 200,
                    'data' => $customer,
                    'message' => 'create customer success'
                ]);
            }

            return response()->json([
                'code' => 400,
                'message' => 'create customer fail'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'message' => 'create customer fail'
            ]);
        }

        // Service pattern
        // $data = $this->customerService->create($request->validated());

        // if ($data) {
        //     return response()->json([
        //         'code' => 200,
        //         'data' => $data,
        //         'message' => 'create customer success'
        //     ]);
        // }

        // return response()->json([
        //     'code' => 400,
        //     'message' => 'create customer fail'
        // ]);
    }
}
