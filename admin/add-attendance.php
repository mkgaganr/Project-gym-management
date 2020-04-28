<?php
  include "connection.php";
  
?>

<html>
<body>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT * FROM `attendace` ";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['class_name']==$_POST['class_name'])
          {

            $count=$count+1;
          }
          
        } 
        if($count==0)
        {

          mysqli_query($db, "INSERT INTO `attendance` ( `slno`,`class_name`, `days`, `muser`, `tuser`) VALUES ('$_POST[slno]','$_POST[class_name]', '$_POST[days]','$_POST[muser]', '$_POST[tuser]' );");
        
        ?>
          <script type="text/javascript">

           alert("Attendance added successful!!!");
           window.location="/admin/add_attendance.php";

          </script>
        <?php 
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The trainer already exists.");
              window.location="/admin/add_attendance.php";
            </script>
          <?php

        }

      }

    ?>
</body>
</html>
