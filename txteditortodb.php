<html>
    <head>
<?php
$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "text_editor";
$port = 3306;

$nameinput = $_POST['myTextArea'];

$bioinput = $_POST['title'];

//$second = $_POST['name'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//inserting
$sql = "INSERT INTO docs (titles, docs)
VALUES ('$nameinput', '$bioinput')";

//if connection successful go to this page 
if (mysqli_query($conn, $sql)) {
    include 'ShadowMap.php';
} else { //if not successful
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>