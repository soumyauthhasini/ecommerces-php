

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include('config.php');

        if(isset($_POST['update'])){
            $id         = $_POST['id'];
            $pname      = $_POST['pname'];
            $pprice     = $_POST['pprice'];
            if($_FILES['pimage']['tmp_name']){
                $image_loc  = $_FILES['pimage']['tmp_name'];
                $image_name = $_FILES['pimage']['name'];
                $img_des    = "uploadimage/".$image_name;
                move_uploaded_file($image_loc, "uploadimage/".$image_name);
            }else{
                $image_name = $_POST['imageurl'];
            }
            $pcategory  = $_POST['pages'];
            
            $query = mysqli_query($conn, "UPDATE tblproduct SET pname = '$pname', price = '$pprice', pimage = '$image_name', pcategory = '$pcategory' WHERE id = $id");
            header("Location: index.php");

        }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result = mysqli_query($conn, "SELECT * FROM tblproduct WHERE id = $id ");
            $data = mysqli_fetch_array($result);

        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Details</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name: </label>
                        <input name="pname" type="text" class="form-control" value="<?=$data['pname'];?>" placeholder="Example Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Prise: </label>
                        <input name="pprice" type="text" class="form-control" value="<?=$data['price'];?>" placeholder="Example Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Image: </label>
                        <input name="pimage" type="file" class="form-control">
                        <input type="hidden" name="imageurl" value="<?=$data['pimage'];?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Category: </label>
                        <select name="pages" class="form-select">
                            <option value="Home" selected>Home</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <input type="hidden" name="id" value="<?=$data['id'];?>">
                        <button type="submit" name="update" class="btn btn-danger">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>