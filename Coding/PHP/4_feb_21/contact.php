<?php
require 'DBhandler.php';

if(isset($_REQUEST['send'])){
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $subject = $_POST['usubject'];
    $msg = $_POST['umessage'];


    $sql="insert into contacttb values ('$name','$email','$subject','$msg')";

    
    if (mysqli_query($con, $sql)) {
      echo "New record Inserted..";
    }
    else
    {
      echo "Error: "."<br>" . mysqli_error($con);
    }

}
?>

<html lang="en">
<head>
    <title>contact us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form ame="myForm" action="./contact.php"  method="post" required>
  
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-3 col-lg-3">
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card text-left">
                  <div class="card-body">
                    <h4 class="card-title text-center">Contact Us!</h4>
                    <p class="card-text">
                        <div class="form-group">
                                <input type="text" class="form-control" name="uname" placeholder="Username.."/>
                                <small id="helpId" class="form-text text-muted">Enter Username</small>
                        </div>
                            
                        <div class="form-group">
                          <input type="email" class="form-control" name="uemail" id="uemail" aria-describedby="helpId" placeholder="Email.." required />
                          <small id="helpId" class="form-text text-muted">Enter Email</small>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" name="usubject" id="usubject" aria-describedby="helpId" placeholder="Subject.." required />
                          <small id="helpId" class="form-text text-muted">Enter Subject</small>
                        </div>
                        
                        <div class="form-group">
                          <textarea class="form-control" name="umessage" id="umessage" placeholder="Message.." required></textarea>
                          <small id="helpId" class="form-text text-muted">Enter Message</small>
                        </div>

                        <div class="form-group pb-4">
                            <button type="submit" name="send" onclick="formValidation()" class="btn btn-warning btn-block">Send Message</button>

                            <button type="submit" name="seen" class="btn btn-warning btn-block">See send Message</button>    
                        </div>
                        </p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">

            </div>
        </div>
        <div class="jumbotron">
          <?php
          if (isset($_REQUEST['seen'])) {
            
            $qry="select * from contacttb";
            $res = $con->query($qry);
            if ($res->num_rows >0) {
              while ($r = $res->fetch_assoc()) {
                echo $r['id']."<br>";
                echo $r['name']."<br>";
                echo $r['email']."<br>";
                echo $r['subject']."<br>";
                echo $r['msg']."<br>";
              }
            }
          }

        ?>
      <!--<?php 
        /*if(isset($_REQUEST['send'])){
       ?>   
        <p class="lead">Name : <?php echo $name ?></p>
        <p class="lead">Email : <?php echo $email ?></p>
        <p class="lead">Subject : <?php echo $subject?></p>
        <p class="lead">Message : <?php echo $msg ?></p>
        <?php
        }*/
        ?>-->
      </div>
    </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="contact.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>