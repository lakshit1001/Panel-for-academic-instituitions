<?php include"head.php";?>
  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
        <?php include"header.php";?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
        <?php include"sidebar.php"; ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> To-Do Lists</h3>
          	
          	<!-- SIMPLE TO DO LIST -->
          	<div class="row mt">
          		<div class="col-md-12">
          			<div class="white-panel pn">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Basic Style</h5></div>
	                        <br>
	                 	</div>
				  		<div class="custom-check goleft mt">
				             <table id="todo" class="table table-hover custom-check">
				              <tbody>
				                <tr>
				           			<td>
				                        <span class="check"><input type="checkbox" class="checked"></span>
				                        <a href="index.html#">Send invoice</a></span>
				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									</td>
				                </tr>
				                <tr>
				           			<td>
				                        <span class="check"><input type="checkbox" class="checked"></span>
				                        <a href="index.html#">Check messages</a></span>
				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									</td>
				                </tr>
				                <tr>
				            		<td>
				                        <span class="check"><input type="checkbox" class="checked"></span>
				                        <a href="index.html#">Pay bills</a></span>
				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									</td>
				                </tr>
				                <tr>
				            		<td>
				                        <span class="check"><input type="checkbox" class="checked"></span>
				                        <a href="index.html#">Schedule site </a></span>
				                        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									</td>
				                 </tr>
				              </tbody>
				          </table>
						</div><!-- /table-responsive -->
					</div><!--/ White-panel -->
          		</div><! --/col-md-12 -->
          	</div><! -- row -->
			

          	<!-- COMPLEX TO DO LIST -->			
              <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">

                                  <ul class="task-list">
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Dashgum - Admin Panel Theme</span>
                                              <span class="badge bg-theme">Done</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Extensive collection of plugins</span>
                                              <span class="badge bg-warning">Cool</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Free updates always, no extra fees.</span>
                                              <span class="badge bg-success">2 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">More features coming soon</span>
                                              <span class="badge bg-info">Tomorrow</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Hey, seriously, you should buy this Dashboard</span>
                                              <span class="badge bg-important">Now</span>
                                              <div class="pull-right">
                                                  <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </div>
                                          </div>
                                      </li>                                      
                                  </ul>
                              </div>

                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>
                                  <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->
			
			
          	<!-- SORTABLE TO DO LIST -->
			
              <div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Sortable Style</h5></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Dashgum - Admin Panel Theme</span>
                                              <span class="badge bg-theme">Done</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>

                                      <li class="list-danger">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Extensive collection of plugins</span>
                                              <span class="badge bg-warning">Cool</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Free updates always, no extra fees.</span>
                                              <span class="badge bg-success">2 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-warning">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">More features coming soon</span>
                                              <span class="badge bg-info">Tomorrow</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-info">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Hey, seriously, you should buy this Dashboard</span>
                                              <span class="badge bg-important">Now</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                              </div>
                                          </div>
                                      </li>

                                  </ul>
                              </div>
                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>
                                  <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
        <?php include"footer.php";?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>    
    <script src="assets/js/tasks.js" type="text/javascript"></script>

    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
