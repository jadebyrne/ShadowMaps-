<?php
//Connect to the database
    $host = "127.0.0.1";
    $user = "x14402132";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "test_db";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
    
    ?>