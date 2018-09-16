<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select idp, passwordp from patient where idp = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['idp'];

   $ses_sqld = mysqli_query($db,"select idd, passwordd from doctor where idd = '$user_check' ");
   
   $rowd = mysqli_fetch_array($ses_sqld,MYSQLI_ASSOC);
   
   $login_sessiond = $rowd['idd'];

/*
   $login_event1_session = $row['event1'];

   $login_event2_session = $row['event2'];
*/   
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }

/*
<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select idp, passwordp from patient where idp = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['idp'];

   $login_event1_session = $row['event1'];

   $login_event2_session = $row['event2'];
   
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
*/   
?>

