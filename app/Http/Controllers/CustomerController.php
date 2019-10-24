<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->middleware('auth');
        $this->customer = $customer;
    }

    public function index()
    {
        $customers = $this->customer->all();
        return view('customers.show_list_customer', compact('customers'));
    }

    public function formCreate()
    {
        return view('customers.formCreate');
    }

    public function create(Request $request)
    {
        $this->customer->create([
            'name' => $request->name,
            'age' => $request->age,
            'province' => $request->province
        ]);
        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        $customer = $this->customer->find($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
