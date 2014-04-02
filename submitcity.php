<?php
	include('db_connect.php');
	include('header_side.php');
	//get user input from post
	
	$city_name = strip_tags(trim($_POST['name']));
	$country_id = strip_tags(trim($_POST['type']));
	$city_region = strip_tags(trim($_POST['region']));
	$city_population = strip_tags(trim($_POST['population']));
	$website = strip_tags(trim($_POST['website']));
	
	echo $city_name;
	echo $country_id;
	

     //if there are no errors, add user to db
   $query = "INSERT INTO `cities`(`city_name`, `country_id`, `city_region`, `city_population`, `city_website`) VALUES ('$city_name','$country_id','$city_region','$city_population','$city_website')";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
 ?>

<html>
<body>


<div class="content">
<center><h1>The City has been added!</h1></center>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</div>


<?php
   
   mysqli_close($db);
   include('footer.php');
?>


</body>
</html>
 
 
