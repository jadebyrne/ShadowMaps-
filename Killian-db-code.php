 if(isset($_POST['add'])) {
            $host = 'localhost';
            $user = 'x14402132';
            $dbpass = '';
            $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
            
            
            
            if(! get_magic_quotes_gpc() ) {
               $user_name = addslashes ($_POST['user_name']);
               $password = addslashes ($_POST['password']);
            }else {
               $user_name = $_POST['user_name'];
               $password = $_POST['password'];
            }
            
            
            $sqli = "INSERT INTO login ". "(user_name, password
            ) ". "VALUES('$user_name','$password', NOW())";
               
            mysql_select_db('test_db');
            $retval = mysql_query( $sqli, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>