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



	$change = mysqli_query($con,"UPDATE Persons SET FirstName = '$_POST[firstname]', LastName ='$_POST[lastname]',Age = '$_POST[age]' where FirstName ='$_POST[firstnamechange]'");

	if($change){
		echo "Changed";
	}else{
		echo "No Change";
	}


?>


<a href="index.html"><button>Home</button></a>

