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
        $sql="SELECT `first` FROM `payment`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['first']==$_POST['first'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `payment`(  `first`, `last`, `fee`) VALUES ('$_POST[first]', '$_POST[last]', '$_POST[fee]');");
        ?>
          <script type="text/javascript">

           alert("Payment successful!!!");
           window.location="/admin/test.php";

          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The payment already done.");
            </script>
          <?php

        }

      }

    ?>

</body>
</html>