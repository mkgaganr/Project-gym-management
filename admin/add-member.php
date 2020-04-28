<?php
  include "connection.php";
  
?>

<html>
<body>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT * FROM `member_info` ";
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

          mysqli_query($db, "INSERT INTO `member_info` ( `first`, `last`, `age`, `gender`, `dob`, `contact`, `email`, `username`, `password`) VALUES ('$_POST[first]', '$_POST[last]','$_POST[age]', '$_POST[gender]','$_POST[dob]', '$_POST[contact]', '$_POST[email]', '$_POST[username]', '$_POST[password]' );");
        
        ?>
          <script type="text/javascript">

           alert("member added successful!!!");
           window.location="/admin/add_member.php";

          </script>
        <?php 
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The member already exists.");
              window.location="/admin/add_member.php";
            </script>
          <?php

        }

      }

    ?>
</body>
</html>
