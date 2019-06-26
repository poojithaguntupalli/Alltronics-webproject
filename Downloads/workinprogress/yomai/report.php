
<?php
  require_once("functions/functions.php");
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
                <h3>Reports</h3>
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




       <div class="container main">
         <div class="row">
           <div class="main-col">

             <div class="col-md-12">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                        <strong>SALES TRANSACTION</strong>
                       </div>
                       <div class="panel-body">



                         <table id="example" class="nowrap dataTable" cellspacing="0" width="100%">
                                 <thead>
                                     <tr>
                                         <th>TRANSACTION #</th>
                                         <th class="text-center">CUSTOMER</th>
                                         <th class="text-center">SUBTOTAL</th>
                                         <th class="text-center">VAT</th>
                                         <th class="text-center">DISCOUNT</th>
                                         <th class="text-center">GRAND TOTAL</th>
                                         <th></th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                 
                                     <tr>
                                    <td><?php echo "PHP HERE";?></td>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"></td>

                                    <td>
                                      <a href="">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                      </td>




                                     </tr>
                                     <div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 300px; width: 100%;"><table id="example" class="nowrap dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;"><thead>
                                     <tr role="row" style="height: 0px;"><th class="sorting_asc" aria-controls="example" rowspan="1" colspan="1" style="width: 162px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="TRANSACTION #: activate to sort column descending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">TRANSACTION #</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 117px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="CUSTOMER: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">CUSTOMER</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 137px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SYSTEM UNIT: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SYSTEM UNIT</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 160px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SERVICES TYPE: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SERVICES TYPE</div></th><th class="text-center sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 164px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SERVICES COST: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SERVICES COST</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 12px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=": activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"></div></th></tr>
                                 </thead>
                                 

                                 <tbody>
                                                                    <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody>
                             </table></div>
                                    
                                 </tbody>

                             </table>

                               <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
         </div><!-- panel-body -->

     </div><!-- panel -->
     <!--
     <div class="col-md-12 text-right">
       <small>LEGEND:</small> <span class="label label-danger">Sold</span>
     </div>

   -->

     </div><!-- col-md-7 -->

    

             <div class="clearfix"></div>
             </div><!--main-col-->
           </div><!--/row-->
         </div><!--/container-->


         <br/>
         <br/>


      <div class="clearfix"></div>
     


      <div class="modal fade" id="cart" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">PRODUCT INFORMATION</h4>
                  </div>
                  <div class="modal-body">
                      <div class="cart-data"></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container main">
         <div class="row">
           <div class="main-col">

             <div class="col-md-12">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                        <strong>REPAIR SERVICES TRANSACTION</strong>
                       </div>
                       <div class="panel-body">



                         <table id="example" class="nowrap dataTable" cellspacing="0" width="100%">
                                 <thead>
                                     <tr>
                                         <th>TRANSACTION #</th>
                                         <th>CUSTOMER</th>
                                         <th>SYSTEM UNIT</th>
                                         <th>SERVICES TYPE</th>
                                         <th class="text-center">SERVICES COST</th>
                                         <th></th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                   
                                     <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center"></td>

                                    <td>
                                      <a href="">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                      </td>




                                     </tr>
                                     <div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 300px; width: 100%;"><table id="example" class="nowrap dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;"><thead>
                                     <tr role="row" style="height: 0px;"><th class="sorting_asc" aria-controls="example" rowspan="1" colspan="1" style="width: 162px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="TRANSACTION #: activate to sort column descending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">TRANSACTION #</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 117px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="CUSTOMER: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">CUSTOMER</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 137px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SYSTEM UNIT: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SYSTEM UNIT</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 160px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SERVICES TYPE: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SERVICES TYPE</div></th><th class="text-center sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 164px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SERVICES COST: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SERVICES COST</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 12px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=": activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"></div></th></tr>
                                 </thead>
                                 

                                 <tbody>
                                                                    <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody>
                             </table></div>
                                   
                                 </tbody>
                                 <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                             </table>


         </div><!-- panel-body -->
     </div><!-- panel -->
     <!--
     <div class="col-md-12 text-right">
       <small>LEGEND:</small> <span class="label label-danger">Sold</span>
     </div>
   -->
     </div><!-- col-md-7 -->

     

         



     <div class="clearfix" ></div>
     
      <br/>
      <br/>

     
      <div class="container main">
         <div class="row">
           <div class="main-col">

             <div class="col-md-12">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                        <strong>REFORMAT SERVICES TRANSACTION</strong>
                       </div>
                       <div class="panel-body">



                         <table id="example" class="nowrap dataTable" cellspacing="0" width="100%">
                                 <thead>
                                     <tr>
                                         <th>TRANSACTION #</th>
                                         <th>CUSTOMER</th>
                                         <th>SYSTEM UNIT</th>
                                         <th>SERVICES TYPE</th>
                                         <th class="text-center">SERVICES COST</th>
                                         <th></th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                   
                                     <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center"></td>

                                    <td>
                                      <a href="">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                      </td>




                                     </tr>
                                     <div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 300px; width: 100%;"><table id="example" class="nowrap dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;"><thead>
                                     <tr role="row" style="height: 0px;"><th class="sorting_asc" aria-controls="example" rowspan="1" colspan="1" style="width: 162px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="TRANSACTION #: activate to sort column descending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">TRANSACTION #</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 117px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="CUSTOMER: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">CUSTOMER</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 137px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SYSTEM UNIT: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SYSTEM UNIT</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 160px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SERVICES TYPE: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SERVICES TYPE</div></th><th class="text-center sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 164px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SERVICES COST: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">SERVICES COST</div></th><th class="sorting" aria-controls="example" rowspan="1" colspan="1" style="width: 12px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=": activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"></div></th></tr>
                                 </thead>
                                 

                                 <tbody>
                                                                    <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody>
                             </table></div>
                                   
                                 </tbody>
                                 <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                             </table>


         </div><!-- panel-body -->
     </div><!-- panel -->
     <!--
     <div class="col-md-12 text-right">
       <small>LEGEND:</small> <span class="label label-danger">Sold</span>
     </div>
   -->
     </div><!-- col-md-7 -->








             <div class="clearfix"></div>
             </div><!--main-col-->
           </div><!--/row-->
         </div><!--/container-->











            














      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>

      <script type="text/javascript" src="js/moment.min.js"></script>
      <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
      <?php
  get_footer();
?>

    </body>
 </html>
