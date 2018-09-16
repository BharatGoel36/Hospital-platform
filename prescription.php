<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prescription page</title>
</head>
<body>
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
<script type="text/javascript">
	
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
	

</script>

</body>
</html>

