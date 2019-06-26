<?php

$bid = $_GET['id'];

include('dbconnect.php');


$query= "DELETE FROM work WHERE id='$bid'";

if(mysqli_query($conn , $query)){
	
header("Location:form.php");	
	
}
else{
	echo "Error  in your query" .mysqli_error($conn);
}

mysqli_close($conn);
?>
