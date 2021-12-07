<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Adminstration page | FCI</title>  
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


	<!-- header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="../index.html">
					<img src="../images/FCI-icon.png" class="navebar_brand" alt=" ../index.html"/>
				</a>
                <h1 class="login_header">
                ADMINSTRATION
                </h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						
         			</ul>
				
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

            <h1 class="login_title"> <strong>Please approve or refuse the students</strong></h1>
             <br>
                      <form action="" role="form" class="form-horizontal" method="get">
                          
                          <div class="form-group">
								<div class="col-sm-12">
                                
                                    
                                <table style="width:50%; text-align: center; margin-left:24%;" >
                                
                                        <tr>
                                            <th>Name</th>
                                            <th>Grade</th> 
                                            <th>Qualification</th>
                                        </tr>
                                        <?php
                                            $conn=mysqli_connect('localhost','root','','graduation_project');
                                            if(mysqli_error($conn)){
                                                die('Could not Connect MySql Server:' .mysql_error());
                                                    }
                                                $sql = "select * from diploma";
                                                $result = mysqli_query($conn, $sql);
                                                $rows = mysqli_fetch_all($result);
                                                $count = count($rows);
                                                for($i= 0 ; $i<$count ; $i++ ){
                                                    echo '<tr>
                                                            <td>'.$rows[$i][0].'</td>
                                                            <td>'.$rows[$i][3].'</td>
                                                            <td>'.$rows[$i][5].'</td>
                                                            <td><a style="width: 50px;height :20px; color : blue " class="centering" href="diploma_register.php?id='.$rows[$i][7].'&action=edit" ><span>Edit</span></a></td>
                                                            <td><a style="width: 30px;height :20px; color : green " class="centering" href="adminstration.php" ><span>Approve</span></a></td>
                                                            <td><a style="width: 30px;height :20px; color : red " class="centering" href="delete_diploma.php?id='.$rows[$i][7].'" ><span>Refuse</span></a></td>
                                                    </tr>';

                                                }

                                            
                                        ?>
                                        
                                    </table>
                                    
                                    
                                    
								</div>
							</div>
                          
                          
                        
                          
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light-me">
										Save &amp; Continue
									</button>
                                    
									<button onclick="location.href='admin_login.php'"  type="button" class="btn btn-light-me2">
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