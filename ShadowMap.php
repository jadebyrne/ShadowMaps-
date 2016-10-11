

<html>
	<head>
	
		<title>My Mobile Page</title>
	  	<link rel="stylesheet" href="themes/themeD.css" />
 		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<!-- Map/Leafletjs css and script -->
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
		<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
		<link rel="stylesheet" href="main.css" />
		<script type="text/javascript" src="functions.js"></script>
		<script type="text/javascript" src="slider.js"></script>
		<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>
		<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
		
		<!--RTE Imports, libraries, scripts, links-->
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <link rel="apple-touch-icon" href="//mindmup.s3.amazonaws.com/lib/img/apple-touch-icon.png" />
	    <link rel="shortcut icon" href="https://d1g6a398qq2djm.cloudfront.net/img/favicon.ico" >
	    <link href="external/google-code-prettify/prettify.css" rel="stylesheet">
	    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="external/jquery.hotkeys.js"></script>
    	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    	<script src="external/google-code-prettify/prettify.js"></script>
		<link href="index.css" rel="stylesheet">
    	<script src="bootstrap-wysiwyg.js"></script>
    	
    	//Workspace Links/Plugins
    	<script type="text/javascript" src="http://feather.aviary.com/imaging/v3/editor.js"></script>
    	<script type='text/javascript'>
			var featherEditor = new Aviary.Feather({
				apiKey: 'your-client-id-here',
				theme: 'dark', // Check out our new 'light' and 'dark' themes!
				tools: 'all',
				appendTo: '',
				onSave: function(imageID, newURL) {
					var img = document.getElementById(imageID);
					img.src = newURL;
				},
				onError: function(errorObj) {
					alert(errorObj.message);
				}
			});
			function launchEditor(id, src) {
				featherEditor.launch({
					image: id,
					url: src
				});
				return false;
				}
		</script>
		
		

        
<!--<link rel="stylesheet" type="text/css" href="menu.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		-->
	</head>
	<body onLoad="iFrameOn();">
		
			<div data-role="page" id="page1" >
			<!--<div data-role="header" id="header">
				<h1>My First Page</h1>
				<div data-role="navbar">	
					<ul>
						<li><a href="#page3" data-icon="eye" id="navbar" > map</a></li>
						
						<li><a href="#page6" data-icon="grid" id="navbar"> map</a></li>
						
					</ul>
				</div>
					
			</div>-->
			<div data-role="main" class="ui-content" style="padding:0px;">
				<!--<h1 >Hello World!</h1>
				<p>Welcome to my first page</p>
				<div data-role="collapsible"  >
				<h2  id="menu"  >  </h2>
					
					<ul id="menu">
						<button type="button" id="btn" data-icon="home"></button>
						<button type="button" id="btn" data-icon="location"></button>
					
						
						<button type="button" id="btn" data-icon="shop"></button>
						<button type="button" id="btn" data-icon="navigation"></button>
					</ul>
				</div>-->
				<div id="map" style="height:100vh">
					<div id='injection_site' style="height:100vh;z-index:1;positioning:absolute">
						<img id='image1' src='http://www.cod4central.com/images/cod4maps/strikehuge.jpg' style="height:100vh;width:100vh;z-index:1;positioning:absolute">
							<p>
								<input type='image' src='http://images.aviary.com/images/edit-photo.png' value='Edit photo' onclick="return launchEditor('image1', 'http://www.cod4central.com/images/cod4maps/strikehuge.jpg');" />
							</p>
					
					<div data-role="collapsible"  >
						<h2  id="menu"  >  </h2>
					
						<ul id="menu">
							
						<a href="#page4"><button type="button" id="btn" data-icon="home"></button></a>
						
							<a href="#page3"><button type="button" id="btn" data-icon="user"></button></a>
						
						<a href="#myPopup" data-rel="popup"><button type="button" id="btn" data-icon="action"></button>	</a>
						
							<div data-role="popup" id="myPopup">
							 
							  	<div  >
									<!-- Facebook-->
									 <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
			       					 <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
			    					</a>
			    					<!--Google+ -->
			    					<a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
			       					<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
			    					</a>
			    					<!--Twitter-->
			    					<a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
			        				<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
			    					</a>
			    					
								</div>
							</div>

						<a href="#page6"><button type="button" id="btn" data-icon="shop"></button></a>
						
						<a href="#page2"><button type="button" id="btn" data-icon="navigation"></button></a>
					
						<a href="chat.php" rel="external" data-ajax="false"><button type="button" id="btn" data-icon="comment"></button></a>
						
							<!--div id="ugghh"><button type="button" id="btn" data-icon="comment"></button>
								 <div id="slideout">
								   <form>
								      <textarea class="form-control"></textarea>
								      <input class="btn btn-primary" type="submit" value="Send message"></input> 
								    </form>

						  		 </div>
						  	</div-->
						  		
						
						</ul>
					</div>
					
					
						<div data-role="click" id="menu1" data-icon="location" >
						<input data-role="click" data-icon="location" value='Edit' onclick="return launchEditor('image1', 'http://www.cod4central.com/images/cod4maps/strikehuge.jpg');" />	 
						
						<!--<a href="#popupBasic" data-rel="popup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-transition="pop">Basic Popup</a>
							<div data-role="popup" id="popupBasic">
						<p>This is a completely basic popup, no options set.</p>
					</div> -->
			
							
							
						
						
							
						
							</div>
						<ul>
							<a href="#page7"><button type="button" id="btn4" data-icon="edit"></button></a>
						
						</ul>
						</div>
						</div>
					</div>
					
					<!--<script type="text/javascript">

    					var featherEditor = new Aviary.Feather({
        					apiKey: '1234567',
        					onSave: function(imageID, newURL) {
            					var img = document.getElementById(imageID);
            					img.src = newURL;
        					}
    					});

    					function launchEditor(id, src) {
        					featherEditor.launch({
            					image: id,
        						url: src
        					});
        					return false;
						}

					</script>-->
				
					<!--<script type="text/javascript"> 
					
						
        				var map = L.map('map').setView([51.505, -0.09], 13);
        
                        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);
        
                        L.marker([51.5, -0.09]).addTo(map)
                        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                        .openPopup();
                  	</script>-->
                </div>
			</div>
			<!--<div data-role="footer">
				<h2>&copy; ShadowMapp</h2>
			</div>-->
		</div>
		
		
		
		<!--SMaps-->
		    <div data-role="page" id="page2" data-theme="d">
            <div data-role="header">
             <h1>SMaps</h1>
             	<div data-role="navbar">
					<ul>
						<li><a href="#page1" data-icon="eye">map</a></li>
					</ul>
				</div>
				</div>
				

    
            
            <div data-role="main" class="ui-content">
            	
            	<div id="flip">Click Me</div>
    <div id="panel">
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

$sql = "SELECT * FROM smaps";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        
echo "<br> ". "<img src=\"{$row['d_img']}\" />" ;

     }
} else {
     echo "0 results";
}

$conn->close();
?>
    <img  id="slideshow"/>
    <br/>
    
    
    <a href="#" onclick="changeImage(-1) return false">previous map</a><br/>
    <a href="#" onclick="changeImage(1); return false"> next map</a>
    
    <script src="slideshow.js"></script>
    
   
    
    
</div>
<br/>
    
</div>
            <div data-role="footer">
               <h2>&copy; ShadowMaps 2016</h2>
                
            </div>
            
        </div>
       
        </div>
	
	
				<!--Register Page -->
		<div data-role="page" id="page4" data-theme="d">
			<div data-role="header" id="header">
				<h1>Register</h1>
				<div data-role="navbar">
					<ul>
						<li><a href="#page1" data-icon="eye">Map</a></li>
						<li><a href="#page3" data-icon="user">Login Page</a></li>
					</ul>
				</div>
			</div>
				
			<div data-role="main" class="ui-content">
				<h1 id="header1">Register</h1>
				<div>
				<img id="propic" src="smlogo.png" alt="some_text" />
				
				</div>
				<br/>
				<h2>Create User-Name and Password</h2>
			
				
				
				<div id="profileForm">
				<form method = "post" data-ajax="false" action = "Untitled1.php"> 
				

                   <p>UserName</p>
                   	<input name = "user_name" type = "text" 
                           id = "user_name">
                    
                    <p>Password</p>
                    	<input name = "password" type = "text" 
                           id = "password">
                    
                    <p>Bio</p>
                    	<input name = "bio" type = "text" 
                           id = "bio">

					<button> save!</button>
			
				
				</form>
				</div>
				
				      
			
		</div>
		
		<div data-role="footer">
				<h2>&copy; ShadowMaps 2015</h2>
			</div>
		</div>
		
		
						<!--login Page -->
		<div data-role="page" id="page3" data-theme="d">
			<div data-role="header" id="header">
				<h1>Login</h1>
				<div data-role="navbar">
					<ul>
						<li><a href="#page1" data-icon="eye">Map</a></li>
							<li><a href="#page8" data-icon="user">Profile Page</a></li>
					</ul>
				</div>
			</div>
				
			<div data-role="main" class="ui-content">
				<h1 id="header1">Login</h1>
				<div>
				<img id="propic" src="smlogo.png" alt="some_text" />
				
				</div>
				<br/>
				<h2>Sign In</h2>
				
				
				
				
				<div id="profileForm">
				<form method = "post" data-ajax="false" action = "login.php"> 
				
				
					<p>What is your User Name?</p>
						<input name = "user_name" type = "text"> <br/>
						<br/>
						<p>Password</p>
                         
                           <input name = "password" type = "text">
                        
                         
                          <button> submit </button>
					
				
				
				
				
				</form>
				</div>
				
				      
			
		</div>
		
		<div data-role="footer">
				<h2>&copy; ShadowMaps 2015</h2>
			</div>
		</div>
		
		
		
					
					<!--profile page-->
		<div data-role="page" id="page8" data-theme="d">
			<div data-role="header" id="header">
				<h1>Profile</h1>
				<div data-role="navbar">
					<ul>
						<li><a href="#page1" data-icon="eye">map</a></li>
					</ul>
				</div>
			</div>
				
			<div data-role="main" class="ui-content">
				<h1 id="header1">Profile</h1>
				<div>
				<img id="propic" src="smlogo.png" alt="some_text" />
				
				</div>
				<br/>
				<h2>You're Logged In</h2>
				
				
				
				
				<div id="profileForm">
				<form method = "post" data-ajax="false" > 
				
				<div >
					<?php
$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "test_db";
$port = 3306;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user_name, bio FROM logs where user_name = '$myusername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>User</th><th>Name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["bio"]. "</td><td>" . $row["user_name"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  
				</div>
				
				
				
				</form>
				</div>
				
				      
			
		</div>
		
		<div data-role="footer">
				<h2>&copy; ShadowMaps 2015</h2>
			</div>
		</div>
		
			
		<!--Marketplace-->
		<div data-role="page" id="page6" data-theme="d">
			<div data-role="header" id="header">
				<h1> Marketplace </h1>
				<div data-role="navbar">
					<ul>
						<li><a href="#page1" data-icon="eye">map</a></li>
					</ul>
					
				</div>
			</div>
				
			<div data-role="main" class="ui-content">
				<h1 id="header2">Marketplace</h1>
				
   
				
				<br/>
			<form  action="Untitled3.php" method="post" data-ajax="false">
                        Name:<input type="text" value="name" name='name'>
                       
                       
                       
                         <br />
                        <button>Search</button>
</form>

<form  action="download.php" method="post" data-ajax="false">
                        Download a map!<input type="text" value="name" name='name'>
                       
                       
                       
                         <br />
                        <button>Download</button>
</form>
			
			<h1 id="header2">All maps</h1>
			
			<div id="image">
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
</div>
			</div>
			<br/>
				<br/>
		
		
		<div data-role="footer">
				<h2>&copy; ShadowMaps 2015</h2>
		</div>
	</div>
	
	
	
	
	
	<!--Page 6 Text Editor-->
	<div data-role="page" id="page7" data-theme="d" >
		<div data-role="header" id="header" >
				<h1>Text Editor</h1>
			<div data-role="navbar">
					<ul>
						<li><a href="#page1" data-icon="eye">map</a></li>
					</ul>
					
				</div>
			<script src="wysiwyg/wysiwyg.js"></script>
			 
<form action="txteditortodb.php" name="myform" id="myform" method="post" data-role="false">
<p>Entry Title: <input name="title" id="title" type="text" size="80" maxlength="80" /></p>
<p>Entry Body:<br>
<div id="wysiwyg_cp" style="padding:8px; width:700px;">
  <input type="button" onClick="iBold()" value="B"> 
  <input type="button" onClick="iUnderline()" value="U">
  <input type="button" onClick="iItalic()" value="I">
  <input type="button" onClick="iFontSize()" value="Text Size">
  <input type="button" onClick="iForeColor()" value="Text Color">
  <input type="button" onClick="iHorizontalRule()" value="HR">
  <input type="button" onClick="iUnorderedList()" value="UL">
  <input type="button" onClick="iOrderedList()" value="OL">
  <input type="button" onClick="iLink()" value="Link">
  <input type="button" onClick="iUnLink()" value="UnLink">
  <input type="button" onClick="iImage()" value="Image">
</div>

<textarea  name="myTextArea" id="myTextArea" cols="100" rows="14"></textarea>

</p>
<br /><br />

<button> submit </button>


</form>
			
		</div>
		
		<div data-role="footer">
				<h2>&copy; ShadowMaps 2015</h2>
		</div>
	</div>
		
<script>$('button').click(function () {
    $('#slideout').toggleClass('on');
});
</script>
	


	
</html>