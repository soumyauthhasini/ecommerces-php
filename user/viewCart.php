<?php
    include('header.php');
    include('config.php');

    ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <h1 class="text-warning font-monospace text-center p-3">Cart</h1>
            <table class="table table-hover">
                <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                    <td>Update</td>
                    <td>Delete</td>
                </thead>
                <tbody>
                    <?php 
                        session_start();
                        $total = 0;
                        $ptotal = 0;
                        foreach($_SESSION['cart'] as $key => $val){
                            $total = $val['pprice'] * $val['quantity'];
                            $ptotal += $val['pprice'] * $val['quantity'];
                    ?>
                    <form action="insertcart.php" method="post">
                    <tr>
                        <td><?=$key;?></td>
                        <td><input type="hidden" name="pname" value="<?=$val['pname'];?>"><?=$val['pname'];?></td>
                        <td><input type="hidden" name="price" value="<?=$val['pprice'];?>"><?=$val['pprice'];?></td>
                        <td><input type="number" name="quantity" value="<?=$val['quantity'];?>"></td>
                        <td><?=$total;?></td>
                        <td><button name="cartupdate" class="btn-warning">Update</button></td>
                        <td><button name="cartdelete" class="btn-danger">Delete</button></td>
                    </tr>
                    </form>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-3">
        <h1>Total: <span><?=$ptotal;?></span></h1>
        <a href="http://">Check Out</a>
    </div>
</div>
<?php include('footer.php');?>