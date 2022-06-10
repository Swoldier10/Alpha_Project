@include('users.partials.header', [
    'title' => __('Open Orders'),
    'description' => __('Here you can see all orders, which are yet to be processed'),
    'class' => 'col-lg-7'
])
<div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Customer</th>
            <th scope="col">Produkt</th>
            <th scope="col">Menge</th>
        </tr>
        </thead>
        <tbody>
        @foreach(\App\Models\Order::all() as $order)
        <tr>
            <th scope="row">{{$order['id']}}</th>
            <td>{{$order['customer_email']}}</td>
            <td>{{$order['product_name']}}</td>
            <td>{{$order['quantity']}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
