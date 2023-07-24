<?php
include 'db.php';
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uuid=$_POST["uuid"];
    foreach ($_POST['institute'] as $key => $value) {
        $institute = $_POST['institute'][$key];
        $email = $_POST['email'][$key];
        $qualification = $_POST['qualification'][$key];
        $type = $_POST['type'][$key];
        $starting_from = $_POST['starting_from'][$key];
        $end_to = $_POST['end_to'][$key];
        $sql="INSERT INTO `education_history`(`uu_id`, `institute`, `email`, `qualification`, `type`, `starting_from`, `end_to`) VALUES('$uuid','$institute','$email','$qualification','$type','$starting_from','$end_to')";
        $run=mysqli_query($conn,$sql);
    }
    if($run){
      header('location:financial-history.php?uuid='.$uuid);
    }else{
      echo "failed";
    }
  }
?>