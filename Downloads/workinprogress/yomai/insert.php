<?php

include('dbconnect.php');



$workname = $_POST['workname'];

$description = $_POST['description'];

$deadline = $_POST['deadline'];


//create query


$query = "INSERT INTO work (workname , description , deadline) VALUES('$workname' , '$description' , '$deadline')";

if(mysqli_query($conn ,$query)){
	
header("Location:form.php");
}

else{
	
	echo "Error In Query" .mysqli_error($conn);
}
mysqli_close($conn);


?>
