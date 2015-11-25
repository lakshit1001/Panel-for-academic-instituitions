<?php include("../head2.php");?>

<body ng-cloak="">

  <!-- Navigation -->
    <?php include"../header.php";?>
    <?php include("../sidebar.php"); ?>

    <!-- Page Content -->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <div class="row mt">
              <div class="col-lg-12">
            <div ng-view id="ng-view"></div>
              </div>
            </div>

    </section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
        <?php include"../footer.php";?>
      <!--footer end-->
  </div>

<!-- Libraries -->
<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.11.2.min.js"></script>
<script src="js/angular-route.min.js"></script>
<script src="js/angular-animate.min.js"></script>

<!-- AngularJS custom codes -->
<script src="app/app.js"></script>
<script src="app/data.js"></script>
<script src="app/directives.js"></script>
<script src="app/studentsCtrl.js"></script>

<!-- Some Bootstrap Helper Libraries -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/underscore.min.js"></script>
<script src="js/ng-file-upload.min.js"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
  <!-- Menu Toggle Script -->
  <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../assets/js/jquery.scrollTo.min.js"></script>
  <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


  <!--common script for all pages-->
  <script src="../assets/js/common-scripts.js"></script>


  <script src="../assets/js/form-component.js"></script>

</body>
</html>
