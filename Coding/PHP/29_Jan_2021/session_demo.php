 <?php
       session_start();  

       if (!isset($_SESSION['counter'])) {  
          $_SESSION['counter'] = 1;  
       } else {  
          $_SESSION['counter']++;  
       }  
       echo ("Number you times open this Page: ".$_SESSION['counter']);  
    ?>
 <html>

 <body>
     <?php
        $_SESSION["user"] = "Pratik";
        echo '<br>';
        echo "Session information are set successfully.<br/>";
        ?>
     <a href="session1_demo.php">Visit next page</a>
 </body>

 </html>