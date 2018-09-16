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
       <h1 class="byline">Hi <?php echo $login_sessiond; ?></h1>
   </div>
</div>

<div class="row">
   <div class="col s12 m12 l12">
        <h2 class="subHeading">Patients ID List</h2>
   </div>
</div>

<?php
$sql= "SELECT idp FROM profilep WHERE idd = '$login_sessiond'";
$result=$db->query($sql);
$i='0';
while($row= $result->fetch_assoc()){
	$i++;
	echo "<div class=\"row\">";
    echo "<div class=\"col s12 m12 l12\">";
	//echo "<br> ".$i." ".$row["idp"];
    echo "<p class = \"info\">".$i." Patient id: ".$row["idp"]."</p>";
    echo "</div>";
    echo "</div>";	
}

?>

<div class="row">
   <div class="col s12 m12 l12">
        <h2 class="subHeading">Write A Prescription</h2>
   </div>
</div>

<form action="validate.php" method="GET">
<div class="row">
   <div class="col s6 m6 l6">
<label class="labell">ID of Pateint
	<input type = "text" name="id" class="validate"/>
</label>
</div>
</div>
<div class="row">
   <div class="col s6 m6 l6">
<label class="labell">From Date
    <input type="date" name="dw" class="datepicker">
	<!--<input type="date" name="dw" class="validate">-->
</label>
</div>
<div class="col s6 m6 l6">
<label class="labell">To Date
	<input type="date" name="tw" class="datepicker">
</label>
</div>
</div>
<div class="row">
 <div class="col s6 m6 l6">
<label class="labell">Name of Pill / Medication
	<input type = "text" name="pills" class="validate"/>
</label>
</div>
<div class="col s6 m6 l6">
<label class="labell">Number of Pills
	<input type = "text" name="count" class="validate"/>
</label>
</div>
</div>
<div class="row">
<div class="col s12 m12 l12">
<label class="labell">Notes
	<input type = "text" name="notes" class="validate"/>
</label>
</div>
</div>
<label class="labell">
	<button class="btn waves-effect waves-light sub" type="submit" value = " Submit ">Submit<i class="material-icons right">send</i></button>
</label>	
</form>


<br><br>
<div class="row">
	<div class="col s6 m6 l6">
		<a class="links" href = "logout.php">Sign Out</a>
	</div>
    <div class="col s6 m6 l6">
		<a class="links spl" href = "chat.php">Help Your Patient !</a>
	</div>
</div>

<!--
<form>
<table id='tab'>
	<tr>
		<th>idp</th>
		<th>from when</th>
		<th>to when</th>
		<th>pills</th>
		<th>count</th>
		<th>notes</th>
		
	</tr>
	<tr>
		<td>
			<input type="textfield" name="id">
			</td>
			<td>
			<input type="date" name="dw"></td>
			<td>
			<input type="date" name="tw"></td>
			<td>
			<input type="textfield" name="pills"></td>
			<td>
			<input type="textfield" name="count"></td>
			<td>
			<input type="textfield" name="notes">
		</td>
		
	</tr>
	
</table>

		<input type="submit" name="submit">
			
				<input type="button" name="add" value ="Add Row" onclick="addrow('tab')">
			
			<input type="button" name="remove" value="Remove Row" onclick="removerow('tab')">
			
</form>
-->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript">

    history.pushState(null, null, document.title);
        window.addEventListener('popstate', function () {
        history.pushState(null, null, document.title);
     });

       $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });   
/*	
	function addrow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	// limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[1].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[1].cells[i].innerHTML;
		}
	}
	function removerow(tableID) {
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		var temp = rowCount-1;
		document.getElementById(tableID).deleteRow(temp);
	}
*/	

</script>





</body>
</html>