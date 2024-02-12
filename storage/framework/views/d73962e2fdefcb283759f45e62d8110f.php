<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Your Cart</title>
    <style>

    </style>
</head>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<body class="addtocart_body">
    <?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-add_to">
        <?php if($cartItems->isNotEmpty()): ?>
        <form action="/checkout" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <table class="table_add">
                    <thead>
                        <tr>
                            <th class="th_add_to">Title</th>
                            <th class="th_add_to">Design</th>
                            <th class="th_add_to">Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $totalPrice = 0; ?>
                        <div>
                            <button type="button" class="btn btn-outline-dark can_del d-flex justify-content-center align-items-center" onclick="goBack()"><span class="material-symbols-outlined">
                                    arrow_back
                                </span></button>
                        </div>

                        <h2 class="add_head">Add to cart</h2>
                        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <input type="text" value="<?php echo e($item -> cart_id); ?>" name="cart_<?php echo e($loop->index + 1); ?>" hidden>
                            <td class="td_add_to"><img src="<?php echo e($item -> image_3D); ?>" /><?php echo e($item -> storey_id); ?> <?php echo e($item -> title); ?> (<?php echo e($item -> lot_area); ?>)</td>
                            <td class="td_add_to"><?php echo e($item -> design); ?></td>
                            <div>
                                <td class="td_add_to"><?php echo e("₱" . number_format($item->price, 2, '.', ',')); ?><button type="button" class="delete-btn delete_add_to" id="delete_add_to_<?php echo e($item->cart_id); ?>" data-bs-toggle="modal" data-bs-target="#delete_<?php echo e($item -> cart_id); ?>">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button></td>
                            </div>

                        </tr>
                        <?php $totalPrice += $item->price; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="text-center_add">
                    <label>TOTAL PRICE: PHP <strong><?php echo e("₱" . number_format($totalPrice), 2, '.', ','); ?></strong></label>
                    <button type="submit" class="checkout-btn">Checkout</button>
                </div>
            </div>
        </form>

        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- delete modal -->
        <div class="modal fade" id="delete_<?php echo e($item -> cart_id); ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        Once this action is taken, it cannot be undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn can_del" data-bs-dismiss="modal">Cancel</button>
                        <form action="<?php echo e(route('delete_cart', $item->cart_id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger can_del" type="submit" value="Delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>
        <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
    <div>

        <footer class="add_footer">
            <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>

</body>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/add_to_cart.blade.php ENDPATH**/ ?>