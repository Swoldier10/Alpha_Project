<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.products.products')->extends('layouts.app')
            ->section('content');
    }
}
