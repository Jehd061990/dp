<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Show product</title>
</head>

<body>
    <h1>Title: {{$product -> title}}</h1>
    <ul>
        <li>Design: {{$product -> design}}</li>
        <li>Description: {{$product -> description}}</li>
        <li>Lot Area: {{$product -> lot_area}}</li>
        <li>Product Name: {{$product -> storey_id}}</li>
        <li>3D Image: <img src="{{ asset('img/products/' . $product->image_3d) }}" width="100px" alt="3D Image"></li>
        <li>Floor Plan Image: <img src="{{ asset('img/products/' . $product->floor_plan_image) }}" width="100px" alt="Floor Plan Image"></li>
        <li>Interior Image: <img src="{{ asset('img/products/' . $product->interior_image) }}" width="100px" alt="Interior Image"></li>
        <li>
            <h1>Storey Type: {{$product -> floor_type}}</h1>
        </li>
        <li>
            <h1>3D Price: {{$product -> perspective_3d_price}}</h1>
        </li>
        <li>
            <h1>Floor Plan Price: {{$product -> floor_plan_price}}</h1>
        </li>
        <li>
            <h1>Interior Plan Price: {{$product -> interior_price}}</h1>
        </li>
        <li>
            <h1>Full Set Plan Price: {{$product -> full_set_price}}</h1>
        </li>
    </ul>
</body>

</html>