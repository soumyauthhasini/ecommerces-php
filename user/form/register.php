<?php
    include('../header.php');
    
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">User Register Form</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Name: </label>
                        <input name="username" type="text" class="form-control" placeholder="Enter User Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Email: </label>
                        <input name="usereamil" type="email" class="form-control" placeholder="Enter User Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Phone NO: </label>
                        <input name="userno" type="text" class="form-control" placeholder="Enter User No">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password: </label>
                        <input name="password" type="text" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="col-12 mb-3">
                        <button type="submit" name="register" class="btn btn-danger">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

<?php include('footer.php');?>