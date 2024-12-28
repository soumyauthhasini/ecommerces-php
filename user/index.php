<?php
    include('header.php');
    include('config.php');
    if(isset($_GET['cat'])){
        $cat = $_GET['cat'];
        $query = mysqli_query($conn, "SELECT * FROM tblproduct WHERE pcategory = '$cat'");
    }else{
        $query = mysqli_query($conn, "SELECT * FROM tblproduct WHERE pcategory = 'Home'");
    }
?>
 <div class="bg-danger font-monospace">
            <ul class="list-unstyled d-flex justify-content-center">
                <li><a href="index.php?cat=Laptop" class="text-decoration-none text-white fw-bold fs-4 ps-5">Laptop</a></li>
                <li><a href="index.php?cat=Mobile" class="text-decoration-none text-white fw-bold fs-4 ps-5">Mobile</a></li>
                <li><a href="index.php?cat=Bag" class="text-decoration-none text-white fw-bold fs-4 ps-5">Bag</a></li>
            </ul>
        </div>
<div class="container-fluid">
    <div class="col-md-12">
    <div class="row">
        <h1 class="text-warning font-monospace text-center p-3"><?php if($_GET['cat']){ echo $_GET['cat']; }else{ echo 'Home'; }?></h1>
        <?php while($row = mysqli_fetch_array($query)):?>
            <div class="col-md-6 col-lg-4 m-auto mb-3">
                <form action="insertcart.php" method="post">
                    <div class="card m-auto" style="width: 18rem;">
                        <img src="../admin/product/uploadimage/<?=$row['pimage'];?>" class="card-img-top" alt="<?=$row['pname'];?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?=$row['pname'];?></h5>
                            <h6 class="card-title">Rs. <?=$row['price'];?></h6>
                            <input type="number" name="quantity" min="1" max="20" placeholder="Quantity"><br/><br/>
                            <input type="hidden" name="pname" value="<?=$row['pname'];?>">
                            <input type="hidden" name="price" value="<?=$row['price'];?>">
                            <input type="submit" name="addcart" class="btn btn-danger text-white w-100" value="Add To Cart">
                        </div>
                    </div>
                </form>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</div>

<?php include('footer.php');?>