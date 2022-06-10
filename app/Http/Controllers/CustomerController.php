<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store($name, $email, $address)
    {
        if (Customer::all()->where('email', $email)->count() === 0) {
            Customer::create([
                'name' => $name,
                'email' => $email,
                'address' => $address
            ]);
            return response()->json([
                "message" => "Kunde wurde erstellt"
            ], 201);
        }
    }
}
