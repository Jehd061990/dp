<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Orders</title>
</head>

<body>
    <h1>My Orders</h1>
    @if (!empty($order))
    <table class="table">
        <tr>
            <th>Order ID</th>
            <th>Time Placed</th>
            <th>Status</th>
        </tr>
        @foreach ($order as $o)
        <tr>
            <td>{{$o->order_id}}</td>
            <td>{{$o->time_placed}}</td>
            <td>{{$o->status}}</td>
        </tr>
        @endforeach
    </table>
    @else
    <p>No orders found.</p>
    @endif
</body>

</html>