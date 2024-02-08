<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="{{ asset('img/admin.png') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Account</title>
</head>

<body>
    <h1>Admin Accounts</h1>
    <h1>ACCOUNT ID: {{$user -> user_id}}</h1>
    <ul>
        <li>NAME: {{$user -> last_name}}, {{$user -> first_name}}</li>
        <li>EMAIL: {{$user -> email}}</li>
    </ul>
</body>

</html>