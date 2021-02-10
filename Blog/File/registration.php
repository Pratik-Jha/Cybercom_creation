<?php
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
    if (empty($_POST['term_condition'])) {
        echo '<script>alert("Please Select the term and Condition.")</script>';
    } else {
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
}
?>

<HTML>

<HEAD>
    <TITLE>User Registration</TITLE>
    <link rel="stylesheet" href="../CSS/registration.css">
    <link rel="stylesheet" href="../CSS/main.css">
    <script src="../JS/registration.js"></script>
</HEAD>

<BODY>
    <div class="phppot-container">
        <div class="sign-up-container">
            <div class="">
                <form name="sign-up" action="" method="post" onsubmit="return signupValidation()">
                    <div class="signup-heading">Registration</div>
                    <div class="error-msg" id="error-msg"></div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Prefix
                            </div>
                            <select id="prefix" name="prefix" required>
                                <option value="">SELECT</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Mr">Mr.</option>
                                <option value="Mrs">Mrs.</option>
                                <option value="Miss">Miss.</option>
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Firstname<span class="required error" id="fname-info"></span>
                            </div>
                            <input class="input-box-330" type="text" name="fname" id="fname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Lastname<span class="required error" id="lname-info"></span>
                            </div>
                            <input class="input-box-330" type="text" name="lname" id="lname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Email<span class="required error" id="email-info"></span>
                            </div>
                            <input class="input-box-330" type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Mobile Number<span class="required error" id="mbl-info"></span>
                            </div>
                            <input class="input-box-330" type="text" name="mbl_no" id="mbl_no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Password<span class="required error" id="signup-password-info"></span>
                            </div>
                            <input class="input-box-330" type="password" name="signup-password" id="signup-password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Confirm Password<span class="required error" id="confirm-password-info"></span>
                            </div>
                            <input class="input-box-330" type="password" name="confirm-password" id="confirm-password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Information<span class="required error" id="info-info"></span>
                            </div>
                            <!-- <input class="input-box-330" type="" name="info" id="info"> -->
                            <textarea name="info" id="info" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <input type="checkbox" name="term_condition" id="term_condition">Hereby, I Accept Term And condition.
                        </div>
                    </div>
                    <div class="row">
                        <input class="btn" type="submit" name="btn_signup" id="btn_signup" value="Sign up">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../JS/registration_validation.js"></script>
</BODY>

</HTML>