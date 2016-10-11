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

$sql = "SELECT * FROM upload_img WHERE img_name = '$nameinput'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        
echo "<html> 
<head> 
<title> search result </title> 
<link rel=stylesheet href=chat.css /> 
</head> 
<body> 
<div> 
				<h2 id=header1> <center> Search result </center> </h2>
			
				
				<div data-role=page id=chat>
<div id=page-wrap> 

  
    
    <div id=nav>
        <a href=ShadowMap.php  id=btnm>Map</a>
    	</div>
              </div>
              </body> 
              <br /> 
            <center>  $row[img_name]  <center> 
              <br />
              <center> <img src=\"{$row['img_path']}\" /> </center>
              </html>";
  


     }
} else {
     echo "0 results";
}

$conn->close();
?>



