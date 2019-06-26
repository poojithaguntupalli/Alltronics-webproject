<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$workname = $description = $deadline = "";
$workname_err = $description_err = $deadline_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_workname = trim($_POST["workname"]);
    if(empty($input_workname)){
        $workname_err = "Please enter a name.";
    } elseif(!filter_var(trim($_POST["workname"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $workname_err = 'Please enter a valid name.';
    } else{
        $workname = $input_workname;
    }
    
    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = 'Please enter an description.';     
    } else{
        $description = $input_description;
    }
    
    // Validate deadline
    $input_deadline = trim($_POST['deadline']);
    if(empty($input_deadline)){
        $deadline_err = "Please enter the deadline.";     
    } else{
        $deadline = $input_deadline;
    }
	
	
    
    // Check input errors before inserting in database
    if(empty($workname_err) && empty($description_err) &&  empty($deadline_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO work (workname, description, deadline) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_workname, $param_description, $param_deadline);
            
            // Set parameters
            $param_workname = $workname;
            $param_description = $description;
            $param_deadline = $deadline;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create work</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create work</h2>
                    </div>
                    <p>Please fill this form and submit to add subjects record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($workname_err)) ? 'has-error' : ''; ?>">
                            <label>Work Name</label>
                            <input type="text" name="workname" class="form-control" value="<?php echo $workname; ?>">
                            <span class="help-block"><?php echo $workname_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($deadline_err)) ? 'has-error' : ''; ?>">
                            <label>Deadline</label>
                            <input tyoe="text"  name="deadline" class="form-control" value="<?php echo $deadline; ?>">
                            <span class="help-block"><?php echo $deadline_err;?></span>
                        </div>
						
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>