<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Details</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name: </label>
                        <input name="pname" type="text" class="form-control" placeholder="Example Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Prise: </label>
                        <input name="pprice" type="text" class="form-control" placeholder="Example Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Image: </label>
                        <input name="pimage" type="file" class="form-control">
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
                        <button type="submit" name="submit" class="btn btn-danger">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>