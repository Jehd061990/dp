<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
</head>

<body>

    <div class="container mt-5">
        <h1>YOUR CART</h1>

        @if ($cartItems->isNotEmpty())
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Design</th>
                    <th>Price</th>
                    <th>Variants</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->design }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Your cart is empty.</p>
        @endif
    </div>
</body>

</html>