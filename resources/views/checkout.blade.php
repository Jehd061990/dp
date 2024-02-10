<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Orders</h1>
    @if (count($orders) > 0)
    <table class="table">
        <tr>
            <th>Order ID</th>
            <th>Time Placed</th>
            <th>Status</th>
            <th>View Items</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o -> order_id}}</td>
            <td>{{$o -> time_placed}}</td>
            <td>{{$o -> status}}</td>
            <td><a href="/checkout/{{$o -> order_id}}" class="btn btn-success">View</a></td>
        </tr>
        @endforeach
    </table>
    @else
    <p>No orders yet! <a href="/product">Check our products.</a></p>
    @endif
</body>

</html>