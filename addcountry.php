 <?php
  include('header_side.php');
  include('db_connect.php');
 ?> 
 
 
<html>
<body>


<div class="content">
<h2><center>Add Details of Country</center></h2>
<table width=90% >


<form action=submitcountry.php method="POST" >
<tr><td width = 30%>Country Name:</td><td><input type="text" name="countryname" />*</td></tr>
<tr><td width = 30%>Capital:</td><td><input type="text" name="capital"/>*</td></tr>
<tr><td width = 30%>Government: </td><td><input type="text" name="govt" />*</td></tr>
<tr><td width = 30%>currency: </td><td><input type="text" name="currency"  />*</td></tr>
<tr><td width = 30%>population: </td><td><input type="text" name="population" />*</td></tr>
<tr><td width = 30%>Area: </td><td><input type="text" name="area" />*</td></tr>
<tr><td width = 30%>Language: </td><td><input type="text" name="language" /></td></tr>
<tr><td width = 30%>Religion: </td><td><input type="text" name="religion" /></td></tr>
<tr><td width = 30%>Website: </td><td><input type="text" name="website" /></td></tr>

<td>
</td></tr>

<?php
//end of registration form:
?>
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