<?php
  include "connection.php";
  
?>

<html>
<body>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT * FROM `equipment` ";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['equipmentno']==$_POST['equipmentno'])
          {

            $count=$count+1;
          }
          
        } 
        if($count==0)
        {

          mysqli_query($db, "INSERT INTO `equipment` ( `noofsmithmac`, `noofchestpress`, `noofsquatrack`, `noofpecflymac`, `nooflegpress`) VALUES ('$_POST[noofsmithmac]', '$_POST[noofchestpress]','$_POST[noofsquatrack]', '$_POST[noofpecflymac]','$_POST[nooflegpress]' );");
        
        ?>
          <script type="text/javascript">

           alert("equipment added successful!!!");
           window.location="/admin/addequipment.php";

          </script>
        <?php 
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The equipment already exists.");
              window.location="/admin/addequipment.php";
            </script>
          <?php

        }

      }

    ?>
</body>
</html>