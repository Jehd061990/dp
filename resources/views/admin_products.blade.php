<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/navbar_admin.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>products</h1>
        <a href="/admin/products/create" class="btn btn-success">+ Add</a>
        <div class="row">

            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Design</th>
                    <th>Description</th>
                    <th>Lot Area</th>
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
                    <td><a href="/admin/products/{{$p -> product_id}}" class="btn btn-primary">View</a></td>
                    <td><a href="/admin/products/edit/{{$p -> product_id}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#delete_{{$p -> product_id}}" class="btn btn-danger">Delete</a>
                    </td>

                    <!-- delete modal -->
                    <div class="modal fade" id="delete_{{$p -> product_id}}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete {{$p -> title}} ({{$p -> product_id}})</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">Once this action is taken, it cannot be undone.
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <form action="/admin/products/{{$p -> product_id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                @endforeach
            </table>


        </div>
    </div>


</html>