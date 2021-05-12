<?php

session_start();
if($_SESSION['user']){
	$presidentid = $_SESSION['presidentid'];
}else{
	echo "no";
}

if (!isset($_SESSION['user']))
  {	
     echo "<script>alert('กรุณาเข้าสู่ระบบก่อน')</script>"; 
     echo "<script type='text/javascript'>window.location.href = '../../login.php';</script>"; 
  }
  
 
// Connexion à la base de données
require_once('../../connectDB/calendar.php');
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$place = $_POST['place'];
	$department = $_POST['department'];
	$number = $_POST['number'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];

	$sql = "INSERT INTO events(title, start, end, color, presidentid,place,department,number) values ('$title', '$start', '$end', '$color','$presidentid','$place','$department','$number')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
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
