<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- <link rel="stylesheet" href="/css/navbar_admin.css"> -->
    <title>Admin</title>
</head>

<body>
    <h1>hello</h1>
    @include('layouts/navbar')

    <div class="container">
        <h1>Total Admin: {{$total_admin -> total}}</h1>
        <a href="/register/admin" class="btn btn-success">+ Add</a>
        <div class="row">
            <table class="table">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
                @foreach ($admin as $a)
                <tr>
                    <td>{{$a -> first_name}}</td>
                    <td>{{$a -> last_name}}</td>
                    <td>{{$a -> email}}</td>
                    <td><a href="/admin/accounts/{{$a -> user_id}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#delete_{{$a -> user_id}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>

                    <!-- delete modal -->
                    <div class="modal fade" id="delete_{{$a -> user_id}}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete {{$a -> account_type}} ({{$a -> last_name}}, {{$a -> first_name}})</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">Once this action is taken, it cannot be undone.
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <form action="/admin/accounts/{{$a -> user_id}}" method="POST">
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

</body>

</html>