<?php
include 'db.php';
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Generate UUID//
    if (function_exists('random_bytes')) {
      $data = random_bytes(16);
    } elseif (function_exists('openssl_random_pseudo_bytes')) {
        $data = openssl_random_pseudo_bytes(16);
    } else {
        $data = uniqid(mt_rand(), true);
    }

    assert(strlen($data) == 16);

    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $surname = $_POST["surname"];
    $title = $_POST["title"];
    $address = $_POST["address"];
    if($_FILES['address_proof']){
      $targetDir = "uploads/";
      $address_proof = $targetDir . basename($_FILES["address_proof"]["name"]);
      move_uploaded_file($_FILES["address_proof"]["tmp_name"], $address_proof);
    }
    if($_FILES['address_proof_two']){
      $targetDir = "uploads/";
      $address_proof_two = $targetDir . basename($_FILES["address_proof_two"]["name"]);
      move_uploaded_file($_FILES["address_proof_two"]["tmp_name"], $address_proof);
    }
    $post_code = $_POST["post_code"];
    $insurance_no = $_POST["insurance_no"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $other_position = $_POST["other_position"] ?? null;
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    //Image Code
    if($_FILES['image']){
      $targetDir = "uploads/";
      $image = $targetDir . basename($_FILES["image"]["name"]);
      move_uploaded_file($_FILES["image"]["tmp_name"], $image);
    }
    $nationality = $_POST["nationality"];
    $passport_no = $_POST["passport_no"];
    $passport_expiry_date = $_POST["passport_expiry_date"];
    if($_FILES['insurance_proof']){
      $targetDir = "uploads/";
      $insurance_proof = $targetDir . basename($_FILES["insurance_proof"]["name"]);
      move_uploaded_file($_FILES["insurance_proof"]["tmp_name"], $insurance_proof);
    }
    if($_FILES['passport_proof']){
      $targetDir = "uploads/";
      $passport_proof = $targetDir . basename($_FILES["passport_proof"]["name"]);
      move_uploaded_file($_FILES["passport_proof"]["tmp_name"], $passport_proof);
    }
    $valid_frontline_licence = $_POST["valid_frontline_licence"];
    $licence_type = $_POST["licence_type"];
    $licence_no = $_POST["licence_no"];
    $licence_expiry_date = $_POST["licence_expiry_date"];
    if($_FILES['licence_proof']){
      $targetDir = "uploads/";
      $licence_proof = $targetDir . basename($_FILES["licence_proof"]["name"]);
      move_uploaded_file($_FILES["licence_proof"]["tmp_name"], $licence_proof);
    }
    $licence_type_two = $_POST["licence_type_two"];
    $licence_no_two = $_POST["licence_no_two"];
    $licence_expiry_date_two = $_POST["licence_expiry_date_two"];
    if($_FILES['licence_proof_two']){
      $targetDir = "uploads/";
      $licence_proof_two = $targetDir . basename($_FILES["licence_proof_two"]["name"]);
      move_uploaded_file($_FILES["licence_proof_two"]["tmp_name"], $licence_proof_two);
    }
    $other_info = $_POST["other_info"];
    $leisure = $_POST["leisure"];
    $criminal_record = $_POST["criminal_record"];
    $chest_size = $_POST["chest_size"];
    $waist_size = $_POST["waist_size"];
    $inside_leg_size = $_POST["inside_leg_size"] ?? '';
    $collar_size = $_POST["collar_size"];
    $shoes_size = $_POST["shoes_size"];
    $days_not_work = $_POST["days_not_work"];
    $hours_not_work = $_POST["hours_not_work"];
    $shift_not_work = $_POST["shift_not_work"];
    $account_holder = $_POST["account_holder"];
    $bank_code = $_POST["bank_code"];
    $account_no = $_POST["account_no"];
    $bank_name = $_POST["bank_name"];
    $bank_address = $_POST["bank_address"];
    $emergency_person = $_POST["emergency_person"];
    $relationship = $_POST["relationship"];
    $emergency_address = $_POST["emergency_address"];
    $emergency_no = $_POST["emergency_no"];
    $has_vehicle = $_POST["has_vehicle"];
    $vehicle_model = $_POST["vehicle_model"];
    $driving_licence = $_POST["driving_licence"];
    $driving_licence_no = $_POST["driving_licence_no"];
    $driving_licence_expiry = $_POST["driving_licence_expiry"];
    $driving_licence_authority = $_POST["driving_licence_authority"];
    $motoring_offences = $_POST["motoring_offences"];
    $motoring_offences_detail = $_POST["motoring_offences_detail"];
    $driving_licence_proof = $_POST["driving_licence_proof"];
    $start_date = $_POST["start_date"];
    $sql="INSERT INTO `user_information`(`uu_id`, `first_name`, `middle_name`, `surname`, `title`, `address`, `address_proof`, `address_proof_two`, `post_code`, `insurance_no`, `phone`, `email`, `position`, `other_position`, `dob`, `gender`, `image`, `nationality`, `passport_no`, `passport_expiry_date`, `insurance_proof`, `passport_proof`, `valid_frontline_licence`, `licence_type`, `licence_no`, `licence_expiry_date`, `licence_proof`, `licence_type_two`, `licence_no_two`, `licence_expiry_date_two`, `licence_proof_two`, `other_info`, `leisure`, `criminal_record`, `chest_size`, `waist_size`, `inside_leg_size`, `collar_size`, `shoes_size`, `days_not_work`, `hours_not_work`, `shift_not_work`, `account_holder`, `bank_code`, `account_no`, `bank_name`, `bank_address`, `emergency_person`, `relationship`, `emergency_address`, `emergency_no`, `has_vehicle`, `vehicle_model`, `driving_licence`, `driving_licence_no`, `driving_licence_expiry`, `driving_licence_authority`, `motoring_offences`, `motoring_offences_detail`, `driving_licence_proof`, `start_date`) VALUES('$uuid','$first_name', '$middle_name', '$surname', '$title', '$address', '$address_proof', '$address_proof_two', '$post_code', '$insurance_no', '$phone', '$email', '$position', '$other_position', '$dob', '$gender', '$image', '$nationality', '$passport_no', '$passport_expiry_date', '$insurance_proof', '$passport_proof', '$valid_frontline_licence', '$licence_type', '$licence_no', '$licence_expiry_date', '$licence_proof', '$licence_type_two', '$licence_no_two', '$licence_expiry_date_two', '$licence_proof_two', '$other_info', '$leisure', '$criminal_record', '$chest_size', '$waist_size', '$inside_leg_size', '$collar_size', '$shoes_size', '$days_not_work', '$hours_not_work', '$shift_not_work', '$account_holder', '$bank_code', '$account_no', '$bank_name', '$bank_address', '$emergency_person', '$relationship', '$emergency_address', '$emergency_no', '$has_vehicle', '$vehicle_model', '$driving_licence', '$driving_licence_no', '$driving_licence_expiry', '$driving_licence_authority', '$motoring_offences', '$motoring_offences_detail', '$driving_licence_proof', '$start_date')";
    $run=mysqli_query($conn,$sql);
    if($run){
      header('location:education-history.php?uuid='.$uuid);
    }else{
      echo "failed";
    }
  }
?>