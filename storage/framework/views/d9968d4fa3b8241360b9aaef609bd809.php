<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts/header_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>ORDERS</title>
</head>

<body class="admin-products d-flex justify-content-between">
    <?php echo $__env->make('layouts/navbar_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($o->title); ?></td>
            <td><?php echo e($o->design); ?></td>
            <td><?php echo e($o->description); ?></td>
            <td><img src="<?php echo e(asset('img/products/' . $o->image_3d)); ?>"></td>
            <td><img src="<?php echo e(asset('img/products/' . $o->floor_plan_image)); ?>"></td>
            <td><img src="<?php echo e(asset('img/products/' . $o->interior_image)); ?>"></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <h2>Update Order Status</h2>
    <p>Status: <?php echo e($user_info->status); ?></p>
    <?php if($user_info->status == "pending"): ?>
    <form action="<?php echo e(route('accept_order', $user_info->order_id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <button type="submit" class="btn btn-success">Accept Order</button>
    </form>
    <?php else: ?>
    <form action="<?php echo e(route('update_order_status', $user_info->order_id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <select name="status">
            <option value="">Please select status...</option>
            <option value="accepted">Accepted</option>
            <option value="preparing">Preparing</option>
            <option value="delivering">Delivering</option>
            <option value="delivered">Delivered</option>
        </select>
        <input type="submit" class="btn btn-success" value="Update Status" />
    </form>
    <?php endif; ?>
</body>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/admin_show_order.blade.php ENDPATH**/ ?>