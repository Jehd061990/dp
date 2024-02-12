<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<head>
    <?php echo $__env->make('layouts/header_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Orders</title>
</head>

<body class="d-flex justify-content-between">
    <?php if(Session::get('account_type') !== 'admin'): ?>
        <?php echo $__env->make('layouts/navbar_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('layouts/navbar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <div class="content-body">
        <h1>Orders</h1>
        <?php if($orders->isEmpty()): ?>
        <p>No orders available.</p>
        <?php else: ?>
        <table class="table">
            <tr>
                <th>Order ID</th>
                <th>Time Placed</th>
                <th>Status</th>
                <th>Name</th>
                <th>View Order</th>
                <th>Generate Order</th>
            </tr>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($o->order_id); ?></td>
                <td><?php echo e($o->time_placed); ?></td>
                <td><?php echo e($o->status); ?></td>
                <td><?php echo e($o->last_name); ?>, <?php echo e($o->first_name); ?></td>
                <td><a href="/admin/orders/<?php echo e($o->order_id); ?>/view" class="btn btn-success">View</a></td>
                <td><a href="/admin/orders/<?php echo e($o->order_id); ?>/generate-order" class="btn btn-primary">Generate Order</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php endif; ?>
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/admin_orders.blade.php ENDPATH**/ ?>