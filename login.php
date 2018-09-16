<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $needle = 'p0';
      if(strlen(strstr($myusername,$needle))>0)
      {
         $sql = "SELECT idp FROM patient WHERE idp = '$myusername' and passwordp = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         /*
         $sql1 = "SELECT event1 FROM credentials WHERE username = '$myusername' and passcode = '$mypassword'";
         $result1 = mysqli_query($db,$sql1);
         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

         $_SESSION['login_user_event1'] = $row1['event1'];
         */
         header("location: profile.php");
      }else {
        $error = "Your Login Name or Password is invalid :P";
        echo $error;
   }
}
else
{
$sql = "SELECT idd FROM doctor WHERE idd = '$myusername' and passwordd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         /*
         $sql1 = "SELECT event1 FROM credentials WHERE username = '$myusername' and passcode = '$mypassword'";
         $result1 = mysqli_query($db,$sql1);
         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

         $_SESSION['login_user_event1'] = $row1['event1'];
         */
         header("location: profiled.php");
      }else {
        $error = "Your Login Name or Password is invalid";
        echo $error;
   }

}

}

/*
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT idp FROM patient WHERE idp = '$myusername' and passwordp = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         
         $sql1 = "SELECT event1 FROM credentials WHERE username = '$myusername' and passcode = '$mypassword'";
         $result1 = mysqli_query($db,$sql1);
         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

         $_SESSION['login_user_event1'] = $row1['event1'];
         
         header("location: welcome.php");
      }else {
        $error = "Your Login Name or Password is invalid";
        echo $error;
   }
}
?>*/

?>