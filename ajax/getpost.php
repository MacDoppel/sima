<?php 
       
       include('../db_conf.php');
       $register = strtolower(mysqli_escape_string($con, $_POST['register']));
	   

	   $sql = "select * from tbl_member where register='$register'";
          $res = mysqli_query($con, $sql)or die('sorry dear program');
          while ($row = mysqli_fetch_assoc($res)) {
	    $member_type = $row['member_type'];
	   }

	   if ($member_type == 'effectif') {
	   	$price = 25;
	   	echo json_encode($price);
	   }


	   if ($member_type == 'sympathisant') {
	   	$price = 50;
	   	echo json_encode($price);
	   }


	   if ($member_type == 'honneur') {
	   	$price = 100;
	   	echo json_encode($price);
	   }


?>