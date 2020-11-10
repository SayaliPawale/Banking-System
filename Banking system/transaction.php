<!DOCTYPE html>
<html>
<head>
	<title>All Transactions</title>
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
			height: 60px;
			background-color: #006666;
			color: white;
		}
		td{
			text-align: center;
				height: 40px;
				border-right: 1px solid black;
		}
		tr:nth-child(even) {
			
			background-color: #ccffff;
		}
		h1{
			text-align: center;
			color:#006666;
			font-family: 'Poppins',sans-serif;
		}

	</style>
</head>
<body>
	<h1>All Transactions</h1>
	<table>
		<tr>
			<th>Sender</th>
			<th>Receiver</th>
			<th>Amount Transfer:</th>
		
		</tr>
		<?php
	$conn = mysqli_connect("localhost", "root", "", "banking");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM transfer_history";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["from_user"] ."</td><td>".  $row["to_user"] ."</td><td>" .  $row["Credit"] ."</td></tr>";
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