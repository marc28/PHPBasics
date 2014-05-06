<!-- mysqli_connect(host,username,password,dbname); -->
<?php

$con = mysqli_connect('localhost','root','','my_db'); //connecting to the computer

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo "Connected<br>";
  }

$result = mysqli_query($con, "SELECT * FROM Persons ");

echo "
  <table border='1'>
  <tr>
      <th>Name</th>
      <th>Last Name</th>
      <th>Age</th>
  <tr>
";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con); //close the connection


?>

<a href="index.html"><button>Home</button></a>