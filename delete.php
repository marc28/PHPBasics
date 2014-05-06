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



	$deleted = mysqli_query($con,"DELETE FROM Persons WHERE pid='$_POST[pid]'");

	if($deleted){
		echo "Deleted";
	}else{
		echo "NOT Deleted";
	}

?>


<a href="index.html"><button>Home</button></a>