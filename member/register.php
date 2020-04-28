<?php
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
        $sql="SELECT `username` FROM `member_info`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `member_info`( `first`, `last`, `AGE`, `GENDER`, `DOB`, `CONTACT`, `email`, `username`, `password`) VALUES ('$_POST[first]', '$_POST[last]', '$_POST[age]' ,'$_POST[gender]','$_POST[dob]','$_POST[contact]' , '$_POST[email]','$_POST[username]', '$_POST[password]');");
        ?>
          <script type="text/javascript">

           alert("Registration successful, Please login now.");
           window.location="/member/login.html";

          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>

</body>
</html>