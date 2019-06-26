<?php
	require_once("functions/functions.php");

    //add dbconnect

    include('dbconnect.php');

    $query="SELECT * FROM sformat";

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
                <h3 style="margin-left: 300px;">Service Management</h3>
              </div>
              <center>             
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
              <!-- form input mask -->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel" style="margin-left: 310px;">
                  <div class="x_title">
                    <h2>Reformat Service</h2>
                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="sinsert.php" method="post">

                           <div class="row" style="padding:0px 25px 0 25px;">
                             <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group" >
                                  <label class="control-label">CUSTOMER</label>
                                  <input type="text" name="customer" class="form-control" placeholder="Enter Customer Name">
                               </div>
                             </div>

                       <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group" style="width:160px; ">
                            <label class="control-label">CONTACT</label>
                                <input name="contact" type="text" class="switchable form-control primary-input" placeholder="Contact">
                                 
                                
                                
                              </div>
                             </div>
                           </div><!-- row -->
                           <hr />


                       <div class="row" style="padding:0px 25px 25px 25px;">

                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class="control-label">SYSTEM UNIT</label>
                            <select name="sys_unit" class="form-control">
                           <option value="0">Select One</option>
                           <option value="Laptop">Laptop</option>
                           <option value="Mobile">Mobile</option>
                          
                           </select>
                         </div>
                       </div>

                     <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group" style="width: 140px;">
                           <label class="control-label">Model ID#</label>
                           <input class="form-control" type="text" name="modelno" value="" placeholder="Model ID">
                           </div>
                          </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                             <div class="form-group">
                               <label class="control-label">SERVICE TYPE</label>
                               <select name="service" class="form-control">
                              <option value="Basic">Basic</option>
                              <option value="Extra">Extra</option>
                              </select>
                            </div>
                          </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group" width="">
                            <label class="control-label">SERVICE COST</label>
                            <input type="text" name="cost" style="width:140px;"  class="form-control" placeholder="Service cost">
                            </div>
                           </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                            <br/>
                             <label for="comment">REMARKS:</label>
                             <textarea class="form-control" rows="5" name="remarks"></textarea>
                           </div>
                         </div>




                      <div class="form-group">
                        
                        <div class="col-md-9 col-md-offset-3">
                          <br/>
                        
                            <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-danger">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->
            </center>

            
                <!-- /image cropping -->
              </div>
            </div>
          </div>
        
		  
          <!--Paste Content Above-->
        </div>
        <!-- /page content -->
<?php
	get_footer();
?>
	
  </body>
</html>
