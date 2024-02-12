<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Show product</title>
</head>

<body>
    <h1>Title: <?php echo e($product -> title); ?></h1>
    <ul>
        <li>Design: <?php echo e($product -> design); ?></li>
        <li>Description: <?php echo e($product -> description); ?></li>
        <li>Lot Area: <?php echo e($product -> lot_area); ?></li>
        <li>Product Name: <?php echo e($product -> storey_id); ?></li>
        <li>3D Image: <img src="<?php echo e(asset('img/products/' . $product->image_3d)); ?>" width="100px" alt="3D Image"></li>
        <li>Floor Plan Image: <img src="<?php echo e(asset('img/products/' . $product->floor_plan_image)); ?>" width="100px" alt="Floor Plan Image"></li>
        <li>Interior Image: <img src="<?php echo e(asset('img/products/' . $product->interior_image)); ?>" width="100px" alt="Interior Image"></li>
        <li>
            <h1>3D price: <?php echo e($product -> one_flr_price); ?></h1>
        </li>
        <li>
            <h1><?php echo e($product -> two_flr_price); ?></h1>
        </li>
        <li>
            <h1><?php echo e($product -> three_flr_price); ?></h1>
        </li>
    </ul>
</body>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/product_show.blade.php ENDPATH**/ ?>