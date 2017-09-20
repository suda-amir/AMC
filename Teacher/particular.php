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

    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />

    <!--bootstrap switcher-->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />

    <!-- switchery-->
    <link rel="stylesheet" type="text/css" href="assets/switchery/switchery.css" />

    <!--select 2-->
    <link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css" />

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!--  summernote -->
    <link href="assets/summernote/dist/summernote.css" rel="stylesheet">

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
            <a href="index.php" class="logo">Sinhgad Institute of Technology</a>
            <img src="img/STES.jpg" height="60" width="130" align = "right">
            <!--logo end-->

        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="index.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-laptop"></i>
                            <span>Attendance</span>
                        </a>
                        <ul class="sub">
                            <li><a href="add_attendance.php">Add Attendance</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-laptop"></i>
                            <span>View Attendance</span>
                        </a>
                        <ul class="sub">
                            <li><a href="daily.php">Date Wise</a></li>
                            <li><a href="montly.php">Month Wise</a></li>
                            <li><a href="particular.php">Record Wise</a></li>
                        </ul>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-laptop"></i>
                            <span>Get Total</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="student_count.php">Individual</a></li>
                            <li><a  href="overall_subjects.php">Overall</a></li>
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
                                <form action="display.php" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">DEPARTMENT</label>
                                        <div class="col-lg-10">
                                            <select class="form-control input-sm m-bot15" id="class_list" name="dept">
                                                    <option value="COMP">COMPUTER</option>
                                                    <option value="IT">IT</option>
                                                    <option value="ELEC">ELECTRICAL</option>
                                                    <option value="ENTC">ENTC</option>
                                                    <option value="MECH">MECHANICAL</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">YEAR</label>
                                        <div class="col-lg-10">
                                            <select class="form-control input-sm m-bot15" id="class_list" name="class">
                                                    <option value="SE">SE</option>
                                                    <option value="TE">TE</option>
                                                    <option value="BE">BE</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">DIVISION</label>
                                        <div class="col-lg-10">
                                            <select class="form-control input-sm m-bot15" name="division">
                                                    <option value = "A">A</option>
                                                    <option value = "B">B</option>
                                                    <option value = "C">C</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">SUBJECT</label>
                                        <div class="col-lg-10">
                                            <select class="form-control input-sm m-bot15" name="subject">
                                                <option value = "SDL">SDL</option>
                                                <option value = "SEP">SEP</option>
                                                <option value = "ISEE">ISEE</option>
                                                <option value = "SDL">CN</option>
                                                <option value = "DBMS">DBMS</option>
                                                <option value = "ISEE">TOC</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label col-md-2">DATE</label>
                                        <div class="col-md-3 col-xs-11">
                                            <input name="date" class="form-control form-control-inline input-medium default-date-picker"  size="20" type="text" value="" name = "date" />
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-success" value="GO!">

                            </form>

                    </div>
                    </section>
                </div>
                </div>
            </section>
        </section>
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js"></script>

    <!--this page plugins-->

    <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

    <!--select2-->
    <script type="text/javascript" src="assets/select2/js/select2.min.js"></script>

    <!--summernote-->
    <script src="assets/summernote/dist/summernote.min.js"></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>


    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>

    <!--bootstrap-switch-->
    <script src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>

    <!--bootstrap-switch-->
    <script src="assets/switchery/switchery.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 200, // set editor height

                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor

                focus: true // set focus to editable area after initializing summernote
            });
        });

    </script>

    <!--select2-->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".js-example-basic-single").select2();

            $(".js-example-basic-multiple").select2();
        });

    </script>

    <!--bootstrap swither-->
    <script type="text/javascript">
        $(document).ready(function() {
            // Resets to the regular style
            $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
            // Sets a mini switch
            $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
            // Sets a small switch
            $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
            // Sets a large switch
            $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');


            $('#change-color-switch').bootstrapSwitch('setOnClass', 'success');
            $('#change-color-switch').bootstrapSwitch('setOffClass', 'danger');
        });

    </script>

    <!-- swithery-->
    <script type="text/javascript">
        $(document).ready(function() {
            //default
            var elem = document.querySelector('.js-switch');
            var init = new Switchery(elem);


            //small
            var elem = document.querySelector('.js-switch-small');
            var switchery = new Switchery(elem, {
                size: 'small'
            });

            //large
            var elem = document.querySelector('.js-switch-large');
            var switchery = new Switchery(elem, {
                size: 'large'
            });


            //blue color
            var elem = document.querySelector('.js-switch-blue');
            var switchery = new Switchery(elem, {
                color: '#7c8bc7',
                jackColor: '#9decff'
            });

            //green color
            var elem = document.querySelector('.js-switch-yellow');
            var switchery = new Switchery(elem, {
                color: '#FFA400',
                jackColor: '#ffffff'
            });

            //red color
            var elem = document.querySelector('.js-switch-red');
            var switchery = new Switchery(elem, {
                color: '#ff6c60',
                jackColor: '#ffffff'
            });


        });

    </script>

</body>

</html>
