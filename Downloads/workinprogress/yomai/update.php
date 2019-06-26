<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$workname = $description = $deadline  = "";
$workname_err = $description_err = $deadline_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate workname
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
    $input_deadline = trim($_POST["deadline"]);
    if(empty($input_deadline)){
        $deadline_err = "Please enter the deadline.";     
    } else{
        $deadline = $input_deadline;
    }
    
    // Check input errors before inserting in database
    if(empty($workname_err) && empty($description_err)  && empty($deadline_err)){
        // Prepare an insert statement
        $sql = "UPDATE work SET workname=?, description=?, deadline=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_workname, $param_description, $param_deadline, $param_manufacturer, $param_id);
            
            // Set parameters
            $param_workname = $workname;
            $param_description = $description;
			$param_deadline = $deadline;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM work WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $workname = $row["workname"];
                    $description = $row["description"];
					$deadline = $row["deadline"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
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
                            <input type="text" name="deadline" class="form-control" value="<?php echo $deadline; ?>">
                            <span class="help-block"><?php echo $deadline_err;?></span>
                        </div>
                        
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>