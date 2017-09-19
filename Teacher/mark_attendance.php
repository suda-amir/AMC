<?php
require_once("get_student_details.php");
require_once("get_teacher_details.php");

    $class = $_POST["class"];
    $division = $_POST["division"];

session_start();
    $_SESSION["class"] = $class;
    $_SESSION["division"] = $division;
    $_SESSION["subject"] = $_POST["subject"];;
    $_SESSION["lesson_plan"] = $_POST["lesson_plan"];
    

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Attendance</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <i class="fa fa-bars"></i>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >SIT</a>
          <img src="img/STES.jpg" height="60" width="130" align = "right">
          <!--logo end-->
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Attendance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_attendance.php">Add Attendance</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>View Attendance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="daily.php">Date Wise</a></li>
                          <li><a  href="montly.php">Month Wise</a></li>
                          <li><a href="particular.php">Record Wise</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Register</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="../Student/register.php">New Student</a></li>
                          <li><a  href="../Student/teacherRegister.php">New Faculty</a></li>
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
s      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                              <form action="back.php" method="POST" >
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Roll Numbers</label>
                                      <div class="col-lg-10">
                                          <?php
                                          $data = get_student_details($class, $division);
                                          foreach ($data as $single_student){
                                          ?>
                                          <label class="checkbox-inline">
                                              <input type="checkbox" name="roll[]" value="<?=$single_student->roll;?>" > <?=$single_student->roll;?>
                                          </label>
                                          <?php
                                          }
                                          ?>
                                      </div>
                                      
                                      <button class="btn btn-lg btn-login btn-block" type="submit">Submit Attendance</button>
                                  </div>
                              </form>
                          </div>
                          
              <!-- page end-->
          </section>
      </section>
      </section> 

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    

  </body>
</html>
