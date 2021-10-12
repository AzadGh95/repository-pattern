<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct(\CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        return $this->customerRepository->all();
    }

    public function show($customer_id)
    {
        return $this->customerRepository->findById($customer_id);
    }

    public function update($customer_id)
    {
        $this->customerRepository->update($customer_id);
        return redirect('/customer/' . $customer_id);
    }

    public function delete($customer_id)
    {
        $this->customerRepository->delete($customer_id);
        return redirect('/');
    }
}
