<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header_superadmin')
    <title>ORDERS</title>
</head>

<body class="admin-products d-flex justify-content-between">
    @include('layouts/navbar_superadmin')
    <h1>Show Order</h1>
    <a href="/admin/generate/order" class="btn btn-primary"> Generate report </a> </p>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Design</th>
            <th>Description</th>
            <th>3D Image</th>
            <th>Floor Plan Image</th>
            <th>Interior Image</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o->title}}</td>
            <td>{{$o->design}}</td>
            <td>{{$o->description}}</td>
            <td><img src="{{ asset('img/products/' . $o->image_3d) }}"></td>
            <td><img src="{{ asset('img/products/' . $o->floor_plan_image) }}"></td>
            <td><img src="{{ asset('img/products/' . $o->interior_image) }}"></td>
        </tr>
        @endforeach
    </table>
    <h2>Update Order Status</h2>
    <p>Status: {{$user_info->status}}</p>
    @if ($user_info->status == "pending")
    <form action="{{route('accept_order', $user_info->order_id)}}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-success">Accept Order</button>
    </form>
    @else
    <form action="{{route('update_order_status', $user_info->order_id)}}" method="POST">
        @csrf
        @method('PUT')
        <select name="status">
            <option value="">Please select status...</option>
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