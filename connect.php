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


//Query for creating the database
//$sql="CREATE DATABASE my_db"; 

//Create Table
//$sql="CREATE TABLE Persons(PID INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(PID),FirstName CHAR(15),LastName CHAR(15),Age INT)";

/*if (mysqli_query($con))
  {
  echo "Database my_db created successfully<br>";
  }
else
  {
  echo "Error creating teble: " . mysqli_error($con);
  }
*/

mysqli_close($con); //close the connection


?>