<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products = [];
    public function render()
    {
        return view('livewire.products.products')->extends('layouts.app')
            ->section('content');
    }

    public function mount(){
        $this->products = Product::all();
    }
}
