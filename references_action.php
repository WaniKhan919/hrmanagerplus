<?php
include 'db.php';
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uuid=$_POST["uuid"];
    foreach ($_POST['name'] as $key => $value) {
        if(isset($value) && $value!=null && $value!=''){
          $name	 = $_POST['name'][$key];
          $email = $_POST['email'][$key];
          $employer_address = $_POST['employer_address'][$key];
          $post_code = $_POST['post_code'][$key];
          $start_date = $_POST['start_date'][$key];
          $duration = $_POST['duration'][$key];
          $relationship = $_POST['relationship'][$key];
          $sql="INSERT INTO `reference`(`uu_id`,`name`, `email`, `employer_address`, `post_code`, `start_date`, `duration`, `relationship`) VALUES('$uuid','$name','$email','$employer_address','$post_code','$start_date','$duration','$relationship')";
          $run=mysqli_query($conn,$sql);
        }
    }
    if($run){
      header('location:confirmation.php?uuid='.$uuid);
    }else{
      echo "failed";
    }
  }
?>