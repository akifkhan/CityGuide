<?php
	include('header_side.php');
	include('db_connect.php');
?>
<html>
<body>




<?php
	//print errors if something is wrong with the user's input information:
	//$user_id = $_SESSION['user_id'];
 
	if( isset($_COOKIE['user_id'])){
		$user_id = $_COOKIE['user_id'];
	}
	
	$query="Select admin from users where user_id= $user_id";
	
	$result=mysqli_query($db, $query)or die("Access Denied");
	
	if ($result)
	{ 
	 echo '<center>';
	  echo '<div class="content">',"\n";
	  echo '<h2><center>Welcome to Admin Panel!!</h2>',"\n";
	  echo '<form action="addcountry.php">
	  <input type="submit" value="Add Country">
	  </form>';
	  echo '<form action="addcity.php">
	  <input type="submit" value="Add City">
	  </form>';
	  echo '<form action="addattraction.php">
	  <input type="submit" value="Add Attraction">
	  </form>';
	  echo '<form action="updateatt.php">
	  <input type="submit" value="Update Attraction">
	  </form>';
	  echo '<form action="updatecity.php">
	  <input type="submit" value="Update City">
	  </form>';
	  echo '<form action="updatecountry.php">
	  <input type="submit" value="Update Country">
	  </form>';
	  echo '<form action="delatt.php">
	  <input type="submit" value="Delete Attraction">
	  </form>';
	  echo '<form action="delcity.php">
	  <input type="submit" value="Delete City">
	  </form>';
	  echo '<form action="delcountry.php">
	  <input type="submit" value="Delete Country">
	  </form>';
	  echo '</center>';
	}
	
	else{
	echo "Access Denied";
	}


?>


<?php
   include('footer.php');
?>


</body>
</html>
