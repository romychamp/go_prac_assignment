<!DOCTYPE html>
<html>
<head>
	<title>Delete Page</title>
	<style type="text/css">
		
		
	</style>
</head>
<body>
	<div class="out">



	<?php
 $conn = mysqli_connect('localhost','root','','goprac');
 $id = $_POST['id'];
 $remove = "DELETE FROM goprac WHERE id = '".$id."'";
 mysqli_query($conn,$remove);;
 
 echo "successfully deleted the row";
 echo "<br>click on submit to view the updated table";

?>
<form action="return.php" method="post">
	<input name="num_of_codes" type="number" name="num_of_codes" value="0" style="display: none;">
	<input type="submit" name="submit">

</form>
</div>

</body>
</html>







