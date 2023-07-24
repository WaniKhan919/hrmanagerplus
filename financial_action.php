<?php
include 'db.php';
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uuid=$_POST["uuid"];
    foreach ($_POST['date'] as $key => $value) {
        $date	 = $_POST['date'][$key];
        $court = $_POST['court'][$key];
        $details = $_POST['details'][$key];
        $sql="INSERT INTO `financial_history`(`uu_id`, `date`, `court`, `details`) VALUES('$uuid','$date','$court','$details')";
        $run=mysqli_query($conn,$sql);
    }
    if($run){
      header('location:work-history.php?uuid='.$uuid);
    }else{
      echo "failed";
    }
  }
?>