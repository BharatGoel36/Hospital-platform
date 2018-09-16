<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>	
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<div class="container">
<div class="row">
   <div class="col s12 m12 l12">
       <h1 class="mainHeading">Profile</h1>
   </div>
</div>
<div row>
   <div class="col s12 m12 l12">
       <h1 class="byline">Hi <?php echo $login_session; ?></h1>
   </div>
</div>

<div class="row">
   <div class="col s12 m12 l12">
        <h2 class="subHeading">Doctors Contact ID</h2>
   </div>
</div>

<?php

$sql = "SELECT d.idd FROM patient as p , profilep as d WHERE p.idp = d.idp AND p.idp = '$login_session'"; 
//$sql = "SELECT idp, passwordp FROM patient";

$result = $db->query($sql);
/*
$result = mysqli_query ($db,$sql);
while ($row = mysqli_fetch_array ($result)) {
    echo "<p>Name: ".$row['idp']."</p>";
    echo "<p>Technologies: ".$row['idd']."</p>";
}
*/

if ($result->num_rows > 0) {
     // output data of each row
     while($row= $result->fetch_assoc()) {
     	 echo "<div class=\"row\">";
     	 echo "<div class=\"col s12 m12 l12\">";
         echo "<p class = \"info\">Doctor id: ". $row["idd"]."</p>";
         echo "</div>";
         echo "</div>";
         /*
         $doc = $row["idd"];
         echo $doc;
         */
     }

} else {
     echo "0 results";
}



$sql1 = "SELECT flag FROM profilep WHERE flag = '1' AND idp = '$login_session'";

$result1 = $db->query($sql1);

if ($result1->num_rows > 0) {
     // output data of each row
     while($row= $result1->fetch_assoc()) {
         

         //To Check if flag is zero or not
         //echo "<br> Availability of Prescription: ". $row["flag"]."<br>";

         $sql2 = "SELECT d.idp, d.pills, d.fromwhen, d.towhen, d.count, d.note FROM prescription as d, patient as p WHERE p.idp = d.idp AND p.idp = '$login_session'";

echo "<div class=\"row\">";
echo "<div class=\"col s12 m12 l12\">";
echo "<h2 class=\"subHeading\">Your Prescription</h2>";
echo "</div>";
echo "</div>";

echo "<table>
        <thead>
          <tr>";

echo "<th class = \"info\" data-field=\"fromwhen\">From Date</th>";
echo "<th class = \"info\" data-field=\"towhen\">To Date</th>";
echo "<th class = \"info\" data-field=\"pill\">Medication</th>";
echo "<th class = \"info\" data-field=\"count\">Pill Count</th>";
echo "<th class = \"info\" data-field=\"notes\">Notes</th>";

echo "</tr>";
echo "</thead";
echo "<tbody>";


         $result2 = $db->query($sql2);

         if ($result2->num_rows > 0) {
         // output data of each row
            while($row1= $result2->fetch_assoc()) {
            	
            	echo "<tr>";
                echo "<td class = \"info\">". $row1["fromwhen"]."</td>";
                echo "<td class = \"info\">". $row1["towhen"]. "</td>";
                echo "<td class = \"info\">". $row1["pills"]. "</td>";
                echo "<td class = \"info\">". $row1["count"]. "</td>";             
                echo "<td class = \"info\">". $row1["note"]. "</td>";
                echo "</tr>";

            }

    } else {
    echo "0 results";
}

echo "</tbody>";
echo "</table>";

     }

} else {
     echo "0 results";
}



/*
if ($login_event1_session == "REGISTERED") {
 	echo "<p>Registered for Adzap</p>";
 } 
if ($login_event2_session == "REGISTERED") {
 	echo "<p>Registered for Dance</p>";
 }
*/ 
?>
<br><br>
<div class="row">
	<div class="col s6 m6 l6">
		<a class="links" href = "logout.php">Sign Out</a>
	</div>
    <div class="col s6 m6 l6">
		<a class="links spl" href = "chat.php">Message your Doctor !</a>
	</div>
</div>

</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<script type="text/javascript">

	      history.pushState(null, null, document.title);
        window.addEventListener('popstate', function () {
          history.pushState(null, null, document.title);
        });
</script>
</html>