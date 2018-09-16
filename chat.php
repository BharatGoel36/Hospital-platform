<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>chat Page</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>	
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<div class="container">
<div class="row">
   <div class="col s12 m12 l12">
        <h2 class="subHeading">Get in Touch</h2>
   </div>
</div>
<form action="insert_chat.php" method="get">

<div class="row">
   <div class="col s6 m6 l6">
<label class="labell">Provide ID 
	<input type = "text" name="id" class="validate"/>
</label>
</div>
</div>

<div class="row">
   <div class="col s6 m6 l6">
<label class="labell">Message
	<input type = "text" name = "message" class="validate"/>
</label>
</div>
</div>

<label class="labell">
	<button class="btn waves-effect waves-light sub" type="submit" value = " Submit ">Submit<i class="material-icons right">send</i></button>
</label>

<!--
ID:<input type = "text" name = "id" class = "box"/></br></br>
Message:<input type = "text" name = "message" class = "box"/></br></br>
<input type="submit" name="submit"/>-->
</form>
<br>
<div class="row">
   <div class="col s12 m12 l12">
        <h2 class="subHeading">Chat History</h2>
   </div>
</div>

<?php

$needle = 'p';
$temp=$login_session;
$tempd=$login_sessiond;
if (strlen(strstr($temp,$needle))>0) {
$sql = "SELECT * FROM $login_session  ORDER BY timestamp";
$result = $db->query($sql);
while($row= $result->fetch_assoc()) {
	echo "<div class=\"row\">";
    echo "<div class=\"col s12 m12 l12\">";
	//echo "<br> id: ". $row["idd"]. " message ". $row["message"]." timestamp:". $row["timestamp"];
	echo "<p class=\"chatting1\">". $row["idd"]." : ". $row["message"]. "</p>";
	echo "<p class=\"chatting2\">". $row["timestamp"]."</p>";
	echo "</div>";
	echo "</div>";
	}}
	else
	{ 
		

		$sql1 = "SELECT * FROM $tempd  ORDER BY idp DESC";
$result1 = $db->query($sql1);

while($row1= $result1->fetch_assoc()) {
	//echo "<br> id: ". $row1["idp"]. " message ". $row1["message"]." timestamp:". $row1["timestamp"];

	echo "<div class=\"row\">";
    echo "<div class=\"col s12 m12 l12\">";
	//echo "<br> id: ". $row["idd"]. " message ". $row["message"]." timestamp:". $row["timestamp"];
	echo "<p class=\"chatting1\">". $row1["idp"]." : ". $row1["message"]. "</p>";
	echo "<p class=\"chatting2\">". $row1["timestamp"]."</p>";
	echo "</div>";
	echo "</div>";

	}
	}

?>
<br><br>
<div class="row">
	<div class="col s6 m6 l6">
		<a class="links" href = "logout.php">Sign Out</a>
	</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</body>
</html>