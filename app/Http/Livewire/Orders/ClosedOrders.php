<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;

class ClosedOrders extends Component
{
    public function render()
    {
        return view('livewire.orders.closed-orders')->extends('layouts.app')
            ->section('content');
    }
}
