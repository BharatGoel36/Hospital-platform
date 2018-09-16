<?php
   include('session.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

   $sql = "UPDATE credentials SET event2 = 'REGISTERED' WHERE username = '$login_session'";
   if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
   }
?>