<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>

        <form action="process.php" method="post">

            <input type="text" class="form-control" placeholder="Enter Full Name" name="fname"><br>
            <input type="text" class="form-control" placeholder="Enter Username" name="user"><br>
            <select name="state" id="" class="form-select">
                <option value="">Select State</option>
                <option value="Katsina">Katsina</option>
                <option value="Kano">Kano</option>
            </select>
            <input type="password" name="pass" id="" class="form-control" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>
            <button class="btn btn-primary" name="btn_register" type="submit">Register</button>
            <p>Already have an account? Login <a href="login.php">Here</a></p>

        </form>
    </div>
</body>
</html>