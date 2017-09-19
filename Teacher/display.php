<!DOCTYPE html>

  <?php
            //require_once("get_student_details.php");
            require_once("../config.php");
            $subject = $_POST["subject"];
            $year = $_POST["class"];
            $division = $_POST["division"];
            $date = $_POST["date"];
            
            $parts = explode('-',$date);
            $yyyy_mm_dd = $parts[2] . '-' . $parts[0] . '-' . $parts[1];


            $query = "SELECT `subject`, `class`, `division`, `date`, `attend_array`, `lesson_plan` FROM `attendance_record` WHERE `division` = '$division' AND `class` = '$year' AND `subject` = '$subject' AND `date` = '$yyyy_mm_dd'";
            $result = mysqli_query($connect, $query);

            

            
          
            

                         
          ?>
          


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Editable Table</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />

      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
      
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <section id="container">
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <i class="fa fa-bars"></i>
              </div>
            <!--logo start-->
            <a href="Teacher/index.php" class="logo">SINHGAD<span> INSTITUTES OF TECHNOLOGY</span></a>
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
      <!--sidebar end-->
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      ATTENDANCE RECORD<br><?php echo $date.'<br>';
                                                 echo $subject;?>
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
    
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="space15"></div>

                          <div class="table-responsive">

                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <thead>
                              <tr>
                                    <td>Present rollNo</td>
                                    <td>Name</td>
                              </tr>
                              </thead>
                              <?php
                              
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {
                                $arr = array();
                                $arr = explode(", ", $row["attend_array"]);
                                $arr_count = count($arr);
                              
                                for($i = 0 ; $i < $arr_count; $i++){?>
                                    <tr>    
                                    <td><?php echo $arr[$i];?></td>
                                        <td><?php $query2 = "SELECT * FROM `student` WHERE `acad_year`='$year' AND `division` = '$division' AND `roll` = '$arr[$i]'";
                                                                    $result2 = mysqli_query($connect, $query2);
                                                                    if($result2)
                                                                        while($row2 =  mysqli_fetch_array($result2))
                                                                        echo $row2["name"]; ?></td>
                                    
                                   
				               </tr>  
                               <?php }
                                
                          }  ?>
                          </table> 
                              
                              
                          </div>
                      </div>
                  </div>
              </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!-- Right Slidebar start -->

      <!-- Right Slidebar end -->
      <!--footer start-->
     
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

      <!--script for this page only-->
      <script src="js/editable-table.js"></script>

      <!-- END JAVASCRIPTS -->
      <script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
      </script>


  </body>
</html>
