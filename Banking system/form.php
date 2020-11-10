<?php
$conn = mysqli_connect("localhost", "root", "", "banking");
if($conn-> connect_error){
	die("connection failed:". $conn-> connect_error);
}
$sql = "SELECT name, email, credit FROM students";
error_reporting(0);
$result = mysqli_query($conn,"SELECT *  FROM students");
$resul1 = mysqli_query($conn,"SELECT *  FROM students");
?>


<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>
    	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
	margin: 0;
	box-sizing: border-box;

}
body{
	background-image: url(last.jpg);
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	font-family: 'Poppins', sans-serif;
	background-color: #006666;
}
form{
	
	margin: 100px;
	padding: 30px;
	font-size: 20px;
	height: 540px;
	width: 700px;
	justify-content: center;
	margin-right: auto;
	margin-left: auto;
	background-color: white;
	border-radius: 40px;
	box-shadow: 0 10px 25px 0 rgba(0,0,0,0.2);
}
p{
	text-align: center;
	color: #006666;
	font-size: 25px;
}
input[type=submit]{
	width: 50%;
	background-color: #006666;
	color: white;
	padding: 10px 20px;
	border-radius: 20px;
	margin-left: 130px;
	text-decoration: none;
	display: inline-block;
	border: none;
}
input[type=submit]:hover{
	box-shadow: 0 10px 25px 0 rgba(0,0,0,0.2);
	background-color: lightblue;
	color: black;
	cursor: pointer;
}


input[type=text]{
	border:none;
	border-bottom: 1px solid black;
	background: transparent;
	height: 30px;
	width: 600px;
	outline: none;

}

@media screen and (max-width: 700px){
form{
	margin: 150px;
	padding: 20px;
	font-size: 20px;
	height: 530px;
	width: 300px;
	justify-content: center;
	margin-right: auto;
	margin-left: auto;
	background-color: white;
	border-radius: 50px;
	box-shadow: 0 10px 25px 0 rgba(0,0,0,0.2);
}
input[type=submit]{
	width: 50%;
	background-color: #006666;
	color: white;
	padding: 10px 20px;
	border-radius: 20px;
	margin-left: 50px;
	text-decoration: none;
	display: inline-block;
}
input[type=text]{
	border:none;
	border-bottom: 1px solid black;
	background: transparent;
	height: 30px;
	width: 230px;
	outline: none;
}

}
.butt{
	display: inline-block;
	padding: 10px 20px;
	margin-top: 15px;
	background-color:  #006666;
	border-radius: 40px;
	color: white;
	font-size: 16px;
	text-decoration: none;
	border: 2px solid white;
	box-shadow:0 10px 25px 0 rgba(0, 0, 0, 0.2);
}
select{
	color: black;
	height: 30px;
	border-radius: 10px;
	font-weight: 200;
}

    </style>

</head>
<body>
	
   
<form action="" method="GET" class = "form">
	<b><p>Transfer Money</p></b><br>
	<h2 style="color: #006666">Sender:</h2>
		<select  class= fromuser type="text"  name="u1" required value="">
		<option value ="">From</option>
		<?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

        </select><br><br>
       <h2 style="color: #006666">Receiver:</h2>
		<select  class =touser  type="text" name="u2" value="">
	     <option value ="">To</option>
		<?php
                        while($tname = mysqli_fetch_array($resul1)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

        </select>
		<br>
		<br>
		<h2 style="color: #006666">Amount:</h2>
		<input type="text" id="amount" name="amt" placeholder="Enter amount">
		<br><br>
		<input type="submit" id= submit name="submit" value=" Transfer">
		
	</form>
	<?php
	
			if($_GET['submit'])
			{
			$u1=$_GET['u1'];
			$u2=$_GET['u2'];
			$amt=$_GET['amt'];


			if($u1!="" && $u2!="" && $amt!="")
			{
				//update transaction changes in database
				$query1= "UPDATE students  SET credit = credit + '$amt' WHERE Name = '$u2' ";
				$data1= mysqli_query($conn, $query1);
				$query2= "UPDATE  students SET credit = credit  - '$amt' WHERE Name = '$u1' ";
				$data2= mysqli_query($conn, $query2);
				
				//insert into transaction_history
				    $query1 = "INSERT INTO transfer_history (from_user,to_user,Credit) VALUES('$u1','$u2','$amt')";
                                    $res2 = mysqli_query($conn,$query1);
				
                                          if($res2){
		                           	 $user1 = "SELECT * FROM students WHERE  Name='$u1' ";
                                                 $res=mysqli_query($conn,$user1);
                                                 $row_count=mysqli_num_rows($res);
			                      }
				
            

				     if ($data1 && $data2)
				     {
					$message="Successful transfer";
                                        echo "<script type='text/javascript'> document.location = 'Thank.html'; </script>";
				}
				else
				{
					$message="Error While Commiting Transaction ";
					echo "<script type='text/javascript'>alert('$message');
                                        </script>";
				}

			}

			else
			{
				$message="All Fields are Mandatory";
				echo "<script type='text/javascript'>alert('$message');
                    </script>";
			}
		}
		

	?>
</body>
</html>






