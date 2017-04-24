<?php
	session_start();
	// include("ConnectDB.php");

	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=mbus_database", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		$user = $_POST["username"];
		$pwd = $_POST["password"];

	    echo "Connected successfully";

	    echo $_POST["username"]."<br>".$pwd."\n";


		$stmt = $conn->query("SELECT * FROM user WHERE username = '".$user."'
		and password = '".$pwd."'");

		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		// $objResult = $objQuery->execute;


		if(!$result)
		{
				echo "failed";
		}
		else
		{

				$_SESSION["username"] = $result["username"];
				$_SESSION["password"] = $result["password"];


				session_write_close();
				echo header("location:home.php");

		}

	$conn=null;




	    }

	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }




?>
