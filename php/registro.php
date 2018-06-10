

<?php

$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
$pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
$lastname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : null;
$country = isset($_REQUEST['country']) ? $_REQUEST['country'] : null;
$company = isset($_REQUEST['company']) ? $_REQUEST['company'] : null;

//Connection Details
$servername = "localhost";
$username = "adm_fixture";
$password = "catarojo1";
$dbname = "fixture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (email,password,name,lastname,country,company)
VALUES ('$email','$pass','$name','$lastname','$country','$company')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo Usuario Creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

