<!DOCTYPE html>
<html>
<head>
	<title>Search code</title>
	<style type="text/css">
		table {
    border-collapse: collapse;
    width: 100%;
    color: #c96459;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    box-sizing: border-box;




  }
  th {
    background-color: #588c7e;
    color: white;
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
	</style>
</head>
<body>
	<table>
	 <tr>
      <th>Code</th>
      <th>Start_Date</th>
      <th>End_Date</th>
      <th>Delete Row</th>
    </tr>

    <?php
$conn = mysqli_connect('localhost','root','','goprac');
$search_code = $_POST['search_code'];

$start_date = $_POST['search_by_first_date'];
$end_date = $_POST['search_by_end_date'];
$q1 = "select * from goprac where Start_Date >= '".$start_date."' and  End_Date<= '".$end_date."' ";
$q2 = "select * from goprac where code = '".$search_code."'";
$q3 = "select * from goprac where Start_Date >= '".$start_date."' and  End_Date<= '".$end_date."' and code = '".$search_code."'";
$q4 = 0;
if (empty($search_code)) {
	$q4 = $q1;
	# code...
}
else if (empty($start_date) and empty($end_date)) {
	$q4 = $q2;
	# code...
}
else {
	$q4 = $q3;
}


$result = mysqli_query($conn,$q4);

if ($result->num_rows>0) {
    while ($row = mysqli_fetch_array($result)) {

     echo "<tr><td>".$row['Code']."</td><td>".$row['Start_Date']."</td><td>".$row['End_Date']."</td>".'<td><form method = "post" action = "delete.php"><input name = "id" type = "submit" value = "'.$row['id'].'"/></form></td></tr>';


 
  # code...
}
echo "</table>";
  # code...
}
else {
  echo "0 Result";
}


?>
</table>

</body>
</html>

<table>
   




