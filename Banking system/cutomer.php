<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
		table{
			border-collapse: collapse;
			width: 100%;
			color: black;
			font-family: 'Poppins',sans-serif;
			font-size: 20px;
			text-align: left;
		}
		th{
			text-align: center;
			height: 50px;
			background-color: #006666;
			color: white;
		}
		td{
			text-align: center;
				height: 40px;
		}
		
		h1{
			text-align: center;
			color:#006666;
			font-family: 'Poppins',sans-serif;
		}

	</style>
</head>
<body>
	<h1>Customers</h1>
	<table style="border: 5px solid #006666;">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Current Balance:</th>
		
		</tr>
		<?php
	$conn = mysqli_connect("localhost", "root", "", "banking");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT name, email, credit FROM students";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>".  $row["email"] ."</td><td>" .  $row["credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>

	</table>

</body>
</html>