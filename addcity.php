 <?php
  include('header_side.php');
  include('db_connect.php');
 ?> 
 
 
<html>
<body>


<div class="content">
<h2><center>Add Details of City</center></h2>
<table width=90% >







<?php
  
  $query="Select country_id,country_name from countries";
  $result = mysqli_query($db, $query) or die ("Error Querying Database");

 echo '<form action=submitcity.php method="POST" >';  
 
 echo '<select name="type">';

 while($row = mysqli_fetch_array($result)){
		$countryid=$row['country_id'];
		$countryName = $row['country_name'];
		
		
		//echo $countryName;
		//echo $countryid;
	
	echo '<option class="group" value=',$countryid,'>',$countryName,'</option>';
		}
echo'</select>';

?>


<tr><td width = 30%>City Name:</td><td><input type="text" name="name" />*</td></tr>
<tr><td width = 30%>City Region:</td><td><input type="text" name="region"/>*</td></tr>
<tr><td width = 30%>Population: </td><td><input type="text" name="population" />*</td></tr>
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
