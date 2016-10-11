<html>
<body>

<?php
$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "upload_img";
$port = 3306;

$nameinput = $_POST['name'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 



$sql = "INSERT INTO smaps
(d_img)
SELECT img_path FROM upload_img WHERE img_name = '$nameinput'";
$result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
    echo "<script> window.location.assign('ShadowMap.php'); </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();


?>  

</body>
</html>
