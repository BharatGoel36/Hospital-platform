<?php
   include("session.php");
   if($_SERVER["REQUEST_METHOD"] == "GET")
      {
         $id1 = $_GET["id"];
         $from = $_GET["dw"]; 
         $to=$_GET["tw"];
         $pill=$_GET["pills"];
         $c=$_GET["counts"];
         $n=$_GET["notes"];
         $sql = "INSERT INTO prescription".
                      "(`idp`, `fromwhen`, `towhen`, `pills`, `count`, `notes`)".
                      "VALUES ".
                   " ('$id1','$from','$to','$pill','$c','$n')";
                   echo $sql;
                   $ret=mysqli_query($db,$sql);
                  header("location: profiled.php");

     }

     ?>