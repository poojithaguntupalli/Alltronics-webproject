<?php

include('dbconnect.php');

$id=$_POST['id'];

$workname=$_POST['workname'];

$description=$_POST['description'];

$deadline=$_POST['deadline'];


$query="UPDATE work SET workname='$workname',description='$description',deadline='$deadline' WHERE id='$id'";


if(mysqli_query($conn,$query)){
	
	header("Location:form.php");
	
}

else{
	echo "Error in query";
}

mysqli_close($conn);
?>