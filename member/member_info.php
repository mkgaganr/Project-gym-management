<?php
//session_start();
    include "connection.php" ;
    $username = $_SESSION['username'];
    $tsql = 
    "SELECT 'email','first','last','email','age','gender','dob','contact'
    FROM `member_info`
    WHERE username = '$username'";
    $result = sqlsrv_query($conn, $tsql, array(), array ("Scrollable" => SQLSRV_CURSOR_KEYSET));
    while($row=mysqli_fetch_array($result))
    {
        
     
        $EId = $row['email'];
        $fname = $row['first'];
        $lname = $row['last'];
        $age = $row['age'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $contact = $row['contact'];
    
    }
    echo 'First Name $fName ';
    echo 'Last Name $lName ';
    echo 'Email $EId ';
    echo 'Age $age ';
    echo 'Gender $gender ';
    echo 'Dob $dob ';
    echo 'Contact $contact ';
    ?>