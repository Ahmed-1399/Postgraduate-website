<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Diploma register page | FCI</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/logo-hero.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../images/logo-hero.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../main_style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="../js/modernizer.js"></script>
    
    <!--background image-->

    <style>
        body{
               background-color: #d5d8db;

        }
       
    </style>

</head>
<body>

        <?php
            $conn=mysqli_connect('localhost','root','','graduation_project');
            if(!$conn){
                die('Could not Connect MySql Server:' .mysql_error());
                    }
            if(isset($_GET['action'])&&$_GET['id']&&$_GET['action']=='edit'){

                if(isset($_POST['sign'])){    
                    $name = $_POST['name'];
                    $pass = $_POST['pass'];
                    $quali = $_POST['quali'];
                    $grad = $_POST['grad'];
                    $graduation = date('Y-m-d', strtotime($_POST['dateofgraduation']));
                    $app = $_POST['app'];
                    $job = $_POST['job'];
                    $id = $_POST['id'];
                    $army = $_POST['army'];
                    $loc = $_POST['loc'];
                    $mobile = $_POST['mobile'];
                    $id=$_GET['id'];


                    $sql = "UPDATE diploma set diploma_name='".$name."',pass='".$pass."',diploma_qualification='".$quali."',diploma_place_of_gradution='".$grad."',diploma_date_of_gradution='".$graduation."',diploma_general_appreciation='".$app."',diploma_job='".$job."',diploma_id='".$id."',diploma_army='".$army."',diploma_location='".$loc."',diploma_mobile='".$mobile."'
                    where diploma_id =".$id;

                    if (mysqli_query($conn, $sql)) {
                        echo "Your Date Has Been Updated Successfully !";
                    } else {
                        echo "Error: " . $sql . ":-" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                }
                else{
                $id=$_GET['id'];
                $conn=mysqli_connect('localhost','root','','graduation_project');
                if(mysqli_error($conn)){
                    die('Could not Connect MySql Server:' .mysql_error());
                 }
                 $sql = "select * from diploma where diploma_id =".$id;
                 $result = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_all($result);
                 
                
                    }
                }
            else{
            if(isset($_POST['sign'])){    
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $quali = $_POST['quali'];
                $grad = $_POST['grad'];
                $graduation = date('Y-m-d', strtotime($_POST['dateofgraduation']));
                $app = $_POST['app'];
                $job = $_POST['job'];
                $id = $_POST['id'];
                $army = $_POST['army'];
                $loc = $_POST['loc'];
                $mobile = $_POST['mobile'];
                $sql = "INSERT INTO diploma (diploma_name,pass,diploma_qualification,diploma_place_of_gradution,diploma_date_of_gradution,diploma_general_appreciation,diploma_job,diploma_id,diploma_army,diploma_location,diploma_mobile)
                VALUES ('$name','$pass','$quali','$grad','$graduation','$app','$job','$id','$army','$loc','$mobile')";
                if (mysqli_query($conn, $sql)) {
                    echo "Your Date Has Been Store Successfully !";
                } else {
                    echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        }
        ?>


	<!-- header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="../index.html">
					<img src="../images/FCI-icon.png" class="navebar_brand" alt="../index.html"/>
				</a>
                <h1 class="login_header">
                REGISTER AS DIPLOMA STUDENT
                </h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
         			</ul>
				
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

            <h1 class="login_title"> <strong>Please enter your data to register as diploma student</strong></h1>
             <br>
                      <form action="" role="form" class="form-horizontal" method="post">
                          
                          <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="Your Name - الإسم" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][0];
                                    }
                                    ?>"type="text" name="name">
								</div>
							</div>

                            <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="Password" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][1];
                                    }
                                    ?>"type="password" name="pass">
								</div>
							</div>
                          
                          <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="Qualification - المؤهل الدراسي" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][2];
                                    }
                                    ?>"type="text" name="quali">
								</div>
							</div>
                          
                          <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="Place of graduation - جهة التخرج" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][3];
                                    }
                                    ?>"type="text" name="grad">
								</div>
							</div>
                          
                            <div class="form-control-me">
                                <label  for="">Date of Graduation :</label>
                                <input type="date" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][4];
                                    }
                                    ?>" name="dateofgraduation" min="1980-01-01" max="2020-12-31" />
                            </div>

                          <br>
                          <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="General appreciation - التقدير العام" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][5];
                                    }
                                    ?>"type="text" name="app">
								</div>
							</div>
                          
                          <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="Your job - الوظيفة الحالية" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][6];
                                    }
                                    ?>"type="text" name="job">
								</div>
							</div>
                          
                         
                          
                          <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="Your ID - رقم البطاقة الشخصية" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][7];
                                    }
                                    ?>"type="text" name="id">
								</div>
							</div>
                          
                          <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="The position of the army - الموقف من التجنيد" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][8];
                                    }
                                    ?>"type="text" name="army">
								</div>
							</div>
                          
                          <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="Your Location - العنوان" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][9];
                                    }
                                    ?>"type="text" name="loc">
								</div>
							</div>
                          
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" placeholder="Mobile - رقم التليفون" value = "<?php 
                                    if(isset($row)){
                                        echo $row[0][10];
                                    }
                                    ?>"type="text" name="mobile">
								</div>
							</div>
                        
                          <br>
							<div class="row">							
								<div class="col-sm-10">
                                    <button type="submit" class="btn btn-light-me" name="sign" >Sign Up</button>
                                    
									<button onclick="location.href='student_choose_register.html'"  type="button" class="btn btn-light-me2">
										Cancel</button>
								</div>
							</div>
						</form>

<br>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p>We are students at faculty of computers and information, we build this site with each other to help postgraduate students.</p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/MUFCI.Uni0n/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://github.com/" target="_blank"><i class="fa fa-github"></i></a></li>
								<li><a href="https://twitter.com/MUFIXCommunity" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li>FCI@Yahoo.com</li>
                            <li><a href="https://www.menofia.edu.eg/fci/Home/ar" target="_blank">Site of collage</a></li>
                            <li> Gamal Abdelnaser St, Shbien El Kom, Menofya, Egypt</li>
                            <li>+01076291871</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 &nbsp; <a href="https://www.menofia.edu.eg/fci/Home/ar" target="_blank" >كلية الحاسبات والمعلومات بجامعة المنوفية</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->


    <!-- ALL JS FILES -->
    <script src="../js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/custom.js"></script>
	<script src="../js/timeline.min.js"></script>
    <script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
	
</body>

</html>