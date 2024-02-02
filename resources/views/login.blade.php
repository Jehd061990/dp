<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/login" method="POST">
        @csrf
        <label>Email address: </label>
        <input type="email" name="email" /><br />
        <label>Password: </label>
        <input type="password" name="pw" /><br />
        <input type="submit" class="btn btn-primary" />
    </form>
</body>

</html>