<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        if(isset($_POST['login'])){
            $conn = mysqli_connect('localhost', 'root', '', 'ecommerces');
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM admin WHERE `username` = '$username' AND `password` = '$password'";
            $query = mysqli_query($conn, $sql);
            if(mysqli_num_rows($query)){
                session_start();
                $_SESSION['admin'] = $username;
                header('Location: ../mystore.php');
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Login Admin</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Name: </label>
                        <input name="username" type="text" class="form-control" placeholder="Enter User Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password: </label>
                        <input name="password" type="text" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="col-12 mb-3">
                        <button type="submit" name="login" class="btn btn-danger">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


</body>
</html>