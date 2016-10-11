<html>
    <head>
<?php
$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "test_db";
$port = 3306;

$nameinput = $_POST['myTextArea'];
$surnameinput = md5($_POST['password']);
$bioinput = $_POST['bio'];

//$second = $_POST['name'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//inserting
$sql = "INSERT INTO logs (user_name, password, bio)
VALUES ('$nameinput', '$surnameinput', '$bioinput')";

//if connection successful go to this page 
if (mysqli_query($conn, $sql)) {
    include 'ShadowMap.php';
} else { //if not successful
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>