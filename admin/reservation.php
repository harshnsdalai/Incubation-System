<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codeutsava  19</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.html" onclick="alert('Logged out due to privacy policy')"><i class="fa fa-home"></i> Back to Dashboard</a>
                    </li>

					</ul>

            </div>

        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking <small></small>
                        </h1>
                    </div>
                </div>


            <div class="row">

                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <!-- <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div> -->
							  <div class="form-group">
                                            <label>Name :</label>
                                            <input name="fname" class="form-control" required>

                               </div>



							   <div class="form-group">
                                            <label>Contact No. :</label>
                                            <input name="phone" class="form-control" required>

                               </div>
							   <div class="form-group">
                                            <label>Email :</label>
                                            <input name="email" type="email" class="form-control" required>

                               </div>
                 <div class="form-group">
                                            <label>Usage of Property : </label>
                                            <input name="lname" class="form-control" required>
                                            </div>
							   <!-- <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Sri Lankan" checked="">Sri Lankan
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Sri Lankan ">Non Sri Lankan
                                            </label>

                                </div> -->



                        </div>

                    </div>
                </div>


            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Meeting room">Meeting Room</option>
                                                <option value="Auditorium">Auditorium</option>
												<option value="Guest House">LAB 01</option>
												<option value="Single Room">LAB 02</option>
                                            </select>
                              </div>

							  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
										                        		<option value="3">3</option>
										                        		<!-- <option value="4">4</option>
										                        		<option value="5">5</option>
										                        		<option value="6">6</option>
										                        		<option value="7">7</option> -->
                                            </select>
                              </div>



							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">

                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">

                               </div>
                       </div>

                    </div>
                </div>


                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code'];
							if($code1!="$code")
							{
							$msg="Invalide code";
							}
							else
							{

									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";

									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`( `FName`, `LName`, `Email`, `Phone`, `TRoom`, `NRoom`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[troom]','$_POST[nroom]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";

										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";

										}
									}

							$msg="Your code is correct";
							}
							}
							?>
						</form>

                    </div>
                </div>
            </div>


                </div>


					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>
</html>
