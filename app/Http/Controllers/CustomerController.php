<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\CreateCustomerRequest;
use App\Http\Resources\Customer\CustomerResource;
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

    public function index()
    {
        $customers = Customer::all();

        return view('Customers.get-list', ['customers' => $customers]);
    }

    public function create()
    {
        return view('Customers.create');
    }

    public function insert(CreateCustomerRequest $request)
    {        
        $customer = Customer::create($request->validated());

        if ($customer) {
            return redirect()->back()->with([
                'success' => 'Da tao customer thanh cong'
            ]);
        }

        return redirect()->back()->with([
            'fail' => 'Da tao customer that bai'
        ]);
    }

    public function show(Customer $customer)
    {        
        return view('customers.detail', ['customer' => $customer]);
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', ['customer' => $customer]);
    }

    public function update(Customer $customer, CreateCustomerRequest $request)
    {
        $check = $customer->update($request->validated());

        if ($check) {
            return redirect()->back()->with([
                'success' => 'Chinh sua customer thanh cong'
            ]);
        }

        return redirect()->back()->with([
            'fail' => 'Chinh sua customer that bai'
        ]);
    }
    
    public function store(CreateCustomerRequest $request)
    {
        // normal
        try {
            $customer = Customer::create($request->validated());

            if ($customer) {
                return response()->json([
                    'code' => 200,
                    'data' => new CustomerResource($customer),
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
