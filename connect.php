<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "profitness";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "successfully";

$sql="INSERT INTO register(Name,Phone,Email,Password)VALUES('$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[password]')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>