<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts/header_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- <link rel="stylesheet" href="/css/navbar_admin.css"> -->
    <title>Admin</title>
</head>

<body class="admin-products d-flex justify-content-between">
    <?php echo $__env->make('layouts/navbar_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <?php echo e(session()->get('message')); ?>

        </div>
        <?php endif; ?>

        <h1>Total Admin: <?php echo e($total_admin -> total); ?></h1>
        <a href="/register/admin" class="btn btn-dark">+ Add</a>
        <div class="row">
            <table class="table">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
                <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($a -> first_name); ?></td>
                    <td><?php echo e($a -> last_name); ?></td>
                    <td><?php echo e($a -> email); ?></td>
                    <td><a href="/admin/accounts/<?php echo e($a -> user_id); ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#delete_<?php echo e($a -> user_id); ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>

                    <!-- delete modal -->
                    <div class="modal fade" id="delete_<?php echo e($a -> user_id); ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete <?php echo e($a -> account_type); ?> (<?php echo e($a -> last_name); ?>, <?php echo e($a -> first_name); ?>)</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">Once this action is taken, it cannot be undone.
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <form action="/admin/accounts/<?php echo e($a -> user_id); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>

</body>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/admin_show.blade.php ENDPATH**/ ?>