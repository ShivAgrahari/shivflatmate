<!DOCTYPE html>
<html>
    <head>
        <title>hellom</title>
        <link rel="stylesheet" href="mainstyle.css">
        <script src="script.js"></script>
    </head>

<body>

<div id="heading" >
         <div class="centre" >FlatMate<br></div> 
         <div class="centre1">(Rent & Go)</div>
         <div class="logo"></div>
         <div class="option"><b><a  class="one" href="login.htm">Login</a> &nbsp;&nbsp;&nbsp;&nbsp;<a class="two" href="signup.htm">Sign Up</a></b></div>
         </div>
    
         <div id="cover">
            <form method="post" action="searchalgostest.php">
          <div class="tb">
          <div class="td">
          <!-- The following tag is input for the text input field which is used as a seach field on a web page -->
          <input type="text" name="Search" placeholder="Search" required></div>
                <div class="td" id="s-cover">
                  <button type="submit" onclick="showfeed()">
                    <div id="s-circle"> </div>
                    <span> </span>
                  </button>
                </div>
              </div>
            </form>
          </div>
    
    
        <div class="sidenav">
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Advertisment</a>
        </div>
<div class="main">


<table>
<tr>
<th>Name</th>
<th>City</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "flatmatetest");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `data1`";
$result = $conn->query($sql);

$search = $_POST['Search'];
 $l= strlen($search);
 
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
    $l2= substr_compare($row['city'],$search,0,$l,TRUE);

    if ((!strcasecmp($search,$row['city']))||($l2==0))
    {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["city"]. "</td></tr>";
 }
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>

</div>
</body>
</html>