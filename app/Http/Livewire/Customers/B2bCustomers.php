<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;

class B2bCustomers extends Component
{
    public function render()
    {
        return view('livewire.customers.b2b-customers')->extends('layouts.app')
            ->section('content');
    }
}
