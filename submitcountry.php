<?php
	include('db_connect.php');
	
	//get user input from post
	$country = strip_tags(trim($_POST['countryname']));
	$capital = strip_tags(trim($_POST['capital']));
	$govt = strip_tags(trim($_POST['govt']));
	$currency = strip_tags(trim($_POST['currency']));
	$population = strip_tags(trim($_POST['population']));
	$area = strip_tags(trim($_POST['area']));
	$language = trim($_POST['language']);
	$religion = strip_tags(trim($_POST['religion']));
	$website = strip_tags(trim($_POST['website']));
	
	include('header_side.php');

     //if there are no errors, add user to db
   $query = "INSERT INTO `countries`( `country_name`, `country_capital`, `country_government`, `country_currency`, `country_population`, `country_area`, `country_official_language`, `country_religion`, `country_website`) VALUES ('$country','$capital','$govt','$currency','$population','$area','$language','$religion','$website')";
   
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
?>

<html>
<body>


<div class="content">
<center><h1>The country has been added!</h1></center>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</div>


<?php
   
   mysqli_close($db);
   include('footer.php');
?>


</body>
</html>
 
