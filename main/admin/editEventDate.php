<?php

if (!isset($_SESSION['user']))
  {	
     echo "<script>alert('กรุณาเข้าสู่ระบบก่อน')</script>"; 
     echo "<script type='text/javascript'>window.location.href = '../../login.php';</script>"; 
  }
  

// 
require_once('../../connectDB/calendar.php');

if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
	
	alert('can not be moved');
$id = $_POST['Event'][0];
	$start = $_POST['Event'][1];
	$end = $_POST['Event'][2];

	$sql = "UPDATE events SET  start = '$start', end = '$end' WHERE id = $id ";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}else{
		die ('OK');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
