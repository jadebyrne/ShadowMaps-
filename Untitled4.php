			<?php
$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "upload_img";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM upload_img";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        
echo "<br> ".$row["img_name"] . "<img src=\"{$row['img_path']}\" />" ;

     }
} else {
     echo "0 results";
}

$conn->close();
?>