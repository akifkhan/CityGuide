<?php
  include('header_side.php');
  include('db_connect.php');
 ?> 
 
 
<html>
<body>


<div class="content">
<h2><center>Update Details of Country</center></h2>
<table width=90% >







<?php
 if(!(isset($_POST['type']))){
  $query="Select country_id,country_name from countries";
  $result = mysqli_query($db, $query) or die ("Error Querying Database");

 echo '<form action="" method="POST" >';  
 
 echo '<select name="type">';

 while($row = mysqli_fetch_array($result)){
		$cid=$row['country_id'];
		$Name = $row['country_name'];
		echo '<option class="group" value=',$cid,'>',$Name,'</option>';
		}
echo'</select>';
echo '<tr><td><input type="submit" value="Submit" class="formbutton"></td></tr>';
}
?>
 <?php
   if (isset($_POST['type'])){
   $id= $_POST['type'];
   $query= "select * from countries where country_id='$id' ";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
 
   $row= mysqli_fetch_array($result);
   $name=$row['country_name'];
   $capital=$row['country_capital'];
   $govt=$row['country_government'];
   $currency=$row['country_currency'];
   $pop=$row['country_population'];
   $area=$row['country_area'];
   $lang=$row['country_official_language'];
   $religion=$row['country_religion'];
   $web=$row['country_website'];
   
?>
<?php
echo '<form action="updatecounttt.php" method="POST">';   
echo '<tr><td width = 30%> Country Details</td><td><input type="hidden" name="id" value="',$id,'"/>*</td></tr>';
echo '<tr><td width = 30%> Country Name:</td><td><input type="text" name="name" value="',$name,'"/>*</td></tr>';
echo '<tr><td width = 30%> Capital:</td><td><input type="text" name="capital" value="',$capital,'"/>*</td></tr>';
echo '<tr><td width = 30%> Government:</td><td><input type="text" name="govt" value="',$govt,'"/>*</td></tr>';
echo '<tr><td width = 30%> Currency:</td><td><input type="text" name="currency" value="',$currency,'"/>*</td></tr>';
echo '<tr><td width = 30%> Population:</td><td><input type="text" name="pop" value="',$pop,'"/>*</td></tr>';
echo '<tr><td width = 30%> Area:</td><td><input type="text" name="area" value="',$area,'"/>*</td></tr>';
echo '<tr><td width = 30%> Language:</td><td><input type="text" name="language" value="',$lang,'"/>*</td></tr>';
echo '<tr><td width = 30%> Religion:</td><td><input type="text" name="religion" value="',$religion,'"/>*</td></tr>';
echo '<tr><td width = 30%> Website: </td><td><input type="text" name="website" value="',$web,'"/></td></tr>';

echo '<td>';
echo '</td></tr>';

echo '</table>';
echo '<table>';
echo '<tr><td><br></td></tr>';
echo '<tr><td><input type="submit" value="Submit" class="formbutton"></td></tr>';



echo '</table>';
echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
echo '</div>';
exit;
}
?>
 
<?php
   include('footer.php');
?>


</body>
</html> 
 
 
