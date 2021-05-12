<?php
session_start();
if($_SESSION['user']){
	//echo $_SESSION['user']; 
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

    <style>
    #calendar {
        max-width: 800px;
    }

    .col-centered {
        float: none;
        margin: 0 auto;
    }
    </style>

    <!-- JSCalendar -->
    <link href='../../css/fullcalendar.css' rel='stylesheet' />
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
                            <li><a href="index.php"><i class="fa fa-home"></i> หน้าหลัก</a></li>
                            <li class="active"><a href="reserve.php"><i class="fas fa-user-tie"></i> จองผู้บริหาร</a>
                            </li>


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

    <?php
		require_once('../../connectDB/calendar.php');


        if (isset($_POST['filterpresident'])){
            $presidentid=$_POST['filterpresident'];
            if($presidentid==" "){
                    $sql = "SELECT * FROM events";
            }
            else{
            $sql = "SELECT * FROM events where presidentid=".$presidentid;
            $_SESSION['presidentid']=$presidentid;
            }
            
        }
        else{
            $sql = "SELECT * FROM events";
        }

		$req = $bdd->prepare($sql);
		$req->execute();

		$events = $req->fetchAll();
		?>

    <form method="POST" action="reserve.php">
        <div id="calendar_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 intro-wrap">
                        <div class="intro-flex">
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="about-desc animate-box">
                            <h2>เลือกผู้บริหาร</h2>
                            <div class="fancy-collapse-panel">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <select name="filterpresident" class="form-control" id="filterpresident">
                                <option value=""> ทั้งหมด</option>
                                    <?php
                                        $sql1 = "SELECT * FROM president";
                                        $req = $bdd->prepare($sql1);
                                        $req->execute();
                                        $president = $req->fetchAll();

                                        foreach ($president as $row => $president) 
                                        {
                                                if($president['presidentid']==$presidentid){
                                                    $select='selected';
                                                }else{
                                                    $select="";
                                                }
                                        echo  "<option value='".$president['presidentid']."'".$select.">".$president['presidentname']."</option>";
                                        }
                                        ?>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-primary">ค้นหา</button>
    </form>
    </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>ตารางปฎิทิน</h1>
                <div id="calendar" class="col-centered"><br>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>








    <!-- Modal -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="addEvent.php">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">เพิ่มกิจกรรม</h4>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">ชื่อเรื่อง</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="ชื่อเรื่อง">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="place" class="col-sm-2 control-label">สถานที่</label>
                                <div class="col-sm-10">
                                    <input type="text" name="place" class="form-control" id="place" placeholder="สถานที่">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="department" class="col-sm-2 control-label">หน่วยงาน</label>
                                <div class="col-sm-10">
                                    <input type="text" name="department" class="form-control" id="department" placeholder="หน่วยงาน">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="number" class="col-sm-2 control-label">จำนวนคน</label>
                                <div class="col-sm-10">
                                    <input type="text" name="number" class="form-control" id="number" placeholder="จำนวนคน">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="color" class="col-sm-2 control-label">สี</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">เลือก</option>
                                        <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                        <option style="color:#008000;" value="#008000">&#9724; Green</option>
                                        <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                        <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                        <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                        <option style="color:#000;" value="#000">&#9724; Black</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="start" class="col-sm-2 control-label">วันที่เริ่ม</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="end" class="col-sm-2 control-label">วันที่สิ้นสุด</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end" class="form-control" id="end">
                                </div>
                            </div>
                            

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                            <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="editEventTitle.php">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">แก้ไขกิจกรรม</h4>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">ชื่อเรื่อง</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="ชื่อเรื่อง">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="place" class="col-sm-2 control-label">สถานที่</label>
                                <div class="col-sm-10">
                                    <input type="text" name="place" class="form-control" id="place" placeholder="สถานที่">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="department" class="col-sm-2 control-label">หน่วยงาน</label>
                                <div class="col-sm-10">
                                    <input type="text" name="department" class="form-control" id="department" placeholder="หน่วยงาน">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="number" class="col-sm-2 control-label">จำนวนคน</label>
                                <div class="col-sm-10">
                                    <input type="text" name="number" class="form-control" id="number" placeholder="จำนวนคน">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="start" class="col-sm-2 control-label">วันที่เริ่ม</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="end" class="col-sm-2 control-label">วันที่สิ้นสุด</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end" class="form-control" id="end">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="color" class="col-sm-2 control-label">สี</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Choose</option>
                                        <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                        <option style="color:#008000;" value="#008000">&#9724; Green</option>
                                        <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                        <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                        <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                        <option style="color:#000;" value="#000">&#9724; Black</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label class="text-danger"><input type="checkbox" name="delete"> ลบกิจกรรม</label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="id" class="form-control" id="id">


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                            <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
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


    <!-- FullCalendar -->
    <script src='../../jscalendar/moment.min.js'></script>
    <script src='../../jscalendar/fullcalendar.min.js'></script>

    <script>
    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },

            defaultDate: $('#calendar').fullCalendar('today'),
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            selectHelper: true,
            select: function(start, end) {

                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm'));
                $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm'));
                $('#ModalAdd').modal('show');
            },
            eventRender: function(event, element) {
                element.bind('dblclick', function() {
                    $('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #title').val(event.title);
                    $('#ModalEdit #place').val(event.place);
                    $('#ModalEdit #department').val(event.department);
                    $('#ModalEdit #number').val(event.number);
                    $('#ModalEdit #start').val(moment(event.start).format('YYYY-MM-DD HH:mm'));
                    $('#ModalEdit #end').val(moment(event.end).format('YYYY-MM-DD HH:mm'));
                    $('#ModalEdit #color').val(event.color);
                    $('#ModalEdit').modal('show');
                });
            },
            eventDrop: function(event, delta, revertFunc) { // si changement de position

                edit(event);

            },
            eventResize: function(event, dayDelta, minuteDelta,
                revertFunc) { // si changement de longueur

                edit(event);

            },
            events: [
                <?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?> {
                    id: '<?php echo $event['id']; ?>',
                    title: '<?php echo $event['title']; ?>',
                    place: '<?php echo $event['place']; ?>',
                    department: '<?php echo $event['department']; ?>',
                    number: '<?php echo $event['number']; ?>',
                    start: '<?php echo $start; ?>',
                    end: '<?php echo $end; ?>',
                    color: '<?php echo $event['color']; ?>',
                },
                <?php endforeach; ?>
            ]
        });

        function edit(event) {
            start = event.start.format('YYYY-MM-DD HH:mm');
            if (event.end) {
                end = event.end.format('YYYY-MM-DD HH:mm');
            } else {
                end = start;
            }

            id = event.id;

            Event = [];
            Event[0] = id;
            Event[1] = start;
            Event[2] = end;

            $.ajax({
                url: '',
                type: "POST",
                data: {
                    Event: Event
                },
                success: function(rep) {
                    if (rep == 'OK') {
                        alert('test Saved');
                    } else {
                        alert('Could not be saved. try again.');
                    }
                }
            });
        }

    });
    </script>


</body>

</html>