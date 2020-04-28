<!doctype html>
<html lang="en">
  <head>
  	<title>Attendance</title>
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
	              <a href="dashboard.php">Member Information</a>
	          </li>
	          <li>
             
	          <li>
              <a href="trainer_info.php">Trainer Information</a>
	          </li>
	          <li>
              <a href="groupcl_info.php">Group Classes</a>
	          </li>
	          <li>
              <a href="attendance_member.php">Attendance</a>
	          </li>
	        </ul>

	        

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
      <?php
       session_start();
 include "connection.php" ;
 
 /*<html>
  <title> Trainer Information</title>
  align='center' border='1px' style= 'width:300px; line-height: 30px;'
 <center>   
     <form action="fetch_trainer.php" method="post">*/
     
     
     $username = $_SESSION['username'];
    
     $tname="";
     $cname="";
     $days="";
     $email="";
     //$result = sqlsrv_query($conn, $tsql, array(), array ("Scrollable" => SQLSRV_CURSOR_KEYSET));
     echo "<table class='table table-bordered'>";
     
 
     $result=mysqli_query($db, "SELECT `trainer_name`,`class_name`,`days`,`email` 
     FROM `trainer_info`,`attendance`
     WHERE `muser` = '$username' and `tuser` = `username` ") or die("Error: " . mysqli_error($db));
       echo "<table class='table table-bordered' > ";
       echo "<tr>";
          echo "<th>"; echo " Class"; echo "</th>";
          echo "<th>"; echo "Trainer_name"; echo "</th>";
          echo "<th>"; echo " Email"; echo "</th>";
          echo "<th>"; echo "No of days"; echo "</th>";
          
         echo "</tr>";
         
     while($row=mysqli_fetch_array($result))
     {
         
      echo "<tr>";
      echo "<td>"; echo $row['class_name'];echo "</td>";
    echo "<td>"; echo $row['trainer_name']; echo "</td>";
    echo "<td>" ; echo $row['email']; echo "</td>";
    echo "<td>"; echo $row['days']; echo "</td>";
       echo "</tr>";
     
     }
 
     echo "</table>";

 
           // echo "<center> <h1 class='center'>";  echo $fname; echo " "; echo $lname; echo " </h1></center><br>";
           // echo "<center> <h6 class='center'>"; echo 'Email : '; echo $email; echo '<br>'; echo "<center> </h6 >";
            //echo "<center> <h6 class='center'>"; echo 'Age : '; echo $age; echo '<br>'; echo "</center> </h6 >";
           // echo "<center> <h6 class='center'>";  echo 'Gender :'; echo $gender;echo '<br>'; echo "</center> </h6 >";
           // echo "<center> <h6 class='center'>"; echo 'Dob : '; echo $dob; echo '<br>'; echo "</center> </h6 >";
           // echo "<center> <h6 class='center'>"; echo 'Contact : '; echo $contact; echo '<br>'; echo "</center> </h6 >";echo " ";



        



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