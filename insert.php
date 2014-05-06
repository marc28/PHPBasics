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


//Insert here using mysqli_query() function
//mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Peter', 'Griffin',35)");
$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";



if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";


mysqli_close($con); //close the connection


?>

<a href="index.html"><button>Home</button></a>