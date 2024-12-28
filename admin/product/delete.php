<?php
    if(isset($_GET['delid'])){
        include('config.php');
        $delId = $_GET['delid'];
        $query = mysqli_query($conn, "DELETE FROM tblproduct WHERE id = $delId");
        header("Location: index.php");
    }