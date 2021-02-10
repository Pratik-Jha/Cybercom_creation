<?php
include 'navbar.php';
require('../Database/DBhandler.php');
if (isset($_POST['btn_signup'])) {
    $prefix = $_POST['prefix'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mbl = $_POST['mbl_no'];
    $pass = md5($_POST['signup-password']);
    // $cpass =$_POST['confirm-password'];
    date_default_timezone_set('Asia/Kolkata');
    $created = date("Y-m-d H:i:s");
    $info = $_POST['info'];
    function checkEmail()
    {
        global $email, $con;
        $qry = "select * from user where Email='$email'";
        $sql = mysqli_query($con, $qry);

        if (mysqli_num_rows($sql) == 0) {
            return true;
        }

        return false;
    }

    if (checkEmail($_POST['email'])) {
        $sql = "insert into user values ('0','$prefix','$fname','$lname','$mbl','$email','$pass','$created','$info','$created','$created')";

        if (mysqli_query($con, $sql)) {
            echo '<script>alert("Registration Successfull.")</script>';
            echo '<script>window.location.href = "login.php";</script>';
        } else {
            echo '<script>alert("Not Inserted.")</script>';
        }
    } else {
        echo '<script>alert("Another user already exist with the same mail id.")</script>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Add Category</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form name="myForm" action="" method="post" required>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card text-left">
                        <div class="card-body">
                            <h2 class="text-center">Add Category</h2>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelpId" placeholder="Enter Title">
                                <small class="form-text text-danger" id="errname" style="display:none;">Title Is Required*</small>
                            </div>

                            <div class="form-group">
                                <label for=""> Content </label>
                                <textarea class="form-control" name="content" id="content" aria-describedby="emailHelpId" placeholder="Enter content"></textarea>
                                <small id="erradd" class="form-text text-danger" style="display:none">content Is Required*</small>
                            </div>

                            <div class="form-group">
                                <label for="">URL</label>
                                <input type="text" class="form-control" name="url" id="url" aria-describedby="emailHelpId" placeholder="Enter Title">
                                <small class="form-text text-danger" id="errname" style="display:none;">URL Is Required*</small>
                            </div>

                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input type="text" class="form-control" name="mtitle" id="mtitle" aria-describedby="emailHelpId" placeholder="Enter Meta Title">
                                <small class="form-text text-danger" id="errname" style="display:none;">Meta Title Is Required*</small>
                            </div>
                            <div class="form-group">
                                <label for="">Parent Category:</label>
                                <select name="pcat" id="pcat" class="form-control">
                                    <option value="pcat" selected></option>
                                    <option value=""></option>
                                </select>
                                <small id="errage" class="form-text text-danger" style="display:none">Please Select Valid*</small>
                            </div>
                            <div class="form-group">
                                <label for="">Select Your Image:</label>
                                <br>
                                <input type="file" name="uimage" id="uimage">
                                <small id="errimg" class="form-text text-danger" style="display:none">Please Select Image*</small>
                                <br>
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-danger ml-5 pl-5 pr-5">Reset</button>
                                <button type="submit" onclick="formValidation()" name="add" class="btn btn-primary ml-5 pl-5 pr-5">Submit Form</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">

                </div>
            </div>
    </form>

    <script src="./dbstored.js"></script>
    <script src="../JS/category.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>