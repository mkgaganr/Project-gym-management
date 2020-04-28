<?php
  session_start();
  include "connection.php";
  
?>

<!DOCTYPE html>
<html>
<head>

  
</head>
<body>



    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT * from `admin` where `username`='$_POST[user]' && `password`='$_POST[password]' ";
       
        $res=mysqli_query($db,$sql);
        $count=mysqli_num_rows($res);
        
        
        if($count==0)
        {
          
        ?>
          <script type="text/javascript">
          alert("Please try again!");
          
           window.location="/admin/login-a.html";
           </script>
        <?php
        }
        else
        { //echo $_POST["username"];
          $_SESSION["username"] = $_POST["user"];
          echo "login successful";
          
          //echo $_SESSION["username"];
          ?>
            <script type="text/javascript">
              
              window.location="/gym_frontend/admin/dashboard_admin.php";

            </script>
          <?php

        }

      }

    ?>

</body>
</html>