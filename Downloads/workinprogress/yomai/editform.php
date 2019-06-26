<?php
	require_once("functions/functions.php");
  //add dbconnect

include('dbconnect.php');


//create query

$query="SELECT * FROM work";

$result = mysqli_query($conn ,$query);
?>
<?php
	get_header();
?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
<?php
	get_sidebar();
?>
<?php
	get_navbar();



?>




 

<div class="right_col" role="main">
          <!--Paste Content Below-->
      
      <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>work Manager</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit work<small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>  
                    <?php

                      $id=$_GET['id'];


                      include('dbconnect.php');

                      $query="SELECT * FROM items WHERE id='$id'";

                      $result= mysqli_query($conn,$query);



                      ?>





                      <div class="container bg-info" style="padding-top:20px; padding-bottom:20px">

                	

                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="edit.php" method = "post">
                      <?php

                      while($row=mysqli_fetch_assoc($result)){
                        
                      ?>
                        


                      <input type="hidden" name="id" value="<?php echo $row['id'];?>">




                      <div class="form-group">
                        <label class="control-label col-md-63 col-sm-3 col-xs-12" for="first-name">work Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="item_name" value="<?php echo $row['item_name'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="item_code" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['item_code'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">deadline <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="Description..." name="description"><?php echo $row['description'];?></textarea>
                        </div>
                      </div>
                      
                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Edit work</button>
                        </div>
                      </div>

                      <?php
                      }

                      mysqli_close($conn);

                      ?>


                      </form>






                      </div>







                  </div>
                </div>
              </div>
            </div> 




<?php
	get_footer();
?>



</body>
</html>