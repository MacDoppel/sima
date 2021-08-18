<?php
   include('../db_conf.php');

   $sql = "SELECT count(id) as val FROM tbl_notification where state_notify='UNREAD' ";
   $result = mysqli_query($con,$sql);
   if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_assoc($result)){
     $data[] = $row['val'];
   }
   
   echo json_encode($data);
}
?>
