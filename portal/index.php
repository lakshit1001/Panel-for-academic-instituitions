<?php
ob_start();
session_start();
if(!(isset($_SESSION['email']))){
  header("Location: http://bookfox.in/panel/portal/login.php");
  exit();
}?> 
<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-init="firstName='<?php echo  $_SESSION['email'];?>'">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>Thapar University</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/table-responsive.css" rel="stylesheet">
  <link href="../assets/css/to-do.css" rel="stylesheet">
  <link href="../assets/css/style-responsive.css" rel="stylesheet">
  <link href="../assets/css/zabuto_calendar.css" rel="stylesheet">
  <link href="../assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

  <![endif]-->
</head>

<body ng-cloak="">

  <!-- Navigation -->
    <?php include"../header2.php";?>
    <?php include("../sidebar2.php"); ?>


    <!-- Page Content -->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <div class="row mt">
              <div class="col-lg-12">
            <div ng-view id="ng-view"></div>
              </div>
            </div>

    </section> <!--wrapper-->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
        <?php include"../footer.php";?>
      <!--footer end-->

<!-- Libraries -->
<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.11.2.min.js"></script>
<script src="js/angular-route.min.js"></script>
<script src="js/angular-animate.min.js"></script>
<script src="js/selection-model.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-sanitize.min.js""></script>


<!-- AngularJS custom codes -->
<script src="app/app.js"></script>
<script src="app/data.js"></script>
<script src="app/directives.js"></script>
<script src="app/studentsCtrl.js"></script>

<!-- Some Bootstrap Helper Libraries -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/underscore.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

  <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../assets/js/jquery.scrollTo.min.js"></script>
  <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


  <!--common script for all pages-->
  <script src="../assets/js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom tagsinput-->
  <script src="../assets/js/jquery.tagsinput.js"></script>

  <!--custom checkbox & radio-->


  <script src="../assets/js/form-component.js"></script>


</body>
</html>
