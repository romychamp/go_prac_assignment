<!DOCTYPE html>
<html>
<head>
  <title></title>
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

  tr {

    color: #FF8C00;
    border-radius: 10px;
    border: 2px solid brown;
    
  }
 

    
  </style>
  
</head>
<body>
  <div class="out">

<table>
    <tr>
      <th>Code</th>
      <th>Start_Date</th>
      <th>End_Date</th>
      <th>Delete Row</th>
    </tr>


<?php
$num_of_codes = $_POST['num_of_codes'];




if (isset($_POST['submit'])) {
  


  $conn = mysqli_connect('localhost','root','','goprac');
  function random_strings() {
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($str_result),0,6);
  }

  $rand = random_strings();
  $num_of_codes=0;
  if (isset($_POST['num_of_codes'])) {
  $num_of_codes = $_POST['num_of_codes'];

  
}


  for ($i=0; $i < $num_of_codes; $i++) { 

$rand=random_strings();

      
    $insert = "INSERT INTO goprac (Code,Start_Date,End_Date) VALUES ('".$rand."', '".date("Y/m/d"
)."','".date('Y-m-d', strtotime('+1 year'))."')";
    
    mysqli_query($conn,$insert);
             

      # code...
}
$insert="Select * from goprac";
$r=mysqli_query($conn,$insert);

if (true) {
  # code...



  $query = "SELECT * FROM goprac";
  $result = mysqli_query($conn,$query);
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


}


$conn-> close();



}

?>



</table>
</div>
<h3>Search code:</h3>
<form method="post" action="search.php">
<input type="text" name="search_code" placeholder="enter code"> 

<input type="text" name="search_by_first_date" placeholder="enter start_date">
<input type="text" name="search_by_end_date" placeholder="enter end_date">


<input type="submit" name="submit" value="submit"> 

</form>


  
  

</body>
</html>



