<?php
    include 'layouts/header.php';
?>
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">PRIVATE AND CONFIDENTIAL: Application For Employment</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="header-title">Personal Information</h4>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">
                                    <form action="action.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label"><span
                                                            class="text-danger">*</span> First Name</label>
                                                    <input type="text" id="first_name" class="form-control"
                                                        name="first_name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="middle_name" class="form-label">Middle Name</label>
                                                    <input type="text" id="middle_name" class="form-control"
                                                        name="middle_name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="surname" class="form-label"><span
                                                            class="text-danger">*</span> Surname</label>
                                                    <input type="text" id="surname" class="form-control" name="surname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" id="title" class="form-control" name="title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <textarea name="address" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="address_proof" class="form-label">Proof of
                                                        Address</label>
                                                    <input type="file" name="address_proof" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="address_proof_two" class="form-label">Proof of Address
                                                        (2nd)</label>
                                                    <input type="file" name="address_proof_two" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="post_code" class="form-label"> Postcode</label>
                                                    <input type="text" id="post_code" class="form-control"
                                                        name="post_code">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="insurance_no" class="form-label">National Insurance
                                                        No</label>
                                                    <input type="text" id="insurance_no" class="form-control"
                                                        name="insurance_no">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label"><span
                                                            class="text-danger">*</span> Telephone</label>
                                                    <input type="text" id="phone" class="form-control"
                                                        name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label"><span
                                                            class="text-danger">*</span> Email</label>
                                                    <input type="email" id="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="position" class="form-label">Position</label>
                                                    <select name="position" class="form-control">
                                                        <option value=""></option>
                                                        <option value="Security Officer">Security Officer</option>
                                                        <option value="Door Supervisor">Door Supervisor</option>
                                                        <option value="CCTV Operator">CCTV Operator</option>
                                                        <option value="Steward">Steward</option>
                                                        <option value="Contracts Manager">Contracts Manager</option>
                                                        <option value="Supervisor">Supervisor</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="other_position" class="form-label">Other
                                                        Position</label>
                                                    <input type="text" id="other_position" class="form-control"
                                                        name="other_position" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="dob" class="form-label"><span
                                                            class="text-danger">*</span> Date of Birth</label>
                                                    <input type="date" id="dob" class="form-control" name="dob">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label">Gender</label>
                                                    <select name="gender" class="form-control">
                                                        <option value=""></option>
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="picture" class="form-label">Picture</label>
                                                    <input type="file" id="picture" class="form-control" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="">Nationality</label>
                                                    <select class="form-control select2" data-toggle="select2" name="nationality">
                                                        <option value="">Select</option>
                                                        <optgroup>
                                                            <option value="">Select a country</option>
                                                            <option value="afghan">Afghan</option>
                                                            <option value="argentine">Argentinian</option>
                                                            <option value="australian">Australian</option>
                                                            <option value="brazilian">Brazilian</option>
                                                            <option value="canadian">Canadian</option>
                                                            <option value="egyptian">Egyptian</option>
                                                            <option value="german">German</option>
                                                            <option value="indian">Indian</option>
                                                            <option value="pakistani">Pakistani</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="">Passport Number</label>
                                                    <input type="text" name="passport_no" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="">Passport Expiry Date</label>
                                                    <input type="date" name="passport_expiry_date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="">Proof of National Insurance</label>
                                                    <input type="file" name="insurance_proof" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="mb-3">
                                                    <label for="">Proof of Passport</label>
                                                    <input type="file" name="passport_proof" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#licence_detail"
                                                        aria-expanded="true" aria-controls="licence_detail">
                                                        SIA LICENCE DETAILS
                                                    </button>
                                                </h2>
                                                <div id="licence_detail" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="">Do you possess a valid frontline SIA
                                                                        Licence</label>
                                                                    <select name="valid_frontline_licence" id=""
                                                                        class="form-control">
                                                                        <option value="No">No</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="Applied">Applied</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-4 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">SIA Licence Type</label>
                                                                    <select name="licence_type" id=""
                                                                        class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="Security">Security</option>
                                                                        <option value="Door Supervisor">Door Supervisor
                                                                        </option>
                                                                        <option value="CCTV">CCTV</option>
                                                                        <option value="CViT">CViT</option>
                                                                        <option value="CP">CP</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">SIA Licence Number</label>
                                                                    <input type="text" name="licence_no"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">SIA Expiry Date</label>
                                                                    <input type="date" name="licence_expiry_date"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Proof of SIA Licence</label>
                                                                    <input type="file" name="licence_proof"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-4 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">SIA Licence Type 2</label>
                                                                    <select name="licence_type_two" id=""
                                                                        class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="Security">Security</option>
                                                                        <option value="Door Supervisor">Door Supervisor
                                                                        </option>
                                                                        <option value="CCTV">CCTV</option>
                                                                        <option value="CViT">CViT</option>
                                                                        <option value="CP">CP</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">SIA Licence Number 2</label>
                                                                    <input type="text" name="licence_no_two"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">SIA Expiry Date 2</label>
                                                                    <input type="date" name="licence_expiry_date_two"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Proof of SIA Licence 2</label>
                                                                    <input type="file" name="licence_proof_two"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#other_information"
                                                        aria-expanded="false" aria-controls="other_information">
                                                        Other Information
                                                    </button>
                                                </h2>
                                                <div id="other_information" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="">Please list all other employment you
                                                                        would continue to do if you were successful in
                                                                        obtaining employment</label>
                                                                    <input type="text" name="other_info"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#leisure"
                                                        aria-expanded="false" aria-controls="leisure">
                                                        Leisure
                                                    </button>
                                                </h2>
                                                <div id="leisure" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="">Please note here your leisure
                                                                        interests and hobbies and to what level you
                                                                        pursue them</label>
                                                                    <input type="text" name="leisure"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#criminal_record"
                                                        aria-expanded="false" aria-controls="criminal_record">
                                                        Criminal Record
                                                    </button>
                                                </h2>
                                                <div id="criminal_record" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="">State any Criminal convictions
                                                                        (subject to Rehabilitation of Offenders Act
                                                                        1974) If none please state NONE</label>
                                                                    <input type="text" name="criminal_record"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#uniform_information"
                                                        aria-expanded="false" aria-controls="uniform_information">
                                                        Uniform Information
                                                    </button>
                                                </h2>
                                                <div id="uniform_information" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#uniform_information">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12 col-md-3 col-lg-2">
                                                                <div class="mb-3">
                                                                    <label for="">Chest Size</label>
                                                                    <input type="text" name="chest_size"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-3 col-lg-2">
                                                                <div class="mb-3">
                                                                    <label for="">Waist Size</label>
                                                                    <input type="text" name="waist_size"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-3 col-lg-2">
                                                                <div class="mb-3">
                                                                    <label for="">Inside Leg Size</label>
                                                                    <input type="text" name="inside_leg_size"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-3 col-lg-2">
                                                                <div class="mb-3">
                                                                    <label for="">Collar Size</label>
                                                                    <input type="text" name="collar_size"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-3 col-lg-2">
                                                                <div class="mb-3">
                                                                    <label for="">Shoes Size</label>
                                                                    <input type="text" name="shoes_size"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#cantWork"
                                                        aria-expanded="false" aria-controls="cantWork">
                                                        Please give details of any days/hours/shifts you cannot work
                                                    </button>
                                                </h2>
                                                <div id="cantWork" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <p>To allow us to order you a uniform please supply the
                                                                following information</p>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="">Days Not To Work</label>
                                                                    <input type="text" name="days_not_work"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="">Hours Not To Work</label>
                                                                    <input type="text" name="hours_not_work"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="">Shift Not To Work</label>
                                                                    <input type="text" name="shift_not_work"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#bankDetail"
                                                        aria-expanded="false" aria-controls="bankDetail">
                                                        Bank Account Details (This information can be provided upon
                                                        commencement of employment if preferred)
                                                    </button>
                                                </h2>
                                                <div id="bankDetail" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Account Holder Name</label>
                                                                    <input type="text" name="account_holder"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for=""> Bank Sort Code</label>
                                                                    <input type="text" name="bank_code"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Bank Account No</label>
                                                                    <input type="text" name="account_no"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Bank Name</label>
                                                                    <input type="text" name="bank_name"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Bank Branch Address</label>
                                                                    <input type="text" name="bank_address"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#emergencyDetil"
                                                        aria-expanded="false" aria-controls="emergencyDetil">
                                                        Name and Address of Contact in cases of Emergency
                                                    </button>
                                                </h2>
                                                <div id="emergencyDetil" class="accordion-collapse collapse"
                                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Name</label>
                                                                    <input type="text" name="emergency_person"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for=""> Relationship</label>
                                                                    <input type="text" name="relationship"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Address</label>
                                                                    <input type="text" name="emergency_address"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="mb-3">
                                                                    <label for="">Telephone</label>
                                                                    <input type="text" name="emergency_no"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#transport"
                                                        aria-expanded="false" aria-controls="transport">
                                                        Do you have access to your own transport
                                                    </button>
                                                </h2>
                                                <div id="transport" class="accordion-collapse collapse"
                                                    aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="">Has Vehicle</label>
                                                                    <select name="has_vehicle" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for=""> Vehicle Model</label>
                                                                    <input type="text" name="vehicle_model"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="">Do you have Driving Licence</label>
                                                                    <select name="driving_licence"
                                                                        class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for=""> Driving Licence Number</label>
                                                                    <input type="text" name="driving_licence_no"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for=""> Driving Licence Expiry Date</label>
                                                                    <input type="date"
                                                                        name="driving_licence_expiry"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-4">
                                                                <div class="mb-3">
                                                                    <label for="">Driving Licence issuing
                                                                        Authority</label>
                                                                    <input type="text" name="driving_licence_authority"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="">Motoring Offences</label>
                                                                    <select name="motoring_offences"
                                                                        class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="">Motoring Offences Details</label>
                                                                    <input type="text" name="motoring_offences_detail"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="">Proof of Driving License</label>
                                                                    <input type="text" name="driving_licence_proof"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h2 class="accordion-header" id="headingTen">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#joining_detail"
                                                        aria-expanded="false" aria-controls="joining_detail">
                                                        Joining Details
                                                    </button>
                                                </h2>
                                                <div id="joining_detail" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="">Earliest Start Date</label>
                                                                    <input type="text" name="start_date"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div>
                                                <button class="btn btn-primary">Save and Move to Next Step</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end row-->
                                </div>
                                <!-- end preview-->
                            </div>
                            <!-- end tab-content-->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container -->

    </div>
    <!-- content -->


</div>

<!-- ============================================================== -->
<!-- End Page content -->
<?php
    include 'layouts/footer.php';
?>