<?php

include('dbconnect.php');



$customer = $_POST['customer'];

$contact = $_POST['contact'];

$sysunit = $_POST['sys_unit'];

$modelno = $_POST['modelno'];

$service = $_POST['service'];

$cost    = $_POST['cost'];

$remarks = $_POST['remarks'];
//create query


$query = "INSERT INTO sformat (customer,contact,sysunit,modelno,sertype,sercost,remarks) VALUES('$customer' , '$contact' , '$sysunit' , '$modelno' , '$service' , '$cost' , '$remarks')";

if(mysqli_query($conn ,$query)){
	
header("Location:sreformat.php");
}

else{
	
	echo "Error In Query" .mysqli_error($conn);
}
mysqli_close($conn);


?>
