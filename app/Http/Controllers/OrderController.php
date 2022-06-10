<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Notifications\OrderPlacedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    public function store($customer_email, $product_name, $quantity)
    {
        $order = Order::create([
            'customer_email' => $customer_email,
            'product_name' => $product_name,
            'quantity' => $quantity
        ]);
//        $recipient = 'manuela.vlasin@yahoo.com';
        Notification::route('mail', $customer_email)->notify(new OrderPlacedNotification($order['id']));

    }
}
