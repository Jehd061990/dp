<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add New Product</h1>
    <form action="/admin/products" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Storey:</label>
        <input type="text" name="storey" /><br />
        <label>Title:</label>
        <input type="text" name="title" /><br />
        <label>Design:</label>
        <input type="text" name="design" /><br />
        <label>Description:</label>
        <input type="text" name="description" /><br />
        <label>Lot Area:</label>
        <input type="text" name="lot_area" /><br />
        <label>Product Name:</label>
        <select name="storey_id">
            <option value="1">3D Perspective</option>
            <option value="2">Floor Plan</option>
            <option value="3">Interior</option>
            <option value="4">Full sets of plans</option>
        </select><br />
        <label>3D Image:</label>
        <input type="file" name="image_3d" /><br />
        <label>Floor Plan Image:</label>
        <input type="file" name="floor_plan_image" /><br />
        <label>Interior Image:</label>
        <input type="file" name="interior_image" /><br />
        <input type="submit" class="btn btn-success">
    </form>
</body>

</html>

<!-- $product = new Product;
        $product = new ProductType;
        $product->storey = $r->input('storey');
        $product->design = $r->input('design');
        $product->description = $r->input('description');
        $product->lot_area = $r->input('lot_area');
        $product->floor_plan_image = $r->input('floor_plan_image');
        $product->interior_image = $r->input('interior_image');
        $product->title = $r->input('title');
        $product->product_name = $r->input('product_name'); -->