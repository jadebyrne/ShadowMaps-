<DOCTYPE! html>

<head>
        <link rel="stylesheet" href="chat.css" />
		<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>
		<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
<title>Chat Box </title>
</head>
	<body onload="setInterval('chat.update()', 1000)">
	

		
<script>$('button').click(function () {
    $('#slideout').toggleClass('on');
});
</script>

<div data-role="page" id="chat">
<div id="page-wrap"> 

    <h2 id="h1">Chat</h2>
    
    <div id="nav">
        
        
        
    <a href="ShadowMap.php"  id="btnm">Map</a>
    
    </div></div>
   
    <div id="chatstuff">
    <div id="text">
    <p id="name-area"></p>
    </div>
    <div id="chat-wrap"><div id="chat-area"></div></div>
    
    <form id="send-message-area" data-ajax="false">
        <p>Your message: </p>
        <textarea id="sendie" maxlength = '100'></textarea>
    </form>

</div>
	<script>
		function Chat () {
		    this.update = updateChat;
		    this.send = sendChat;
		    this.getState = getStateOfChat;
		}
		
		//gets the state of the chat
function getStateOfChat() {
	if(!instanse){
		instanse = true;
		$.ajax({
			type: "POST",
			url: "process.php",
			data: {'function': 'getState', 'file': file},
			dataType: "json",	
			success: function(data) {state = data.state;instanse = false;}
		});
	}	
}

//Updates the chat
function updateChat() {
	if(!instanse){
		instanse = true;
		$.ajax({
			type: "POST",
			url: "process.php",
			data: {'function': 'update','state': state,'file': file},
			dataType: "json",
			success: function(data) {
				if(data.text){
					for (var i = 0; i < data.text.length; i++) {
						$('#chat-area').append($(" Hello	"+ data.text[i] +"	"));
					}	
				}
				document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				instanse = false;
				state = data.state;
			}
		});
	}
	else {
		setTimeout(updateChat, 1500);
	}
}

//send the message
function sendChat(message, nickname) { 
	updateChat();
	$.ajax({
		type: "POST",
		url: "process.php",
		data: {'function': 'send','message': message,'nickname': nickname,'file': file},
		dataType: "json",
		success: function(data){
			updateChat();
		}
	});
}
		</script>
		<?php
		
		$function = $_POST['function'];
    
    $log = array();
    
    switch($function) {
    
       case('getState'):
           if (file_exists('chat.txt')) {
               $lines = file('chat.txt');
           }
           $log['state'] = count($lines); 
           break;  
      
       case('update'):
          $state = $_POST['state'];
          if (file_exists('chat.txt')) {
             $lines = file('chat.txt');
          }
          $count =  count($lines);
          if ($state == $count){
             $log['state'] = $state;
             $log['text'] = false;
          } else {
             $text= array();
             $log['state'] = $state + count($lines) - $state;
             foreach ($lines as $line_num => $line) {
                 if ($line_num >= $state){
                       $text[] =  $line = str_replace("\n", "", $line);
                 }
             }
             $log['text'] = $text; 
          }
            
          break;
       
       case('send'):
       	 $nickname = htmlentities(strip_tags($_POST['nickname']));
	     $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	     $message = htmlentities(strip_tags($_POST['message']));
	     if (($message) != " \n ") {
	       if (preg_match($reg_exUrl, $message, $url)) {
	          $message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].' </a >', $message);
	       } 
	          fwrite(fopen('chat.txt', 'a'), " <span> ". $nickname . " </span> " . $message = str_replace(" \n ", "  ", $message) . " \n  "); 
	     }
         break;
    }
    echo json_encode($log);
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="chat.js"></script>
<script>

  // ask user for name with popup prompt    
  var name = prompt("Enter your chat name:  ", "  Guest  ");
 
  // default name is 'Guest'
  if (!name || name === '  ') {
    name = " Guest ";  
  }
  
  // strip tags
  name = name.replace(/(<([^>]+)>)/ig,"  " + ":");
 
  // display name on page
  $("#name-area ").html(" You are: <span>      " + name + "   </span>      ");
  
  
  // kick off chat
  var chat =  new Chat();

  $(function() {
  
     chat.getState(); 
     
     // watch textarea for key presses
     $("#sendie").keydown(function(event) {  
     
         var key = event.which;  
   
         //all keys including return.  
         if (key >= 33) {
           
             var maxLength = $(this).attr("maxlength");  
             var length = this.value.length;  
             
             // don't allow new content if length is maxed out
             if (length >= maxLength) {  
                 event.preventDefault();  
             }  
         }  
                                                                                                     });
     // watch textarea for release of key press
     $('#sendie').keyup(function(e) {  
                
        if (e.keyCode == 13) { 
        
              var text = $(this).val();
              var maxLength = $(this).attr("maxlength");  
              var length = text.length; 
               
              // send 
              if (length <= maxLength + 1) { 
                chat.send(text, name);  
                $(this).val("  ");
              } else {
                $(this).val(text.substring(0, maxLength));
              }  
        }
     });
  });
  
</script>

	    <div data-role="footer" id="footer">
				<h2>&copy; ShadowMaps 2015</h2>
			</div>
	    
			</body>
	</html>		
	