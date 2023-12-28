<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>User Login</h2>

        <form action="process.php" method="post">
            <input type="text" class="form-control" placeholder="Enter Username" name="user"><br>
            <input type="password" name="pwd" id="" class="form-control" placeholder="Enter password"><br><br>
            <button class="btn btn-primary" name="btn_login">Login</button>
            <p>Don't have an account? Register <a href="register.php">Here</a></p>
        </form>
    </div>
</body>
</html>