<div>
    @include('users.partials.header', [
        'title' => __('Products'),
        'description' => __('Here you can see all your products'),
        'class' => 'col-lg-7'
    ])
    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Typ</th>
                <th scope="col">Quantity</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['type']}}</td>
                    <td>{{number_format($product['quantity']/1000, 2, '.', ',')}} kg</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
