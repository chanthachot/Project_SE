<?php  
  
include("connectDB/login.php");  
  
if(isset($_POST['login']))  
{  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
  
    $check_user="select * from user WHERE username='$username' AND password='$password'";  
  
    $result = $conn->query($check_user);
    
	$row=mysqli_fetch_array($result);
	
 if ($result->num_rows > 0)	 
    {
        if ($row['type']=="01")
		{	
            session_write_close();
            session_start();
           $_SESSION['user'] = $username;
           $_SESSION['presidentid'] = $row['presidentid'];
           echo "<script>window.open('main/admin/index.php','_self')</script>";
        }	
        if ($row['type']=="02")
		{	
            session_write_close();
            session_start();
           $_SESSION['user'] = $username;   
         
           echo "<script>window.open('main/user/index.php','_self')</script>";
		}		
    }  
    else  
    {  
        $_SESSION['user'] = "";   
       echo "<script>alert('username or password is incorrect!')</script>";  
	   echo "<script>window.open('login.php','_self')</script>";  
    }  
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
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
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

                            <a href="index.html">
                                <div id="colorlib-logo"><img src="images/client.png" width="50" height="50"
                                        href="index.html">ระบบจองเวลาผู้บริหาร
                            </a></div>

                    </div>
                    <div class="text-left menu-1">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i> หน้าหลัก</a></li>
                            <li><a href="calendar.php"><i class="fas fa-calendar-day"></i> ตารางเวลา</a></li>
                            <li><a href="contact.html"><i class="fas fa-phone-square"></i> ติดต่อสอบถาม</a></li>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;
                            <li class="btn-cta"><a href="login.php"><span><i class="fa fa-sign-in-alt"></i>
                                        เข้าสู่ระบบ</span></a></li>
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
        <form role="form" method="post" action="login.php">
            <div class="login-page">
                <div class="form">
                    <form class="login-form">
                        <input type="text" name="username" type="username" placeholder="ชื่อผู้ใช้งาน" autofocus
                            required />
                        <input type="password" name="password" type="password" value="" placeholder="รหัสผ่าน"
                            required /><br><br>
                        <button type="submit" value="login" name="login">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


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
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>



</body>



</html>