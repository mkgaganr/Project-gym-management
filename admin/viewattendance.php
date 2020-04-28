<!doctype html>
<html lang="en">
  <head>
  	<title>Group Classes Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.png);"></a>
	  	        <ul class="list-unstyled components mb-5">
	           
            <li>
	              <a href="dashboard_admin.php">Home</a>
	          </li>
	          <li>
	         
	          <li>
	              <a href="trainer_all.php">Trainer Information</a>
	          </li>
	          <li>
             
	          <li>
              <a href="member_all.php">Member Information</a>
	          </li>
	          <li>
              <a href="groupcl_all.php">Group Classes</a>
	          </li>
            <li>
              <a href="test.php">Make Member Payment</a>
	          </li>
            <li>
              <a href="paid.php">View all Payments</a>
	          </li>
            <li>
              <a href="add_trainer.php">Add Trainer</a>
	          </li>
            <li>
              <a href="add_member.php">Add New Member</a>
	          </li>
            <li>
              <a href="add_attendance.php">Add Member Attendance</a>
	          </li>
            <li>
              <a href="viewattendance.php">View all Attendance</a>
	          </li>
	          
          
	        </ul>

	        

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
      <?php
 include "connection.php" ;
 
 /*<html>
  <title> Trainer Information</title>
  align='center' border='1px' style= 'width:300px; line-height: 30px;'
 <center>   
     <form action="fetch_trainer.php" method="post">*/
     
     
 $query="SELECT `class_name`, `muser`,`tuser` FROM `attendance` ";
 $result=mysqli_query($db,$query);
 


   echo "<table class='table table-bordered' > ";
          echo "<tr>";
             echo "<th>"; echo " Class Name"; echo "</th>";
             echo "<th>"; echo "Member Username"; echo "</th>";
             echo "<th>"; echo "Trainer Username"; echo "</th>";
             
             
             
            echo "</tr>";
    



            while($row=mysqli_fetch_array($result))
            {
            	
            	echo "<tr>";
            	echo "<td>"; echo  $row['class_name'] ; echo "</td>";
                echo "<td>";  echo $row['muser'] ; echo "</td>";
                echo "<td>";  echo $row['tuser'] ; echo "</td>";
            	
            echo "</tr>";
            
            }
           
           echo "</table>";



            ?>
          <!--   <script type="text/javascript">
              
              window.location="/gym/dash/trainer_info.php";

            </script> -->
    

              

         
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

           
       

       
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>