<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <h1>products</h1>
    <a href="products/create" class="btn btn-success">+ Add</a>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Design</th>
            <th>Description</th>
            <th>Lot Area</th>
            <th>3D Image</th>
            <th>Floor Plan Image</th>
            <th>Interior Image</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($product as $p)
        <tr>
            <td>{{$p -> title}}</td>
            <td>{{$p -> design}}</td>
            <td>{{$p -> description}}</td>
            <td>{{$p -> lot_area}}</td>
            <td><img src="{{ asset('img/products/' . $p->image_3d) }}" width="100px" alt="3D Image"></td>
            <td><img src="{{ asset('img/products/' . $p->floor_plan_image) }}" width="100px" alt="Floor Plan Image"></td>
            <td><img src="{{ asset('img/products/' . $p->interior_image) }}" width="100px" alt="Interior Image"></td>
            <td><a href="" class="btn btn-primary">View</a></td>
            <td><a href="" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete" />
                </form>
            </td>
        </tr>
        @endforeach
    </table>


</html>