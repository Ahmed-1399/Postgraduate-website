<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Loging in page | FCI</title>  
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
            
                if (isset($_POST['login'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                
                    $sql = "SELECT * FROM phd WHERE phd_name='$user' AND pass='$pass'";
                    $sql2 = "SELECT * FROM diploma WHERE diploma_name='$user' AND pass='$pass'";
                    $sql3 = "SELECT * FROM master WHERE master_name='$user' AND pass='$pass'";
                    $result = mysqli_query($conn, $sql);
                    $result2 = mysqli_query($conn, $sql2);
                    $result3 = mysqli_query($conn, $sql3);
                    $row = mysqli_num_rows($result);
                    $row2 = mysqli_num_rows($result2);
                    $row3 = mysqli_num_rows($result3);
                    if($row == 1 || $row2 == 1 || $row3 == 1 ){
                        header("Location: subjects.html");
                    } else {
                        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
                    }
                }
   
        ?>

	<!-- header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="../index.html">
					<img src="../images/FCI-icon.png" class="navebar_brand" alt=" index.html"/>
				</a>
                <h1 class="login_header">
                LOGIN
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

            <h1 class="login_title"> <strong> PLEASE, LOGIN TO YOUR ACCOUNT</strong></h1>
             <br>
                      <form action="" role="form" class="form-horizontal"method="post">
							<div class="form-group">
								<div class="col-sm-12">
									<input  class="form-control-me" class="form-control" placeholder="UserName" type="text" name="user">
								</div>
							</div>							
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control-me" id="password" placeholder="Password" type="password" name="pass">
								</div>
							</div>
                        
                            <div class="form-check">
    <input type="checkbox" class="checker-input" id="exampleCheck1">
    <label class="check-label" for="exampleCheck1">Remember me</label>
                               <a href="forget_password.html" class="forget_link">forget password?</a>
  </div>
                          <br>
							<div class="row">							
								<div class="col-sm-10">
									<button name="login" type="submit" class="btn btn-light-me">
										Login
									</button>
                                    
									<button onclick="location.href='firstlog.html'"  type="button" class="btn btn-light-me2">
										Cancel</button>
								</div>
							</div>
						</form>

<br>
<br>
<br>
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