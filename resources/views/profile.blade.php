<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Profile</title>
</head>

<body>
    <h1>Your Profile</h1>


    <!-- <a href="/profile/edit/{{$user -> user_id}}" class="btn btn-warning">Edit</a> -->
    <!--     
    <a href="/logout">Logout</a> -->

    <form id="edit_profile_form" action="{{ url('/profile/'.$user->user_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h2>{{$user -> first_name}}</h2>
        <label for="email">First Name:</label>
        <input type="text" name="first_name" value="{{ $user->first_name }}" required disabled>

        <label for="email">Last Name:</label>
        <input type="text" name="last_name" value="{{ $user->last_name }}" required disabled>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required disabled>

        <button type="button" id="edit_button" class="btn btn-warning">Edit</button>
        <button type="submit" style="display: none;" id="save_button" class="btn btn-success">Save Changes</button>
    </form>

    <script>
        $(document).ready(function() {
            $('#edit_button').click(function() {
                $('#edit_profile_form input').prop('disabled', false);

                $('#edit_button').hide();
                $('#save_button').show();
            });
        });
    </script>

</body>

</html>