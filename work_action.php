<?php
include 'db.php';
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uuid=$_POST["uuid"];
    foreach ($_POST['employer_name'] as $key => $value) {
        if(isset($value) && $value!=null && $value!=''){
          $employer_name	 = $_POST['employer_name'][$key];
          $employer_address = $_POST['employer_address'][$key];
          $employer_email = $_POST['employer_email'][$key];
          $nature_of_job = $_POST['nature_of_job'][$key];
          $start_date = $_POST['start_date'][$key];
          $end_date = $_POST['end_date'][$key];
          $contact_person_name = $_POST['contact_person_name'][$key];
          $contact_no = $_POST['contact_no'][$key];
          $reason_of_leaving = $_POST['reason_of_leaving'][$key];
          $sql="INSERT INTO `work_history`(`uu_id`,`employer_name`, `employer_address`, `employer_email`, `nature_of_job`, `start_date`, `end_date`, `contact_person_name`, `contact_no`, `reason_of_leaving`) VALUES('$uuid','$employer_name','$employer_address','$employer_email','$nature_of_job','$start_date','$end_date','$contact_person_name','$contact_no','$reason_of_leaving')";
          $run=mysqli_query($conn,$sql);
        }
    }
    if($uuid){
      header('location:references.php?uuid='.$uuid);
    }else{
      echo "failed";
    }
  }
?>