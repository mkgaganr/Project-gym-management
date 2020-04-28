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
	              <a href="dashboard_admin.php">Home</a>
	          </li>
	          <li>
	         
	          <li>
	              <a href="trainer_all.php">Trainer Information</a>
	          </li>
	          <li>
             
	          <li>
              <a href="member_all-t.php">Member Information</a>
	          </li>
	          <li>
              <a href="groupcl_all.php">Group Classes</a>
	          </li>
	          <li>
              <a href="#">Add Attendance</a>
	          </li>
            <li>
              <a href="#">View Attendance</a>
	          </li>
            
              <li>
              <a href="#">Add Payment</a>
              </li>
              <li>
              <a href="#">View Payments</a>
	          </li>
	        </ul>

	        

	      </div>
    	</nav>

       <!-- Page Content  -->
       <div id="content" class="p-4 p-md-5">
        <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
 
 
  <!-- <p class="title">CEO & Founder, Example</p> 
  <form action="payment.php" method="POST">-->
                
                Member Id<br>
                <input id="Memberid" type="number" name="member_id" placeholder="Member id"> 
                <br><br>
                First Name<br>
                <input id="fname" type="text" name="first" placeholder="First name">
                <br><br>
                Last Name<br>
                <input id="lname" type="text" name="last" placeholder="Last name">
                <br><br>
                Fee<br>
                <input id="fee" type="number" name="fee" placeholder="fee">
                <br><br>
                
                <input type="submit" name="submit" value="Pay" onclick="myFunction()">
                <br><br> 
                  <div id="msg">Member payment is sucessfull!!</div>
                  <script>
                      function myFunction(){
                          var x = document.getElementById("msg");
                          x.className = "show";
                          setTimeout(function(){ x.className =
                           x.className.replace("show",""); }, 3000);
                      }
                  
                  </script> 
                  
                    
            </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>