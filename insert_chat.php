<?php
   include("session.php");
   $haystack = $login_session;
$needle = 'p';

if (strlen(strstr($haystack,$needle))>0) {
   if($_SERVER["REQUEST_METHOD"] == "GET")
      {
         $idd1 = $_GET["id"];
         $message1 = $_GET["message"]; 
        $sql2= "SELECT idd FROM profilep WHERE idp = '$login_session'";
        $result = $db->query($sql2);
        //$row= $result->fetch_assoc();
         
     // output data of each row
     while($row= $result->fetch_assoc()) {

      if($row["idd"]==$idd1){
                 
                  $sql = "INSERT INTO $login_session".
                   "(idd,type, message) ".
                   "VALUES ".
                   "('$login_session','send','$message1')";
                   
                   $ret=mysqli_query($db,$sql);
                  
                  $sql1 = "INSERT INTO $idd1".
                   "(idp,type, message) ".
                   "VALUES ".
                   "('$login_session','recieve','$message1')";
                   
                   $ret1=mysqli_query($db,$sql1);
                   header("location: chat.php");
                  }
                  else
                  {
                     echo "Doctor and patient are not connected, Redirecting";
                  
                    header("location: chat.php");
                  }
}
}
}
else{
   if($_SERVER["REQUEST_METHOD"] == "GET")
      {
         $idd1 = $_GET["id"];
         $message1 = $_GET["message"]; 
        $sql2= "SELECT idp FROM profilep WHERE idd = '$login_sessiond'";
        $result = $db->query($sql2);
        //$row= $result->fetch_assoc();
        
        
     // output data of each row
     while($row= $result->fetch_assoc()) {
      
   
      if($row["idp"]==$idd1){
                 
                  $sql = "INSERT INTO $login_sessiond".
                   "(idp,type, message) ".
                   "VALUES ".
                   "('$login_sessiond','send','$message1')";
                   
                   $ret=mysqli_query($db,$sql);
                  
                  $sql1 = "INSERT INTO $idd1".
                   "(idd,type, message) ".
                   "VALUES ".
                   "('$login_sessiond','recieve','$message1')";
                   
                   $ret1=mysqli_query($db,$sql1);
                   header("location: chat.php");
                  }
                  else
                  {
                     echo "Doctor and patient are not connected, Redirecting";
                      
                    header("location: chat.php");
                  }
}
}
}



   ?>