<?php
  include "connection.php";
  
?>

<html>
<body>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT * FROM `trainer_info` ";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['trainer_name']==$_POST['trainer_name'])
          {

            $count=$count+1;
          }
          
        } 
        if($count==0)
        {

          mysqli_query($db, "INSERT INTO `trainer_info` ( `trainer_name`, `skill`, `email`, `username`, `password`) VALUES ('$_POST[trainer_name]', '$_POST[skill]','$_POST[email]', '$_POST[username]','$_POST[password]' );");
        
        ?>
          <script type="text/javascript">

           alert("Trainer added successful!!!");
           window.location="/admin/add_trainer.php";

          </script>
        <?php 
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The trainer already exists.");
              window.location="/admin/add_trainer.php";
            </script>
          <?php

        }

      }

    ?>
</body>
</html>

