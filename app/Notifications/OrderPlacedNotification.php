<?php

namespace App\Notifications;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class OrderPlacedNotification extends Notification
{
    use Queueable;

    protected $product;
    protected $order;
    protected $customer;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order_id)
    {
        $order = Order::find($order_id);
        $this->order = $order;
        $this->product = Product::all()->where('name', $order->product_name)->first();
        $this->customer = Customer::all()->where('email', $order['customer_email'])->first();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $productName = $this->product['name'];
        return (new MailMessage)
            ->from('BeeKeeper.modellierungstools@gmail.com', 'Bee Keeper')
            ->greeting('Guten Tag,')
            ->line(new HtmlString("Wir haben Ihre Bestellung bekommen, diese enthalt folgendes Produkt: <span style='font-weight: bold'>$productName</span>"))
            ->attachData($this->overview_pdf($this->order), $this->order->customer_email . ".pdf");
    }

    public function overview_pdf($id)
    {
        $pdf = Pdf::loadView('pages.invoice_pdf', ['order' => $this->order, 'customer' => $this->customer])->setPaper('a4', 'portrait');
        $pdf->getDomPDF()->set_option("enable_php", true);
        return $pdf->output();
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
