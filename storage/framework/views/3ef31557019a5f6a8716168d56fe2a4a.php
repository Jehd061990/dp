<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form action="/register" method="POST">
        <?php echo csrf_field(); ?>
        <label>First name:</label>
        <input type="text" name="first_name" /><br />
        <label>Last name:</label>
        <input type="text" name="last_name" /><br />
        <label>Email address:</label>
        <input type="email" name="email" /><br />
        <label>Password:</label>
        <input type="password" name="pw" /><br />

        <label>Confirm password:</label>
        <input type="password" name="con_pw" /><br />
        <input type="submit" class="btn btn-success" />
    </form>
</body>

</html><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/register.blade.php ENDPATH**/ ?>