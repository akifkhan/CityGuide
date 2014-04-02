<?php
	include('db_connect.php');
	include('header_side.php');
	//get user input from post
	
	$name = strip_tags(trim($_POST['name']));
	$city_id = strip_tags(trim($_POST['type']));
	$type = strip_tags(trim($_POST['tp']));
	$desc = strip_tags(trim($_POST['desc']));
	$address = strip_tags(trim($_POST['address']));
	$hours = strip_tags(trim($_POST['hours']));
	$price = strip_tags(trim($_POST['price']));
	$website = strip_tags(trim($_POST['website']));
	
	//echo $city_name;
	//echo $country_id;
	

     //if there are no errors, add user to db
   $query = "INSERT INTO `attractions`(`attraction_name`, `city_id`, `attraction_type`, `attraction_description`, `attraction_address`, `attraction_hours_of_operation`, `attraction_entrance_price`, `attraction_website`) VALUES ('$name','$city_id','$type','$desc','$address','$hours','$price','$website')";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
 ?>

<html>
<body>


<div class="content">
<center><h1>The Attraction has been added!</h1></center>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</div>


<?php
   
   mysqli_close($db);
   include('footer.php');
?>
 
