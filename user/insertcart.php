<?php
    if( isset($_POST['addcart']) ){
        $pname      = $_POST['pname'];
        $pprice     = $_POST['price'];
        $quantity   = $_POST['quantity'];

        session_start();
        $check_product = isset($_SESSION['cart']) ? array_column($_SESSION['cart'], 'pname') : array();
        if(in_array($pname, $check_product)){
            echo "
                    <script>
                        alert('Product Already Added ');
                        window.location.href= 'index.php';
                    </script>
            ";
        }else{
            $_SESSION['cart'][] = array('pname' => $pname, 'pprice' => $pprice, 'quantity' => $quantity );
            header("Location: viewCart.php");
        }
    }

    if( isset($_POST['cartdelete']) ){
            
        $pname = $_POST['pname'];
        session_start();
        foreach($_SESSION['cart'] as $key => $val){
            if($val['pname'] == $pname ){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header("Location: viewCart.php");
            }
        }
    }

    if( isset($_POST['cartupdate']) ){
        session_start();
        foreach($_SESSION['cart'] as $key => $val){
            if($val['pname'] == $_POST['pname'] ){
                $_SESSION['cart'][$key] = array('pname' => $_POST['pname'], 'pprice' => $_POST['price'], 'quantity' => $_POST['quantity'] );
                header("Location: viewCart.php");
            }
        }
    }