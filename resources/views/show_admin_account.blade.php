<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ACCOUNT ID: {{$user -> user_id}}</h1>
    <ul>
        <li>NAME: {{$user -> last_name}}, {{$user -> first_name}}</li>
        <li>EMAIL: {{$user -> email}}</li>
    </ul>
</body>

</html>