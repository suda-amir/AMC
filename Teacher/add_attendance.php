

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Component</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
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
          <a href="index.php" class="logo" >Sinhgad Institutes of Technology</a>
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
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Enter Class Details
                          </header>
                          <div class="panel-body">
                              <form action = "mark_attendance.php" method = "post">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">YEAR</label>
                                      <div class="col-lg-10">
                                          <select class="form-control input-sm m-bot15" id="class_list" name = "class">
                                              <option value="SE">SE</option>
                                              <option value="TE">TE</option>
                                              <option value="BE">BE</option>
                                          </select>
                                      </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">DIVISION</label>
                                      <div class="col-lg-10">
                                          <select class="form-control input-sm m-bot15" name = "division">
                                              <option value = "A">A</option>
                                              <option value = "B">B</option>
                                              <option value = "C">C</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">SUBJECT</label>
                                      <div class="col-lg-10">
                                          <select class="form-control input-sm m-bot15" name = "subject">
                                              <option value = "SDL">SDL</option>
                                              <option value = "SEP">SEP</option>
                                              <option value = "ISEE">ISEE</option>
                                              <option value = "SDL">CN</option>
                                              <option value = "SEP">DBMS</option>
                                              <option value = "ISEE">TOC</option>
                                          </select>
                                      </div>
                                  </div>
                                  
                                  <!---divisions---- end--->

                                                                    
                                  
                                  
                                 <!---subject---- start--->

                                 <!---subject-->
            
                                  <!--date-->
                                 <div class="form-group">
                                              <label class="col-sm-2 control-label">Date</label>
                                              
                                                  <script>
                                                

                                                var today = new Date();
                                                var dd = today.getDate();
                                                var mm = today.getMonth()+1; //January is 0!
                                                var yyyy = today.getFullYear();

                                                if(dd<10) {
                                                    dd = '0'+dd
                                                } 

                                                if(mm<10) {
                                                    mm = '0'+mm
                                                } 

                                                today = mm + '/' + dd + '/' + yyyy;
                                                document.write(today);

                                                </script>
  
                                                  
                                              </div>
                                  
                                  
                                          
                                <!--end date>
                                  <!----messgae panel---->
                                  <div class="row">
                                  <header class="panel-heading">
                                      
                                  </header>
                                  <div class="panel-body">
                                      <div class="form">
                                              <div class="form-group">
                                                  <label class="col-sm-2 control-label col-sm-2">LESSON PLAN</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" rows="6" name = "lesson_plan"></textarea>
                                                  </div>
                                              </div>
                                         
                                      </div>
                                  </div>
                          </div>
                      
                                <input type="submit" class="btn btn-success" value="GO!">
                                  <!---message panel end--->
                              </form>

                          </div>
                      </section>
                  </div>
                  
         </div>
               
                                 

                                 
              <!-- page end-->
          </section>
      </section>
   

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>

  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>


  <!--common script for all pages-->
  <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>

  </body>
</html>

