<?php
    if(isset($_GET['delid'])){
        $id = $_GET['delid'];
        include('product/config.php');
        $del = mysqli_query($conn, "DELETE FROM tbluser WHERE id=$id");
        header('Location: user.php');
    }