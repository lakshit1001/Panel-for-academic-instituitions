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
          	<h3><i class="fa fa-angle-right"></i> Calendar</h3>
              <!-- page start-->
          <center>
           <iframe src="https://www.google.com/calendar/embed?title=Malhotra&#39;s%20Classes%20-%2010th%20timetable&amp;showPrint=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=39jhhvc6ogejm1793vrnjvf8k0%40group.calendar.google.com&amp;color=%23528800&amp;ctz=Asia%2FCalcutta" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            </center>
              <!-- page end-->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
        <?php include"footer.php";?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
	<script src="assets/js/calendar-conf-events.js"></script>    
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
