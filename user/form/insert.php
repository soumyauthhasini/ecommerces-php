<?php

    if(isset($_POST['register'])){
        include('../config.php');
        $username  = $_POST['username'];
        $usereamil = $_POST['usereamil'];
        $userno    = $_POST['userno'];
        $password  = $_POST['password'];

        $check_user = mysqli_query($conn, "SELECT * FROM tbluser WHERE (username = '$username' OR useremail = '$usereamil') AND password = '$password'");
        if(mysqli_num_rows($check_user)){
            echo "
                <script>
                    alert('User all ready exist');
                    window.location.href='login.php';
                </script>
            ";
        }else{

            $query = mysqli_query($conn, "INSERT INTO `tbluser`(`userno`, `password`, `useremail`, `username`) VALUES ('$userno','$password','$usereamil','$username')");
            if($query){
                echo "
                    <script>
                        alert('User Register Successfully');
                        window.location.href='login.php';
                    </script>
                ";
            }
            
        }

        
    }