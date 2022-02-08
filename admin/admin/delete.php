<?php 
  ob_start();
  session_start();
  include($_SERVER['DOCUMENT_ROOT']."/molla/database.php");
  if (!isset($_SESSION['admindb'])) {
    header('location: login.php');
  }else{
    $ad = $_SESSION['admindb'];
  }
  date_default_timezone_set("Asia/Ho_Chi_Minh");
?>


<?php 
	$id_item = $_GET['id_item'];
  echo $id_item;
	mysqli_query($connection,"DELETE FROM item where item_id ='$id_item'");
	header('location: index.php');
?>