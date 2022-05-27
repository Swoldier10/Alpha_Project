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
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['Name']}}</td>
                    <td>{{$product['Typ']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
