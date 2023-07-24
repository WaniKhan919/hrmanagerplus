<?php
include 'db.php';
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uuid=$_POST["uuid"];
    $sign=$_POST["sign"];
    $print_name=$_POST["print_name"];
    $date=$_POST["date"];
    $sign_two=$_POST["sign_two"];
    $print_name_two=$_POST["print_name_two"];
    $date_two=$_POST["date_two"];
    $post=$_POST["post"];
    $email=$_POST["email"];
    $telephone=$_POST["telephone"];
    $sms=$_POST["sms"];
    $is_call=$_POST["is_call"];
    $terms=$_POST["terms"];
    $privacy_policy=$_POST["privacy_policy"];
    $opt_out=$_POST["opt_out"];
    
    $sql="INSERT INTO `confirmation`(`uu_id`,`sign`, `print_name`, `date`, `sign_two`, `print_name_two`, `date_two`, `post`, `email`, `telephone`, `sms`, `is_call`, `terms`, `privacy_policy`,`opt_out`) VALUES('$uuid','$sign','$print_name','$date','$sign_two','$print_name_two','$date_two','$post','$email','$telephone','$sms','$is_call','$terms','$privacy_policy','$opt_out')";
    $run=mysqli_query($conn,$sql);
    if($run){
      header('location:success.php');
    }else{
      echo "failed";
    }
  }
?>