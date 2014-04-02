<?php
    session_start();
    include('db_connect.php');
	//get user info from db using cookie
   $query = "SELECT * FROM users WHERE user_id = " . $_COOKIE['user_id'];

   $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
		$row = mysqli_fetch_array($result);
   
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$user_id = $row['user_id'];
		$admin = $row['admin'];
		
		$_SESSION['user_id'] = $user_id;
		
		if ($admin == 1){
		  header("Location: admin.php");
		  }
		else{
		header('Location: index.php');
		}
?>
