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

        

        <!-- page content -->
        <div class="right_col" role="main">
          <!--Paste Content Below-->
		  
		  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Work Manager</h3>
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
                    <h2>Works<small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="insert.php" method = "post">

                      <div class="form-group">
                        <label class="control-label col-md-63 col-sm-3 col-xs-12" for="first-name">Work Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="workname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="description" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deadline <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="Deadline..." name="deadline"></textarea>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Add Work</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Added Works <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>0
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="col-sm-8">
                        
                        <div class="col-md12 col-sm-12 col-xs-12">
                            <table class='table table-bordered table-striped' align="center">
                                <thead>
                                    <tr>
                                       
                                        
                                        <th>Work Name</th>
                                        <th>Description</th>
                                        <th>Deadline</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                
                <?php
                
                while($row = mysqli_fetch_assoc($result)){
                  
                ?>
                                
                                    <tr>
                                        <td><?php echo $row['workname']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['deadline']; ?></td>
                    
                                        <td>
                                <a href="editform.php?id=<?php echo $row['id'];?>" class="btn btn-success" role="button">Edit Item</a>
                <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-success" role="button">Delete Item</a>
                                           
                                        </td>
                                    </tr>
                  
                  <?php
                  
                }
                  
                  mysqli_close($conn);
                  ?>
                                
                                </tbody>         
                            </table>
                          </div>


        <div class="col-sm-8">


        </div>

        </div>

     </div>
     </div>


                

              
                

            


            
<?php
	get_footer();
?>
	
  </body>
</html>
