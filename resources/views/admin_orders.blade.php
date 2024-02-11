<!DOCTYPE html>
<html lang="en">
@include ('layouts/header')

<head>
    @include('layouts/header_superadmin')
    <title>Orders</title>
</head>

<body class="admin_orders_body">
    @include('layouts/navbar_superadmin')
    <button type="button" class="btn btn-outline-dark can_del_ad_ord d-flex justify-content-center align-items-center" onclick="goBack()"><span class="material-symbols-outlined">
            arrow_back
        </span></button>
    <h1 class="title_orders">Orders</h1>
    <table class="table_admin_orders">
        <tr>
            <th class="th_admin_orders">Order ID</th>
            <th class="th_admin_orders">Time Placed</th>
            <th class="th_admin_orders">Status</th>
            <th class="th_admin_orders">Name</th>
            <th class="th_admin_orders">View Order</th>
            <th class="th_admin_orders">Generate Order</th>

        </tr>
        @foreach ($orders as $o)
        <tr>
            <td class="td_admin_orders">{{$o -> order_id}}</td>
            <td class="td_admin_orders">{{$o -> time_placed}}</td>
            <td class="td_admin_orders">{{$o -> status}}</td>
            <td class="td_admin_orders">{{$o -> last_name}}, {{$o -> first_name}}</td>
            <td class="td_admin_orders"><a class="a_orders_admin" href="/admin/orders/{{ $o->order_id }}/view" class="btn btn-success">View</a></td>
            <td class="td_admin_orders"><a href="/admin/orders/{{ $o->order_id }}/generate-order" class="btn btn-primary">Generate Order</a></td>
        </tr>
        @endforeach
    </table>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>