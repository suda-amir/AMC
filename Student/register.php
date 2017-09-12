<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('img/wizard-book.jpg'); background-attachment: fixed">
	    <!--   Creative Tim Branding   -->
	    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="#">
	            </div>
	            <div class="brand">
	                SIT LOGO
	            </div>
	        </div>
	    </a>
        <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="submit.php" method="POST">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
                                        Student Registration
		                        	</h3>
                                    <h5>This information will let us know more about you.s</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#info" data-toggle="tab">Basic Info</a></li>
			                            <li><a href="#academic" data-toggle="tab">Academic Info</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="info">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Let's start with the basic details.</h4>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Name <small>(required)</small></label>
                                                        <input name="name" type="text" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">PRN Number</label>
                                                        <input name="prn" type="text" class="form-control" required minlength="9" maxlength="9">
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Your Password</label>
                                                        <input type="password" name="password" class="form-control" required>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone</i>&emsp;+91                                                  </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Phone No. <small>(required)</small></label>
                                                        <input name="phone" type="text" class="form-control" required minlength="10" maxlength="10">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">account_box</i>                                                   </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Gender</label>
                                                        <select class="form-control" name="gender" required>
                                                            <option disabled="" selected=""></option>
                                                            <option value="M"> Male </option>
                                                            <option value="F"> Female </option>
                                                            <option value="O"> Prefer Not  to Say </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">library_books</i>                                                   </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Academic Year</label>
                                                        <select class="form-control" name="year" required>
                                                            <option disabled="" selected=""></option>
                                                            <option disabled="" style="font-weight: 900;">--Bachelor's--</option>
                                                            <option value="First Year"> First Year </option>
                                                            <option value="Sxecond Year"> Second Year </option>
                                                            <option value="Third Year"> Third Year </option>
                                                            <option value="Fourth Year"> Fourth Year </option>
                                                            <option disabled="" style="font-weight: 900;">--Master's--</option>
                                                            <option value="ME First Year"> First Year </option>
                                                            <option value="ME Second Year"> Second Year </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
		                            </div>
		                            <div class="tab-pane" id="academic">
                                        <h4 class="info-text">Let us know about your academic Info</h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">school</i>                                                   </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">College</label>
                                                        <select class="form-control" name="college" required>
                                                            <option disabled="" selected=""></option>
                                                            <option value="LOL">LOL</option>
                                                            <option value="LOL">LOL</option>
                                                            <option value="LOL">LOL</option>
                                                            <option value="LOL">LOL</option>
                                                            <option value="LOL">LOL</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">layers</i>                                                   </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Branch</label>
                                                        <select class="form-control" name="branch" required>
                                                            <option disabled="" selected=""></option>
                                                            <option value="Computer Enginerring"> Computer Enginerring </option>
                                                            <option value="Information Technology"> Information Technology </option>
                                                            <option value="Electronics &amp; Tele-Communication"> Electronics &amp; Tele-Communication </option>
                                                            <option value="Other"> Other </option>
                                                        </select>
                                                    </div>
                                                </div>
		                                    </div>
		                                </div>
                                        <div class="row">
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">layers</i>                                                   </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Division</label>
                                                        <select class="form-control" name="div" required>
                                                            <option disabled="" selected=""></option>
                                                            <option value="A"> TEA </option>
                                                            <option value="B"> TEB </option>
                                                            <option value="C"> TEC </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 ">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Roll No.</label>
                                                        <input name="roll" type="text" class="form-control" required minlength="1" maxlength="2">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                Made with <i class="fa fa-heart heart"></i> by Sudarshan Amirineni. 
            </div>
        </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>
</html>
