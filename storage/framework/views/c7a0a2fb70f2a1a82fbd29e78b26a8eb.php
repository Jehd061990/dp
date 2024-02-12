<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Product</title>
</head>

<body>
    <!-- edit modal -->
    <h1>Edit <?php echo e($product -> title); ?> (<?php echo e($product -> product_id); ?>)</h1>
    <form action="/admin/products/<?php echo e($product -> product_id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo e($product -> title); ?>" /><br />
        <label>Design:</label>
        <input type="text" name="design" value="<?php echo e($product -> design); ?>" /><br />
        <label>Description:</label>
        <input type="text" name="description" value="<?php echo e($product -> description); ?>" /><br />
        <label>Lot Area:</label>
        <input type="text" name="lot_area" value="<?php echo e($product -> lot_area); ?>" /><br />
        <label>Product name:</label>
        <select name="storey_id">
            <option value="<?php echo e($product -> storey_id); ?>"><?php echo e($product -> storey_id); ?></option>
            <option disabled>-----------</option>
            <option value="1">3D Perspective</option>
            <option value="2">Floor Plan</option>
            <option value="3">Interior</option>
            <option value="4">Full sets of plans</option>
        </select><br />
        <label>3D image:</label>
        <input type="file" name="image_3d" value="<?php echo e($product -> image_3d); ?>" /><br />
        <label>Floor Plan Image:</label>
        <input type="file" name="floor_plan_image" value="<?php echo e($product -> floor_plan_image); ?>" /><br />
        <label>Interior Image:</label>
        <input type="file" name="interior_image" value="<?php echo e($product -> interior_image); ?>" /><br />
        <input type="submit" class="btn btn-success">
    </form>
</body>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/product_edit.blade.php ENDPATH**/ ?>