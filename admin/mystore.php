<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php 
        session_start();
        if(!$_SESSION['admin']){
            header("Location: form/login.php");
        }
    ?>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>MyStore</h1></a>
    <span class="text-white">
    <i class="fa-solid fa-user"></i>
        Hello, <?=$_SESSION['admin'];?>
       | <i class="fa-solid fa-right-from-bracket"></i>
        <a href="form/logout.php" class="text-white text-decoration-none">Logout</a> |
        <a href="http://" class="text-white text-decoration-none">Userpanel</a>
    </span>
  </div>
</nav>

    <div>
        <h2 class="text-center">Dashboard</h2>
    </div>
    <div class="col-md-6 text-center bg-danger m-auto">
        <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
        <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
    </div>
</body>
</html>