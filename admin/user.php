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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <table class="table table-hover">
                        <thead>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Delete</td>
                        </thead>
                        <tbody>
                            <?php 
                                 include('product/config.php');
                                 $query = mysqli_query($conn, "SELECT * FROM tbluser");
                                    while($row = mysqli_fetch_array($query)):
                                    echo "
                                    <tr>
                                        <td>$row[id]</td>
                                        <td>$row[username]</td>
                                        <td>$row[useremail]</td>
                                        <td>$row[userno]</td>
                                        <td><a href='delete.php?delid=$row[id]'>Delete</a></td> 
                                        </tr>
                                        ";
                                endwhile;
                            ?>
                        </tbody>
                    </table> 
            </div>
            <div class="col-md-4">
                <h2>Total User: <?=mysqli_num_rows($query);?></h2>
            </div>
        </div>
    </div>
</body>
</html>