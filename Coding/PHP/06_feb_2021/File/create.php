<?php
    require '../Database/DBhandler.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $created = $_POST['created'];

    $sql = "insert into contacttbl values('$name','$mail','$phone','$title','$created')";


    if (mysqli_query($con, $sql)) {
        echo "New record Inserted..";
    } else {
        echo "Error: " . "<br>" . mysqli_error($con);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Create Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'navbar.php'
    ?>


    <div class="container" style="align-content: center;">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">


                <form id="contact-form" method="post" action="" role="form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_id">ID</label>
                                    <input id="form_id" type="text" name="id" class="form-control" placeholder="Auto Generated" readonly>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Name <b style="color: red;">*</b></label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name *" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email <b style="color: red;">*</b></label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_phone">Phone</label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_title">Title <b style="color: red;">*</b></label>
                                    <input id="form_title" type="text" name="title" class="form-control" placeholder="Eg: Employee,Manager,etc. *" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_created">Created</label>
                                    <input id="form_created" type="datetime-local" name="created" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" name="submit" value="Create">
                        </div>
                    </div>

            </div>

            </form>

        </div>

    </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../JS/create_validation.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js'></script>
</body>

</html>













































<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="../CSS/create.css"> -->
</head>

<body>


</body>

</html>