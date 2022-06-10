<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;

class OpenOrders extends Component
{

    public function render()
    {
        return view('livewire.orders.open-orders')->extends('layouts.app')
            ->section('content');
    }
}
