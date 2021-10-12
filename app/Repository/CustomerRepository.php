<?php


use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function all()
    {
        return Customer::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map->format();
    }

    public function findById($customer_id)
    {
        return Customer::where('id', $customer_id)
            ->where('active', 1)
            ->with('user')
            ->firstOrFail()
            ->format();
    }

    public function findByUsername()
    {
        //
    }

    public function format($customer)
    {
        return [
            'customer_id' => $customer->id,
            'name' => $customer->name,
            'created_by' => $customer->user->email,
            'last_updated' => $customer->updated_at->diffForHumans()
        ];
    }

    public function update($customer_id)
    {
        $customer = Customer::where('id', $customer_id)->firstOrFind();
        $customer->update(request()->only('name'));
    }

    public function delete($customer_id)
    {
        Customer::where('id', $customer_id)->delete();
    }
}
