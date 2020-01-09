<?php
            session_start();
            require_once("connect.php"); 

            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
            	$result = 4; 
	            if (isset($_POST['username']) && isset($_POST['password']))
	            {
	            	$username = $_POST['username'];
	              	$password = $_POST['password'];


                    $query =$pdo->prepare("SELECT * FROM users WHERE username=:username and password=:password");
                    $query->execute(array('username' => $username, 'password' => $password));
                    $result= $query->fetchall(PDO::FETCH_ASSOC);
                    $count=count($result);



	              	if($count == 1)
	              	{
	              	$_SESSION['username'] = $username;
                    if ($_SESSION['username'] == 'admin') $_SESSION['admin'] = 1;
	               	$result = 1;
					}
	              	else {
	              	    $query = $pdo->prepare("SELECT * FROM users WHERE username=:username");
	              	    $result = $query->execute(array('username' => $username));
	              	    $count = mysqli_num_rows($result);
	              	    if ($count == 1) $result = 2;
	              	    else $result = 3;
	              	}
	            }
        	}

        	header("Location: /login.php?result=$result");
          	?>