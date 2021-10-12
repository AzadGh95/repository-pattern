<?php

interface CustomerRepositoryInterface
{
    public function all();

    public function findById($customer_id);

    public function findByUsername();

    public function format($customer);

    public function update($customer_id);

    public function delete($customer_id);
}
