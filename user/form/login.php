<?php
    include('../header.php');
    if(isset($_POST['login'])){
        include('../config.php');
        $username  = $_POST['username'];
        $password  = $_POST['password'];

        $check_user = mysqli_query($conn, "SELECT * FROM tbluser WHERE (username = '$username' OR useremail = '$username') AND password = '$password'");
        if(mysqli_num_rows($check_user)){
            session_start();
            $_SESSION['admin'] = $username;
            header("Location: ../index.php");
        }else{
            echo "
                <script>
                    alert('Login Failed');
                    window.location.href='login.php';
                </script>
            ";
        }
    }
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="" method="POST">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">User Register Form</p>
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

<?php include('footer.php');?>