<?php
    include '../db.php';
    $id = $_GET['uuid'];
    // $sql = "
    //     SELECT *
    //     FROM user_information AS u
    //     LEFT JOIN education_history AS e ON u.uu_id = e.uu_id
    //     LEFT JOIN work_history AS h ON u.uu_id = h.uu_id
    //     LEFT JOIN financial_history AS f ON u.uu_id = f.uu_id
    //     LEFT JOIN reference AS r ON u.uu_id = r.uu_id
    //     WHERE u.uu_id = '".$id."'";
    $sql = "SELECT * FROM user_information where uu_id = '".$id."'";
    $run = mysqli_query($conn, $sql);

    $row = $run->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MPD FM Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.icon">

    <!-- Select2 css -->
    <link href="../assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="../assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="../assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row mt-3">
                <div class="col-12">
                    <div class="">
                        <div class="text-center">
                            <h6 class="heading">Applicant Information</h6>
                        </div>
                        <hr class="ps-3 pe-3">
                        <div class="ps-3 pe-3">
                            <div class="row">
                                <div class="col">First Name</div>
                                <div class="col">Middle Name</div>
                                <div class="col">Surname</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['first_name'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['middle_name'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['surname'] ?? ''?></b></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">Gender</div>
                                <div class="col-4">Address</div>
                            </div>
                            <div class="row">
                                <div class="col-4"><b><?php echo $row['gender'] ?? ''?></b></div>
                                <div class="col-4"><b><?php echo $row['address'] ?? ''?></b></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">Post Code</div>
                                <div class="col">National Insurance No</div>
                                <div class="col">Telephone</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['post_code'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['insurance_no'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['phone'] ?? ''?></b></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">Email</div>
                                <div class="col">Position</div>
                                <div class="col">Date of Birth</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['email'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['position'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['dob'] ?? ''?></b></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">Visa Expiry</div>
                                <div class="col">Passport Expiry</div>
                                <div class="col">ID Card Expiry</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['licence_expiry_date'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['passport_expiry_date'] ?? ''?></b></div>
                                <div class="col"><b class="text-danger">(not set)</b></div>
                            </div>
                        </div>
                        <!-- end card-body -->
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3">Right to Work</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Have right to work in UK?</div>
                                <div class="col">Nationality</div>
                                <div class="col">UK Entry Date</div>
                            </div>
                            <div class="row">
                                <div class="col"><b></b></div>
                                <div class="col"><b><?php echo $row['nationality'] ?? ''?></b></div>
                                <div class="col"><b></b></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">UK Entry Point</div>
                                <div class="col-4">Right to Work expiry date</div>
                            </div>
                            <div class="row">
                                <div class="col-4"><b>First Name</b></div>
                                <div class="col-4"><b>Middle Name</b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">SIA Licence</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Do you possess a valid frontline SIA Licence</div>
                                <div class="col">SIA Licence Type</div>
                                <div class="col">SIA Licence Number</div>
                                <div class="col">SIA Expiry Date</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['valid_frontline_licence'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['licence_type'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['licence_no'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['licence_expiry_date'] ?? ''?></b></div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['valid_frontline_licence_two'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['licence_type_two'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['licence_no_two'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['licence_expiry_date_two'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Other Employment</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Please list all other employment you would continue to do if you were successful in obtaining employment</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['other_info'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Leisure</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Please list all other employment you would continue to do if you were successful in obtaining employment</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['leisure'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Criminal Record</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Please list all other employment you would continue to do if you were successful in obtaining employment</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['criminal_record'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Uniform Information</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <p>To allow us to order you a uniform please supply the following information</p>
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Chest Size</div>
                                <div class="col">Waist Size</div>
                                <div class="col">Inside Leg Size</div>
                                <div class="col">Collar Size</div>
                                <div class="col">Shoes Size</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['chest_size'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['waist_size'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['inside_leg_size'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['collar_size'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['shoes_size'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Please give details of any days/hours/shifts you cannot work</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Days not to work</div>
                                <div class="col">Hours not to work</div>
                                <div class="col">Shift not to work</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['days_not_work'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['hours_not_work'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['shift_not_work'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Bank Account Details (This information can be provided upon commencement of employment if preferred)</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Bank account name</div>
                                <div class="col">Bank short code</div>
                                <div class="col">Bank account number</div>
                                <div class="col">Bank Name</div>
                                <div class="col">Bank branch address</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['account_holder'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['bank_code'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['account_no'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['bank_name'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['bank_address'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Name and Address of Contact in cases of Emergency</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Emergency contact name</div>
                                <div class="col">Emergency contact relationship</div>
                                <div class="col">Emergency contact address</div>
                                <div class="col">Emergency contact telephone</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['emergency_person'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['relationship'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['emergency_address'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['emergency_no'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Do you have access to your own transport</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Has Vehicle</div>
                                <div class="col">Vehicle Model</div>
                                <div class="col">Vehicle Licence Type</div>
                                <div class="col">Vehicle Expiry Date</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['has_vehicle'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['vehicle_model'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['driving_licence'] ?? ''?></b></div>
                                <div class="col"><b><?php echo $row['driving_licence_expiry'] ?? ''?></b></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">Motoring Offences</div>
                                <div class="col-4">Vehicle Country Of Issue</div>
                            </div>
                            <div class="row">
                                <div class="col-4"><b><?php echo $row['motoring_offences'] ?? ''?></b></div>
                                <div class="col-4"><b></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Expiry Dates</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Expiry Date</div>
                                <div class="col">Passport Expiry Date</div>
                            </div>
                            <div class="row">
                                <div class="col"><b></b></div>
                                <div class="col"><b><?php echo $row['passport_expiry_date'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Joining Details</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Earliest Start Date</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo $row['start_date'] ?? ''?></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Other</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Created At</div>
                                <div class="col">Update At</div>
                                <div class="col">Update by</div>
                            </div>
                            <div class="row">
                                <div class="col"><b><?php echo date('d-m-y',strtotime($row['driving_licence_expiry'])) ?? ''?></b></div>
                                <div class="col"><b><?php echo date('d-m-y',strtotime($row['driving_licence_expiry'])) ?? ''?></b></div>
                                <div class="col"><b></b></div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">References</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3">
                            <div class="row mt-2">
                                <div class="col">Name</div>
                                <div class="col">Relation</div>
                            </div>
                            <?php
                                $sql = "SELECT * FROM reference where uu_id = '".$id."'";
                                $run = mysqli_query($conn, $sql);
                                while($row = $run->fetch_assoc()){
                            ?>
                            <div class="row">
                                <div class="col"><b><?php echo $row['name']?></b></div>
                                <div class="col"><b><?php echo $row['relationship']?></b></div>
                            </div>
                            <?php }?>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">MPD FM ( UK ) LTD Privacy Notice</h6>
                        <hr class="ps-5 pe-3 pt-0 mt-0">
                        <div class="ps-3 pe-3 mt-2">
                        <div class="row">
                                <p>Who We Are MPD FM ( UK ) LTD gather and process your personal information
                                    in accordance with this privacy notice and in compliance with the
                                    relevant Data Protection Regulation and Laws. This notice provides you
                                    with the necessary information regarding your rights and our
                                    obligations, and explains how, why and when we process your personal
                                    data.</p>
                                <br>
                                <p>MPD FM ( UK ) LTD registered office is at Unit 20, Dagenham Business
                                    Centre, Rainham Road North, Dagenham. RM10 7FD we are a company
                                    registered in England and Wales under company number 04632279. We are
                                    registered on the Information Commissioner's Office Register;
                                    registration number Z9503973, and act as the data controller when
                                    processing your data. Our designated Data Protection Officer/Appointed
                                    Person is Deepak Shukla, who can be contacted at Tel: 020 8514 8744</p>
                                <br>
                                <p>Information That We Collect MPD FM ( UK ) LTD processes your personal
                                    information to meet our legal, statutory and contractual obligations and
                                    to provide you with our products and services. We will never collect any
                                    unnecessary personal data from you and do not process your information
                                    in any way, other than as specified in this notice. The personal data
                                    that we collect from is:</p>
                                    
                                <input type="hidden" value="<?php echo $id?>" name="uuid">
                                <div class="p-2">
                                    <ul>
                                        <li>Name</li>
                                        <li>Date of Birth</li>
                                        <li>Home Address</li>
                                        <li>Personal Email</li>
                                        <li>Business Email</li>
                                        <li>Home Telephone Number</li>
                                        <li>Mobile Telephone Number</li>
                                        <li>National Insurance Number</li>
                                        <li>Passport Number</li>
                                        <li>Driver’s License Number</li>
                                    </ul>
                                </div>
                                <h5>We collect information in the below ways: -</h5>
                                <p>online form, website, employment CV’s</p>
                                <br>
                                <p>How We Use Your Personal Data (Legal Basis for Processing) MPD FM ( UK )
                                    LTD takes your privacy very seriously and will never disclose, share or
                                    sell your data without your consent; unless required to do so by law. We
                                    only retain your data for as long as is necessary and for the purpose(s)
                                    specified in this notice. Where you have consented to us providing you
                                    with promotional offers and marketing, you are free to withdraw this
                                    consent at any time. <strong>The purposes and reasons for processing
                                        your personal data are detailed below:</strong></p>
                                <h5>Employment and to provide our customer base with our security services
                                </h5>
                                <div class="p-2">
                                    <ul>
                                        <li>We collect your personal data in the performance of a contract
                                            or to provide a service and to ensure that orders are completed
                                            and can be sent out to your preferred address.</li>
                                        <li>We collect and store your personal data as part of our legal
                                            obligation for business accounting and tax purposes.</li>
                                        <li>We have a legal obligation to share your personal data with
                                            Creditsafe Business Solutions Limited who are a credit reference
                                            agency and provide us with financial background checks prior to
                                            you commencing employment with us.</li>
                                        <li>We will occasionally send you marketing information where we
                                            have assessed that it is beneficial to you as a customer and in
                                            our interests. Such information will be non-intrusive and is
                                            processed on the grounds of legitimate interests.</li>
                                    </ul>
                                </div>
                                <br>
                                <h5>Your Rights</h5>
                                <p class="mt-2 mb-2">You have the right to access any personal information
                                    that MPD FM ( UK ) LTD processes about you and to request information
                                    about: -</p>
                                <div class="p-2">
                                    <ul>
                                        <li>What personal data we hold about you</li>
                                        <li>The purposes of the processing</li>
                                        <li>The categories of personal data concerned</li>
                                        <li>The recipients to whom the personal data has/will be disclosed
                                        </li>
                                        <li>How long we intend to store your personal data for</li>
                                        <li>If we did not collect the data directly from you, information
                                            about the source</li>
                                    </ul>
                                </div>
                                <p>If you believe that we hold any incomplete or inaccurate data about you,
                                    you have the right to ask us to correct and/or complete the information
                                    and we will strive to do so as quickly as possible; unless there is a
                                    valid reason for not doing so, at which point you will be notified.</p>
                                <p>You also have the right to request erasure of your personal data or to
                                    restrict processing (where applicable) in accordance with the data
                                    protection laws; as well as to object to any direct marketing from us.
                                    Where applicable, you have the right to data portability of your
                                    information and the right to be informed about any automated
                                    decision-making we may use.</p>
                                <p>If we receive a request from you to exercise any of the above rights, we
                                    may ask you to verify your identity before acting on the request; this
                                    is to ensure that your data is protected and kept secure.</p>
                                <h5>Sharing and Disclosing Your Personal Information</h5>
                                <p>We do not share or disclose any of your personal information without your
                                    consent, other than for the purposes specified in this notice or where
                                    there is a legal requirement. MPD FM ( UK ) LTD
                                    usesCreditsafeBusinessSolutionsLimitedasathird-partytoprovidethebelowservicesand
                                    business functions; however, all processors acting on our behalf only
                                    process your data in accordance with instructions from us and comply
                                    fully with this privacy notice, the data protection laws and any other
                                    appropriate confidentiality and security measures.</p>
                                <h5 class="mb-2">Creditsafe Business Solutions Limited</h5>
                                <h5 class="mb-2">Vetting and screening all security staff in accordance with
                                    BS7858</h5>
                                <a class="mb-2" href="https://www.creditsafe.com/gb/en.html" target="_blank"
                                    rel="noopener noreferrer"></a>
                                <h5 class="mb-2">Safeguarding Measures</h5>
                                <p class="mb-2">MPD FM ( UK ) LTD takes your privacy seriously and takes
                                    every reasonable measure and precaution to protect and secure your
                                    personal data. We work hard to protect you and your information from
                                    unauthorised access, alteration, disclosure or destruction and have
                                    several layers of security measures in place, including: -</p>
                                <h5 class="mb-2">SSL, TLS, encryptions, restricted access, IT
                                    authentication, firewalls, anti-virus/malware etc</h5>
                                <h5 class="mb-2">Consequences of Not Providing Your Data</h5>
                                <p class="mt-2 mb-2">You are not obligated to provide your personal
                                    information to MPD FM ( UK ) LTD , however, as this information is
                                    required for us to provide you with our services and employment
                                    purposes, we will not be able to offer some/all our services without it.
                                </p>
                                <h5 class="mb-3">How Long We Keep Your Data</h5>
                                <p class="mb-2">MPD FM ( UK ) LTD only ever retains personal information for
                                    as long as is necessary and we have strict review and retention policies
                                    in place to meet these obligations. We are required under UK tax law to
                                    keep your basic personal data (name, address, contact details) for a
                                    minimum of 6 years after which time it will be destroyed.</p>
                                <p class="mb-3">Where you have consented to us using your details for direct
                                    marketing, we will keep such data until you notify us otherwise and/or
                                    withdraw your consent.</p>
                                <h5 class="mb-3">Special Categories Data</h5>
                                <p class="mb-2">Owing to the products, services or treatments that we offer,
                                    MPD FM ( UK ) LTD sometimes needs to process sensitive personal
                                    information (known as special category data) about you, to medical
                                    review. Where we collect such information, we will only request and
                                    process the minimum necessary for the specified purpose and identify a
                                    compliant legal basis for doing so.</p>
                                <p class="mb-2">Where we rely on your consent for processing special
                                    category data, we will obtain your explicit consent through a signature.
                                    You can modify or withdraw consent at any time, which we will act on
                                    immediately, unless there is a legitimate or legal reason for not doing
                                    so.</p>
                                <p class="mb-3">If you consent to us collecting and using your
                                    <strong>health/medical review annually</strong> for the purposes stated
                                    above, please sign below and print your name: -</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="">SIGNATURE OF APPLICANT</label>
                                        <textarea name="sign_two" class="form-control" id="" cols="30"
                                            rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="">Print Name</label>
                                        <input type="text" name="print_name_two" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="">Date</label>
                                        <input type="date" name="date_two" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <h4 class="mb-2">Marketing</h4>
                                <h4>CONSENT</h4>
                                <hr>
                                <p class="mb-2">Occasionally,MANPOWERDIRECT(UK)LTD would like to contact you
                                    with the feedback requestor promotions that we provide. If you consent
                                    to us using your contact details for this purpose, you have the right to
                                    modify or withdraw your consent at any time by using the
                                    opt-out/unsubscribe options or by contacting MANPOWERDIRECT(UK)LTD
                                    directly.</p>
                                <p class="mb-2">If you <strong>consent</strong> to us contacting you with
                                    the above-mentioned marketing and offers, please tick to say how you
                                    would like to be contacted: -</p>
                                <div class="p-3">
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" class="form-check" name="post">
                                        <label for="">POST</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" class="form-check" name="email">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" class="form-check" name="telephone">
                                        <label for="">Telephone</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" class="form-check" name="sms">
                                        <label for="">Text Message (SMS)</label>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="checkbox" class="form-check" name="is_call">
                                        <label for="">Automated Call</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h5>LEGITMIATE INTERESTS</h5>
                                <hr>
                                <p class="mb-2">MPD FM ( UK ) LTD will occasionally send you information
                                    newsletters by email/SMS/post that have been identified as being
                                    beneficial to our customers and in our interests. Such information will
                                    be relevant to you as a customer/employee and is non-intrusive and you
                                    will always have the option to opt-out/unsubscribe at any time.</p>
                                <p>If you would prefer not to receive above-mentioned marketing and offers,
                                    please tick below: -</p>
                                <div class="d-flex gap-2">
                                    <input type="checkbox" class="form-check" name="opt_out">
                                    <label for="">I wish to opt-out of marketing</label>
                                </div>
                                <h5 class="mt-4 mb-2">Lodging A Complaint</h5>
                                <p class="mb-2">
                                    MPD FM ( UK ) LTD only processes your personal information in compliance
                                    with this privacy notice and in accordance with the relevant data
                                    protection laws. If, however you wish to raise a complaint regarding the
                                    processing of your personal data or are unsatisfied with how we have
                                    handled your information, you have the right to lodge a complaint with
                                    the supervisory authority.
                                </p>
                                <div class="mb-3">
                                    <p class="m-0"><strong>IMPD FM ( UK ) LTD</strong></p>
                                    <p class="m-0"><strong>Deepak Shukla DPO</strong></p>
                                    <p class="m-0"><strong>Unit 20, Dagenham Business Centre, Rainham Rd
                                            North, Dagenham, Essex, RM10 7FD</strong></p>
                                </div>
                                <h5 class="mb-2">Consent</h5>
                                <p>MPD FM ( UK ) LTD take your privacy seriously and will only process your
                                    personal data with your consent and in accordance with the terms stated
                                    in our Privacy Notice. If you consent to us collecting and processing
                                    your personal data, please sign below: -</p>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="mb-3">
                                            <label for="">SIGNATURE OF APPLICANT</label>
                                            <textarea name="sign" class="form-control" id="" cols="30"
                                                rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="mb-3">
                                            <label for="">Print Name</label>
                                            <input type="text" name="print_name" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="mb-3">
                                            <label for="">Date</label>
                                            <input type="date" name="date" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex gap-3">
                                    <input type="checkbox" class="form-check" name="terms" id="">
                                    <label for="">I confirm that I have been provided with a copy of MPD FM
                                        ( UK ) LTD Privacy Notice & Terms & Conditions prior to giving
                                        consent</label>
                                </div>
                                <p class="mt-3 mb-3">
                                    MPD FM ( UK ) LTD take your privacy seriously and will only process your
                                    personal data with your consent and in accordance with the terms stated
                                    in our Privacy Notice. If you consent to us collecting and processing
                                    your personal data, please complete tick below: -
                                </p>
                                <div class="d-flex gap-3">
                                    <input type="checkbox" class="form-check" name="privacy_policy" id="">
                                    <label for="">I consent to you processing my personal data as detailed
                                        in your Privacy Notice:</label>
                                </div>
                            </div>
                        </div>
                        <h6 class="sub_heading pt-2 mb-0 pb-0 ps-3 mt-3">Employees Acknowledgement</h6>
                        <hr class="ps-5 pe-5 pt-0 mt-0">
                        <p>I have read this declaration and data protection policy and completed the Working Time Regulations selection above</p>
                        <div class="ps-3 pe-3 mb-4">
                            <div class="row mt-2">
                                <div class="col">SIGNATURE OF APPLICANT</div>
                                <div class="col">SIGNATURE OF HR    </div>
                            </div>
                            <div class="row">
                                <div class="col"><b>Name</b></div>
                                <div class="col"><b>Name</b></div>
                            </div>
                            <div class="row">
                                <div class="col"><b>Date</b></div>
                                <div class="col"><b>Date</b></div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="../assets/js/vendor.min.js"></script>

    <!-- Code Highlight js -->
    <script src="../assets/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="../assets/vendor/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/hyper-syntax.js"></script>

    <!--  Select2 Plugin Js -->
    <script src="../assets/vendor/select2/js/select2.min.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.min.js"></script>

</body>

</html>