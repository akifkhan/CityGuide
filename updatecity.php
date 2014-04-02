<?php
  include('header_side.php');
  include('db_connect.php');
 ?> 
 
 
<html>
<body>


<div class="content">
<h2><center>Update Details of City</center></h2>
<table width=90% >







<?php
 if(!(isset($_POST['type']))){
  $query="Select city_id,city_name from cities";
  $result = mysqli_query($db, $query) or die ("Error Querying Database");

 echo '<form action="" method="POST" >';  
 
 echo '<select name="type">';

 while($row = mysqli_fetch_array($result)){
		$cid=$row['city_id'];
		$Name = $row['city_name'];
		echo '<option class="group" value=',$cid,'>',$Name,'</option>';
		}
echo'</select>';
echo '<tr><td><input type="submit" value="Submit" class="formbutton"></td></tr>';
}
?>
 <?php
   if (isset($_POST['type'])){
   $id= $_POST['type'];
   $query= "select * from cities where city_id='$id' ";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
 
   $row= mysqli_fetch_array($result);
   $name=$row['city_name'];
   $region=$row['city_region'];
   $pop=$row['city_population'];
   $web=$row['city_website'];
   
?>
<?php
echo '<form action="updatecittt.php" method="POST">';   
echo '<tr><td width = 30%>CITY DETAILS</td><td><input type="hidden" name="id" value="',$id,'"/>*</td></tr>';
echo '<tr><td width = 30%>City Name:</td><td><input type="text" name="name" value="',$name,'"/>*</td></tr>';
echo '<tr><td width = 30%>City Region:</td><td><input type="text" name="region" value="',$region,'"/>*</td></tr>';
echo '<tr><td width = 30%>Population:</td><td><input type="text" name="pop" value="',$pop,'"/>*</td></tr>';
echo '<tr><td width = 30%>Website: </td><td><input type="text" name="website" value="',$web,'"/></td></tr>';

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
 
