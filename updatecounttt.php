
 <?php
        include('db_connect.php');
        include('header_side.php');
        //get user input from post
     
   
        
     
     
   $id = $_POST['id'];
   $name=$_POST['name'];
   $capital=$_POST['capital'];
   $govt=$_POST['govt'];
   $currency=$_POST['currency'];
   $pop=$_POST['pop'];
   $area=$_POST['area'];
   $lang=$_POST['language'];
   $religion=$_POST['religion'];
   $web=$_POST['website'];
       
//  if(preg_match("[a-z]|[A-Z]",$name))
 // {
    //if(preg_match("[a-z]|[A-Z]",$tp))
    // {
	$query= "update countries set country_name='$name',country_capital='$capital',country_government='$govt',country_currency='$currency',country_population='$pop',country_area='$area',country_official_language='$lang',country_religion='$religion',country_website='$web' where country_id='$id'";
	  $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
	  if($result)
	  { 
	    echo '<center><h2>Country Updated</h2>';
	  }
    
 // }
 // else{
  //echo "Enter Valid value";
 // }
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
	}
	
	else{
	echo "Access Denied";
	}


?>


<?php
   include('footer.php');
?>
                                                                                                 
 
