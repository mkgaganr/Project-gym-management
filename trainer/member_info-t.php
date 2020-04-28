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
	              <a href="dashboard_trainer.php">Trainer Information</a>
	          </li>
	          <li>
             
	          <li>
              <a href="member_info-t.php">Member Information</a>
	          </li>
	          <li>
              <a href="groupcl_info-t.php">Group Classes</a>
	          </li>
	          <li>
              <a href="attendance-t.php">Attendance</a>
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
     
     
 $query="SELECT `first`, `last`, `age`, `gender`,`dob`, `contact`,`email` FROM `member_info` ";
 $result=mysqli_query($db,$query);
 


   echo "<table class='table table-bordered' > ";
          echo "<tr>";
             echo "<th>"; echo " First Name"; echo "</th>";
             echo "<th>"; echo "Last Name"; echo "</th>";
             echo "<th>"; echo "Age"; echo "</th>";
             echo "<th>"; echo "Gender"; echo "</th>";
             echo "<th>"; echo "DOB"; echo "</th>";
             echo "<th>"; echo "Contact"; echo "</th>";
             echo "<th>"; echo "Email"; echo "</th>";
             
             
             
            echo "</tr>";
    



            while($row=mysqli_fetch_array($result))
            {
            	
            	echo "<tr>";
            	echo "<td>"; echo  $row['first'] ; echo "</td>";
                echo "<td>";  echo $row['last'] ; echo "</td>";
                echo "<td>"; echo  $row['age'] ; echo "</td>";
                echo "<td>";  echo $row['gender'] ; echo "</td>";
                echo "<td>"; echo  $row['dob'] ; echo "</td>";
                echo "<td>";  echo $row['contact'] ; echo "</td>";
                echo "<td>"; echo  $row['email'] ; echo "</td>";
            	
            	
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