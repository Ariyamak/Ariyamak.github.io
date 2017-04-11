<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dreamhome';


// Connected database
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	echo "Connected";
}

$stmt = $conn->prepare("SELECT fname, lname, address FROM privateowner"); 
$stmt->execute();

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
