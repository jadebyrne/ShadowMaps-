<html>
<?php

$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "chatbox";
$port = 3306;


$uname =$_POST['uname'];
$msg =$_POST['msg']

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO logs (uname, msg)
VALUES ('$uname', '$msg')";

$result1 = $sql("SELECT * FROM logs ORDER by id DESC");

while($extract = mysql_fetch_array($result1)){
    echo $extract['uname'] . ": " . $extract['msg'] . "<br>";
}

?>