<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>

<body>

    <h1>Orders</h1>
    <table class="table">
        <tr>
            <th>Order ID</th>
            <th>Time Placed</th>
            <th>Status</th>
            <th>Name</th>
            <th>View Order</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o -> order_id}}</td>
            <td>{{$o -> time_placed}}</td>
            <td>{{$o -> status}}</td>
            <td>{{$o -> last_name}}, {{$o -> first_name}}</td>
            <td><a href="/admin/orders/{{$o -> order_id}}" class="btn btn-success">View</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>