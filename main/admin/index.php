<?php
session_start();
if($_SESSION['user']){
	/* echo $_SESSION['user']; 
	echo $_SESSION['presidentid']; */
}else{
	echo "no";
}

if (!isset($_SESSION['user']))
  {	
     echo "<script>alert('กรุณาเข้าสู่ระบบก่อน')</script>"; 
     echo "<script type='text/javascript'>window.location.href = '../../login.php';</script>"; 
  }
  

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบจองเวลาผู้บริหาร</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="../../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../../css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="../../css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Modernizr JS -->
    <script src="../../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">

            <div class="top-menu bg-passtell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                            <a href="index.php">
                                <div id="colorlib-logo"><img src="../../images/client.png" width="50"
                                        height="50">ระบบจองเวลาผู้บริหาร
                            </a></div>

                    </div>
                    <div class="text-left menu-1">
                        <ul>
                            <li class="active"><a href="index.php"><i class="fa fa-home"></i> หน้าหลัก</a></li>
                            <li><a href="calendar.php"><i class="fas fa-calendar-day"></i> ตารางเวลา</a></li>
                            <li><a href="reserve.php"><i class="fas fa-user-tie"></i> จองผู้บริหาร</a></li>
                           

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;

                            <li class="btn-cta"><a href="../../logout.php"><span><i class="fa fa-sign-in-alt"></i>
                                        ออกจากระบบ</span></a></li>
                        </ul>

                    </div>
                </div>
            </div>
    </div>
    </nav>
    <div id="">
        &nbsp
    </div>
    </div>


    <div id="colorlib-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-5 intro-wrap">
					<div class="intro-flex">

					</div>
				</div>
				<div class="col-md-12">
					<div class="about-desc animate-box">
                    <div class="col-lg-12 text-center">
                    <h1>ยินดีต้อนรับ<br>ผู้บริหารและเลขานุการ</h1><br>
                    </div>
						<h2>ตารางเวลาว่างของผู้บริหาร</h2>
					
						<div class="fancy-collapse-panel">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
												aria-expanded="true" aria-controls="collapseOne">เวลาว่างของ
												นายกรัฐมนตรี จันทโชติ ธรรมสาร
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
										aria-labelledby="headingOne">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-6">
													วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. - 17:00
													น.</br>วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. -
													17:00 น.

												</div>
												<div class="col-md-6">
													วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. - 17:00
													น.</br>วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. -
													17:00 น.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion"
												href="#collapseTwo" aria-expanded="false"
												aria-controls="collapseTwo">เวลาว่างของ รองนายกรัฐมนตรี ฐิติพงศ์
												สุริยะไกร
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="headingTwo">
										<div class="panel-body">
											<div class="col-md-6">
												วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. - 17:00
												น.</br>วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. -
												17:00 น.

											</div>
											<div class="col-md-6">
												วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. - 17:00
												น.</br>วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. -
												17:00 น.
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion"
												href="#collapseThree" aria-expanded="false"
												aria-controls="collapseThree">เวลาว่างของ ประธานบริหาร พงษ์ระวี เวียนศรี
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="headingThree">
										<div class="panel-body">
											<div class="col-md-6">
												วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. - 17:00
												น.</br>วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. -
												17:00 น.

											</div>
											<div class="col-md-6">
												วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. - 17:00
												น.</br>วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. -
												17:00 น.
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion"
												href="#collapseFour" aria-expanded="false"
												aria-controls="collapseFour">เวลาว่างของ รองประธานบริหาร ติณห์ ผุยคำพิ
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="headingFour">
										<div class="panel-body">
											<div class="col-md-6">
												วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. - 17:00
												น.</br>วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. -
												17:00 น.

											</div>
											<div class="col-md-6">
												วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. - 17:00
												น.</br>วันอาทิตย์ : 16:00 น. - 17:00 น.</br>วันอาทิตย์ : 16:00 น. -
												17:00 น.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <br>
        <br>
        
</div>


   
    <footer id="colorlib-footer">
        <div class="container">

            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; วิชา 342371 Sofeware Engineer </small><br>
                    <small class="block">จัดทำโดย งัดถั่งงัด</small>
                </p>
            </div>
        </div>
        </div>
        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="../../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../../js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="../../js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="../../js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="../../js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="../../js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="../../js/main.js"></script>

</body>

</html>