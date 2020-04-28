<!doctype html>
<html lang="en">
  <head>
    <style>
    card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
    }
    
    .title {
      color: grey;
      font-size: 18px;
    }
    
    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    
    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }
    
    button:hover, a:hover {
      opacity: 0.7;
    }
  </style>
  	<title>Welcome to Armour</title>
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
        <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
 <center> <img src="trainer.jpeg"  style="width:20%"></center>
 
  <!-- <p class="title">CEO & Founder, Example</p> -->
  
  

        <?php
        session_start();
    include "connection.php" ;
    $username = $_SESSION['username'];
    
    $tname="";
    $skill="";
    $email="";
    $tid="";
   
    //$result = sqlsrv_query($conn, $tsql, array(), array ("Scrollable" => SQLSRV_CURSOR_KEYSET));
    echo "<table class='table table-bordered'>";
    

    $result=mysqli_query($db, "SELECT `trainer_id`,`trainer_name`,`skill`,`email`
    FROM `trainer_info`
    WHERE `username` = '$username' ");
    while($row=mysqli_fetch_array($result))
    {
        
     
     $tname= $row['trainer_name']; 
     $skill = $row['skill'];
      $tid= $row['trainer_id'];
      $email= $row['email'];
     
    
    }
    echo "<center> <h1 class='center'>";  echo $tname;  echo " </h1></center><br>";
    echo "<center> <h6 class='center'>"; echo 'ID : '; echo $tid; echo '<br>'; echo "<center> </h6 >";
    echo "<center> <h6 class='center'>"; echo 'Skill : '; echo $skill; echo '<br>'; echo "</center> </h6 >";
    echo "<center> <h6 class='center'>";  echo 'Email :'; echo $email;echo '<br>'; echo "</center> </h6 >";
   
   
    
    ?>

</div>

         
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