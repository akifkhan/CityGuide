 <?php
  include('header_side.php');
  include('db_connect.php');
 ?> 
 
 
<html>
<body>


<div class="content">
<h2><center>Update Details of Attraction</center></h2>
<table width=90% >







<?php
 if(!(isset($_POST['type']))){
  $query="Select attraction_id,attraction_name from attractions";
  $result = mysqli_query($db, $query) or die ("Error Querying Database");

 echo '<form action="" method="POST" >';  
 
 echo '<select name="type">';

 while($row = mysqli_fetch_array($result)){
		$attid=$row['attraction_id'];
		$Name = $row['attraction_name'];
		echo '<option class="group" value=',$attid,'>',$Name,'</option>';
		}
echo'</select>';
echo '<tr><td><input type="submit" value="Submit" class="formbutton"></td></tr>';
}
?>
 <?php
   if (isset($_POST['type'])){
   $id= $_POST['type'];
   $query= "select * from attractions where attraction_id='$id' ";
   $result = mysqli_query($db, $query) or die ("Error Querying Database");
 
   $row= mysqli_fetch_array($result);
   $name=$row['attraction_name'];
   $add=$row['attraction_address'];
   $type=$row['attraction_type'];
   $desc=$row['attraction_description'];
   $hours=$row['attraction_hours_of_operation'];
   $price= $row['attraction_entrance_price'];
   $website=$row['attraction_website'];
   
?>
<?php
echo '<form action="updateattt.php" method="POST">';   
echo '<tr><td width = 30%>Attraction ID :</td><td><input type="text" name="id" value="',$id,'"/>*</td></tr>';
echo '<tr><td width = 30%>Attraction Name:</td><td><input type="text" name="name" value="',$name,'"/>*</td></tr>';
echo '<tr><td width = 30%>Type:</td><td><input type="text" name="tp" value="',$type,'"/>*</td></tr>';
echo '<tr><td width = 30%>Description: </td><td><input type="text" name="desc" value="',$desc,'"/>*</td></tr>';
echo '<tr><td width = 30%>Address: </td><td><input type="text" name="address" value="',$add,'"/></td></tr>';
echo '<tr><td width = 30%>Hours of operation: </td><td><input type="text" name="hours" value="',$hours,'"/></td></tr>';
echo '<tr><td width = 30%>Entrance Price: </td><td><input type="text" name="price" value ="',$price,'"/></td></tr>';
echo '<tr><td width = 30%>Website: </td><td><input type="text" name="website" value="',$website,'"/></td></tr>';

echo '<td>';
echo '</td></tr>';

echo '</table>';
echo '<table>';
echo '<tr><td><small>*These fields are <b><u>required</b></u>!</small></td></tr>';
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
 
