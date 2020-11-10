<?php
$hostname = "localhost";
    $username = "id14247910_sayalipawale";
    $password = "Pandurangsayali23@";
    $databaseName = "id14247910_test";

        $conn = mysqli_connect($hostname, $username, $password, $databaseName);

        if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else
     {
     	echo "";
    }
?>
