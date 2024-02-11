<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Order</title>
</head>

<body>
    <h1>Show Order</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o->name}}</td>
            <td>{{$o->quantity}}</td>
            <td>₱{{$o->price}}</td>
            <td>₱{{$o->price * $o->quantity}}</td>
        </tr>
        @endforeach
    </table>
    <h2>Update Order Status</h2>
    <p>Status: {{$user_info->status}}</p>
    @if ($user_info->status == "pending")
<<<<<<< HEAD
    <form action="/admin/orders/accept/{{$orders[0]->order_id}}" method="POST">
=======
    <form action="{{route('show_order', $user_info->order_id)}}" method="PUT">
>>>>>>> 59abac7dbe24921ae12820f4bb4acb8c30264ab9
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-success">Accept Order</button>
    </form>
    @else
<<<<<<< HEAD
    <form action="/admin/orders/status/{{$orders[0]->order_id}}" method="POST">
=======
    <form action="{{route('accept_order', $user_info->order_id)}}" method="POST">
>>>>>>> 59abac7dbe24921ae12820f4bb4acb8c30264ab9
        @csrf
        @method('PUT')
        <select name="status">
            <option value="accepted">Accepted</option>
            <option value="preparing">Preparing</option>
            <option value="delivering">Delivering</option>
            <option value="delivered">Delivered</option>
        </select>
        <input type="submit" class="btn btn-success" value="Update Status" />
    </form>
    @endif
</body>

</html>