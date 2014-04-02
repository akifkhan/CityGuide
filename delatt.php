<?php
  include('header_side.php');
  include('db_connect.php');
 ?> 

 <?php
   if (isset($_POST['type'])){
   $id= $_POST['type'];
   $query="delete from attractions where attraction_id='$id'";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
   
   echo "ATTRACTION DELETED";
   exit;
   }
   ?> 
    
    
<html>
<body>


<div class="content">
<h2><center>Delete Attractions</center></h2>
<table width=90% >







<?php
  
  $query="Select * from attractions";
  $result = mysqli_query($db, $query) or die ("Error Querying Database");

 echo '<form action="" method="POST" >';  
 
 echo '<select name="type">';

 while($row = mysqli_fetch_array($result)){
		$attid=$row['attraction_id'];
		$name = $row['attraction_name'];
		
	
	
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
