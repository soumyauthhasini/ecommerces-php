<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php 
    session_start();
    if($_SESSION['cart']){
        $cartCount = count($_SESSION['cart']);
    }else{
        $cartCount = 0;
    }
?>
    <body>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">E-Shop</a>
                <a href="../user/index.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-house"></i> Home</a>
                <a href="../user/viewCart.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i> Cart(<?=$cartCount;?>)</a>

                <div class="d-flex">
                    <span class="text-warning pe-2">
                    <?php if($_SESSION['admin']){?>
                        <i class="fa-solid fa-user"></i> Hello, <?=$_SESSION['admin'];?>
                        
                            <a href="logout.php" class="text-warning text-decoration-none pe-2"> <i class="fa-solid fa-right-to-bracket"></i> Logout</a>
                        <?php }else{ ?>
                            <a href="form/login.php" class="text-warning text-decoration-none pe-2"> <i class="fa-solid fa-right-to-bracket"></i> Login</a>
                        <?php } ?>
                        <a href="../admin/form/login.php" class="text-warning text-decoration-none pe-2">Admin</a>
                    </span>
                </div>
            </div>
        </nav>
       
