<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grade Status</title>
</head>

<body>
	<form action="" method="POST" >
		<table border="1">
			<tr>
				<td>
					<input type="text" name="firstname" placeholder="Firstname">
				</td>
				<td>
					<input type="text" name="lastname" placeholder="Lastname">
				</td>
				<td>
					<select name="status">
						<option value="passed">Passed</option>
						<option value="failed">Failed</option>
					</select>
				</td>
				<td>
					<button name="grade_submit" value="submitted" type="submit">Submit</button>
				</td>
			</tr>
		</table>
	</form>


	<br/><br/><br/><br/><br/>

	
	
<?php 

if (isset($_POST['grade_submit'])) {  // is set? isset( )
	$firstname  = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$status = $_POST['status'];
	echo $firstname ." ". $lastname ." is ". $status;
}



?>





</body>
</html>