<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header')
    <title>Your Cart</title>
</head>

<body>
    <div class="container">
        @if ($cartItems->isNotEmpty())
        <form action="/checkout" method="POST">
            @csrf
            <div class="row">
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Design</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @php
                    $totalPrice = 0; // Initialize total price variable
                    @endphp
                    @foreach($cartItems as $item)
                    <tr>
                        <td>{{$item -> title}}</td>
                        <td>{{$item -> design}}</td>
                        <td>{{$item -> price}}</td>
                        <td>
                            <a data-bs-toggle="modal" data-bs-target="#delete_{{$item -> cart_id}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    @php
                    $totalPrice += $item->price; // Add item price to total price
                    @endphp
                    @endforeach
                </table>
                <div class="text-center">
                    <label>TOTAL PRICE: PHP <strong>{{ $totalPrice }}</strong></label>
                    <input type="submit" class="btn btn-primary" value="Check Out"> <!-- Changed to input type submit for Check Out button -->
                </div>
        </form>

        <!-- delete modal -->
        <div class="modal fade" id="delete_{{$item -> cart_id}}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete item</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">Once this action is taken, it cannot be undone.
                        <div class="modal-footer">

                            <form action="{{route('delete_cart',$item->cart_id)}}" method="POST">
                                <button type="button" onclick="window.location='/cart'">Cancel</button>
                                @csrf
                                @method('DELETE')
                                <input class=" btn btn-danger" type="submit" value="Delete" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else
        <p>Your cart is empty.</p>
        @endif
    </div>
</body>

</html>