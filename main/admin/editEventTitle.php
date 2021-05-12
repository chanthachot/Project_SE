<?php

if (!isset($_SESSION['user']))
  {	
     echo "<script>alert('กรุณาเข้าสู่ระบบก่อน')</script>"; 
     echo "<script type='text/javascript'>window.location.href = '../../login.php';</script>"; 
  }
  

require_once('../../connectDB/calendar.php');
if (isset($_POST['delete']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}
	
}elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id']) && isset($_POST['place']) && isset($_POST['department']) && isset($_POST['number'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$department = $_POST['department'];
	$number = $_POST['number'];
	$place = $_POST['place'];
	$color = $_POST['color'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	
	$sql = "UPDATE events SET  title = '$title', color = '$color' , department = '$department' , number = '$number' , place = '$place' , start = '$start' , end = '$end' WHERE id = $id ";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
