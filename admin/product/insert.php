<?php
    include('config.php');
    if(isset($_POST['submit'])){
        $pname      = $_POST['pname'];
        $pprice     = $_POST['pprice'];
        $pimage     = $_POST['pimage'];
        $image_loc  = $_FILES['pimage']['tmp_name'];
        $image_name = $_FILES['pimage']['name'];
        $img_des    = "uploadimage/".$image_name;
        $pcategory  = $_POST['pages'];
        move_uploaded_file($image_loc, "uploadimage/".$image_name);

        $query = mysqli_query($conn, "INSERT INTO tblproduct(`pname`,`price`,`pimage`,`pcategory`) VALUES('$pname', '$pprice', '$image_name', '$pcategory')");

    }
?>
<!--Fetch Table-->
<table class="table table-hover">
<thead>
    <td>ID</td>
    <td>Name</td>
    <td>Price</td>
    <td>Image</td>
    <td>Category</td>
</thead>
<tbody>
    <?php 
        while($row = mysqli_fetch_array($result)):
            echo "
                <td>$row[id]</td>
                <td>$row[pname]</td>
                <td>$row[price]</td>
                <td><img src='$row[pimage]'></td>
                <td>$row[pcategory]</td>
                ";
        endwhile;
    ?>
</tbody>
</table> 