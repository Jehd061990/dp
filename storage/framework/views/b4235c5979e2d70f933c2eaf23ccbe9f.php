<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts/header_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>PRODUCTS</title>
</head>


    <?php if(Session::get('account_type')!='admin'): ?>
<body class="admin-products d-flex justify-content-between">
        <?php echo $__env->make('layouts/navbar_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
<body class="d-flex justify-content-between">
        <?php echo $__env->make('layouts/navbar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <div class="container">
        <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <?php echo e(session()->get('message')); ?>

        </div>
        <?php endif; ?>
        <!-- <h1>Productsss</h1> -->
        <div class="d-flex justify-content-end">
            <div class="add-product mt-3 mb-3 text-center">
                <a href="/admin/products/create">+ Add Products</a>
            </div>
        </div>

        <div class="row">

            <table class="table w-auto">
                <tr class="tr-head">
                    <th class="fixed-th-title">Title</th>
                    <th>Design</th>
                    <th>Description</th>
                    <th class="fixed-th">Lot Area</th>
                    <th class="fixed-th">Action</th>
                </tr>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($p -> title); ?></td>
                    <td><?php echo e($p -> design); ?></td>
                    <td><?php echo e($p -> description); ?></td>
                    <td><?php echo e($p -> lot_area); ?></td>
                    <td>
                        <div class="prod sdropdown">
                            <!-- <button data-bs-toggle="dropdown" aria-expanded="false"> -->
                            <button data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">
                                    more_vert
                                </span>
                            </button>
                            <ul class="dropdown-menu text-center">
                                <!-- <h6> <b>FIRST NAME</b></h6> -->
                                <li><a class="dropdown-item" href="/admin/products/<?php echo e($p -> product_id); ?>" class="btn btn-primary">View</a></li>
                                <li><a class="dropdown-item" href="/admin/products/edit/<?php echo e($p -> product_id); ?>" class="btn btn-warning">Edit</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete_<?php echo e($p -> product_id); ?>" class="btn btn-danger">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                    <!-- <td><a href="/admin/products/<?php echo e($p -> product_id); ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a href="/admin/products/edit/<?php echo e($p -> product_id); ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#delete_<?php echo e($p -> product_id); ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td> -->

                    <!-- delete modal -->
                    <div class="modal fade" id="delete_<?php echo e($p -> product_id); ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete <?php echo e($p -> title); ?> (<?php echo e($p -> product_id); ?>)</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">Once this action is taken, it cannot be undone.
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <form action="/admin/products/<?php echo e($p -> product_id); ?>" method="POST">
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

        <div>
            <?php echo e($product->links('pagination::bootstrap-5')); ?>

        </div>
    </div>



</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/admin_products.blade.php ENDPATH**/ ?>