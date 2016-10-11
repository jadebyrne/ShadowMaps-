<html>
<body>

<?php
$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "chatbox";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  uname, msg FROM logs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> UserName: ". $row["uname"]. " " . $row["msg"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>
