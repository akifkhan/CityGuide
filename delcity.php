<?php
  include('header_side.php');
  include('db_connect.php');
 ?> 

 <?php
   if (isset($_POST['type'])){
   $id= $_POST['type'];
   $query="delete from cities where city_id='$id'";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
   echo "CITY DELETED";
   exit;
   }
   ?> 
    
    
<html>
<body>


<div class="content">
<h2><center>Delete CITIES</center></h2>
<table width=90% >







<?php
  
  $query="Select * from cities";
  $result = mysqli_query($db, $query) or die ("Error Querying Database");

 echo '<form action="" method="POST" >';  
 
 echo '<select name="type">';

 while($row = mysqli_fetch_array($result)){
		$attid=$row['city_id'];
		$name = $row['city_name'];
		
	
	
	echo '<option class="group" value=',$attid,'>',$name,'</option>';
		}
echo'</select>';

?>
 <tr><td><input type="submit" value="Submit" class="formbutton"></td></tr>



</table>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>


<?php
   include('footer.php');
?>


</body>
</html> 
 
