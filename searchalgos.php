<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>searchalgo</title>
  
</head>

<body>
<table>
<tr>
<th>Sno.</th>
<th>Name</th>
<th>City</th>
</tr>

<?php 

 $search = $_POST['Search'];
 $l= strlen($search);

$servername = "localhost";
$username = "root";
$password = "";
$database = "flatmatetest";

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn)
{
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
 
$sql = "SELECT * FROM `data1`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

$i= 0; 
  if($num> 0)
 {
  while($row = mysqli_fetch_assoc($result))
  {
        // echo var_dump($row);
      //  echo $row['sn'] .  ". Hello ". $row['name'] ." Welcome to ". $row['city'];
  $l2= substr_compare($row['city'],$search,0,$l,TRUE);
   
    if ((!strcasecmp($search,$row['city']))||($l2==0))
     {
        echo "<tr><td>" . $row["sn"]. "</td><td>"
        . $row["name"] . "</td><td>". $row["city"]. "/td></tr>";
}
echo "</table>";
} 

}
echo "<br>";
echo "haha".$i;


 ?>
 </table> 

</body>
</html>
