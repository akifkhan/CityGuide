 <?php
  include('header_side.php');
  include('db_connect.php');
 ?> 
 
 
<html>
<body>


<div class="content">
<h2><center>Add Details of Attraction</center></h2>
<table width=90% >







<?php
  
  $query="Select city_id,city_name from cities";
  $result = mysqli_query($db, $query) or die ("Error Querying Database");

 echo '<form action=submitatt.php method="POST" >';  
 
 echo '<select name="type">';

 while($row = mysqli_fetch_array($result)){
		$cityid=$row['city_id'];
		$cityName = $row['city_name'];
		
	
	
	echo '<option class="group" value=',$cityid,'>',$cityName,'</option>';
		}
echo'</select>';

?>


<tr><td width = 30%>Attraction Name:</td><td><input type="text" name="name" />*</td></tr>
<tr><td width = 30%>Type:</td><td><input type="text" name="tp"/>*</td></tr>
<tr><td width = 30%>Description: </td><td><input type="text" name="desc" />*</td></tr>
<tr><td width = 30%>Address: </td><td><input type="text" name="address" /></td></tr>
<tr><td width = 30%>Hours of operation: </td><td><input type="text" name="hours" /></td></tr>
<tr><td width = 30%>Entrance Price: </td><td><input type="text" name="price" /></td></tr>
<tr><td width = 30%>Website: </td><td><input type="text" name="website" /></td></tr>

<td>
</td></tr>

</table>
<table>
<tr><td><small>*These fields are <b><u>required</b></u>!</small></td></tr>
<tr><td><br></td></tr>
<tr><td><input type="submit" value="Submit" class="formbutton"></td></tr>



</table>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>


<?php
   include('footer.php');
?>


</body>
</html> 
 
