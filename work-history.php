<?php
    include 'layouts/header.php';
    $id=$_GET['uuid'];
?>
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid mt-3">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Create Work History</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert-orange mt-2 mb-3">
                                <h4 class="orange-h4">Please record your previous history below.</h4>
                                <p class="p-0 m-0"><strong class="p-0 m-0">You MUST HAVE MINIMUM 5 YEARS HISTORY
                                    </strong> (or to school leaving age) BEFORE WE CAN CONSIDER EMPLOYMENT.</p>
                                <p class="p-0 m-0"><strong class="p-0 m-0">IF YOU HAVE ANY PERIODS OF UNEMPLOYMENT, SELF
                                        EMPLOYMENT, SICK, TRAVEL, GAP YEARS OR OTHER ACTIVITY</strong></p>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">
                                    <form action="work_action.php" method="POST">
                                        <div class="row">
                                            <input type="hidden" value="<?php echo $id?>" name="uuid">
                                            <h4>1 - Previous Work History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_name" class="form-label">Employer Name</label>
                                                    <input type="text" id="employer_name" class="form-control"
                                                        name="employer_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_email" class="form-label">Email</label>
                                                    <input type="text" id="employer_email" class="form-control"
                                                        name="employer_email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="job_nature" class="form-label"> Nature Of Job</label>
                                                    <input type="text" id="job_nature" class="form-control"
                                                        name="nature_of_job[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="end_date" class="form-label">End Date</label>
                                                    <input type="date" name="end_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="person_name" class="form-label"> Contact Person
                                                        Name</label>
                                                    <input type="text" id="person_name" class="form-control"
                                                        name="contact_person_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="contact_no" class="form-label">Contact Number</label>
                                                    <input type="text" name="contact_no[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="leaving_reason" class="form-label"> Reason Of
                                                        Leaving</label>
                                                    <textarea name="reason_of_leaving[]" class="form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>2 - Previous Work History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_name" class="form-label">Employer Name</label>
                                                    <input type="text" id="employer_name" class="form-control"
                                                        name="employer_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_email" class="form-label">Email</label>
                                                    <input type="text" id="employer_email" class="form-control"
                                                        name="employer_email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="job_nature" class="form-label"> Nature Of Job</label>
                                                    <input type="text" id="job_nature" class="form-control"
                                                        name="nature_of_job[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="end_date" class="form-label">End Date</label>
                                                    <input type="date" name="end_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="person_name" class="form-label"> Contact Person
                                                        Name</label>
                                                    <input type="text" id="person_name" class="form-control"
                                                        name="contact_person_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="contact_no" class="form-label">Contact Number</label>
                                                    <input type="text" name="contact_no[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="leaving_reason" class="form-label"> Reason Of
                                                        Leaving</label>
                                                    <textarea name="reason_of_leaving[]" class="form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>3 - Previous Work History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_name" class="form-label">Employer Name</label>
                                                    <input type="text" id="employer_name" class="form-control"
                                                        name="employer_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_email" class="form-label">Email</label>
                                                    <input type="text" id="employer_email" class="form-control"
                                                        name="employer_email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="job_nature" class="form-label"> Nature Of Job</label>
                                                    <input type="text" id="job_nature" class="form-control"
                                                        name="nature_of_job[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="end_date" class="form-label">End Date</label>
                                                    <input type="date" name="end_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="person_name" class="form-label"> Contact Person
                                                        Name</label>
                                                    <input type="text" id="person_name" class="form-control"
                                                        name="contact_person_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="contact_no" class="form-label">Contact Number</label>
                                                    <input type="text" name="contact_no[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="leaving_reason" class="form-label"> Reason Of
                                                        Leaving</label>
                                                    <textarea name="reason_of_leaving[]" class="form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>4 - Previous Work History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_name" class="form-label">Employer Name</label>
                                                    <input type="text" id="employer_name" class="form-control"
                                                        name="employer_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_email" class="form-label">Email</label>
                                                    <input type="text" id="employer_email" class="form-control"
                                                        name="employer_email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="job_nature" class="form-label"> Nature Of Job</label>
                                                    <input type="text" id="job_nature" class="form-control"
                                                        name="nature_of_job[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="end_date" class="form-label">End Date</label>
                                                    <input type="date" name="end_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="person_name" class="form-label"> Contact Person
                                                        Name</label>
                                                    <input type="text" id="person_name" class="form-control"
                                                        name="contact_person_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="contact_no" class="form-label">Contact Number</label>
                                                    <input type="text" name="contact_no[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="leaving_reason" class="form-label"> Reason Of
                                                        Leaving</label>
                                                    <textarea name="reason_of_leaving[]" class="form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>5 - Previous Work History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_name" class="form-label">Employer Name</label>
                                                    <input type="text" id="employer_name" class="form-control"
                                                        name="employer_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_email" class="form-label">Email</label>
                                                    <input type="text" id="employer_email" class="form-control"
                                                        name="employer_email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="job_nature" class="form-label"> Nature Of Job</label>
                                                    <input type="text" id="job_nature" class="form-control"
                                                        name="nature_of_job[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="end_date" class="form-label">End Date</label>
                                                    <input type="date" name="end_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="person_name" class="form-label"> Contact Person
                                                        Name</label>
                                                    <input type="text" id="person_name" class="form-control"
                                                        name="contact_person_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="contact_no" class="form-label">Contact Number</label>
                                                    <input type="text" name="contact_no[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="leaving_reason" class="form-label"> Reason Of
                                                        Leaving</label>
                                                    <textarea name="reason_of_leaving[]" class="form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>6 - Previous Work History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_name" class="form-label">Employer Name</label>
                                                    <input type="text" id="employer_name" class="form-control"
                                                        name="employer_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_email" class="form-label">Email</label>
                                                    <input type="text" id="employer_email" class="form-control"
                                                        name="employer_email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="job_nature" class="form-label"> Nature Of Job</label>
                                                    <input type="text" id="job_nature" class="form-control"
                                                        name="nature_of_job[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="end_date" class="form-label">End Date</label>
                                                    <input type="date" name="end_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="person_name" class="form-label"> Contact Person
                                                        Name</label>
                                                    <input type="text" id="person_name" class="form-control"
                                                        name="contact_person_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="contact_no" class="form-label">Contact Number</label>
                                                    <input type="text" name="contact_no[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="leaving_reason" class="form-label"> Reason Of
                                                        Leaving</label>
                                                    <textarea name="reason_of_leaving[]" class="form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>7 - Previous Work History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_name" class="form-label">Employer Name</label>
                                                    <input type="text" id="employer_name" class="form-control"
                                                        name="employer_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="employer_email" class="form-label">Email</label>
                                                    <input type="text" id="employer_email" class="form-control"
                                                        name="employer_email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="job_nature" class="form-label"> Nature Of Job</label>
                                                    <input type="text" id="job_nature" class="form-control"
                                                        name="nature_of_job[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="end_date" class="form-label">End Date</label>
                                                    <input type="date" name="end_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="person_name" class="form-label"> Contact Person
                                                        Name</label>
                                                    <input type="text" id="person_name" class="form-control"
                                                        name="contact_person_name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="contact_no" class="form-label">Contact Number</label>
                                                    <input type="text" name="contact_no[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="leaving_reason" class="form-label"> Reason Of
                                                        Leaving</label>
                                                    <textarea name="reason_of_leaving[]" class="form-control" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert-orange">
                                            <h4 class="orange-h4">APPLICANT SCREENING</h4>
                                            <p>All applications will be screened for the previous 5 years. Any failure
                                                to provide relevant and accurate information or if supplied information
                                                is unsatisfactory we may have no alternative but to reject your
                                                application and/or withdraw any offer of employment. This is in
                                                accordance with BS 7858:2012</p>
                                            <p><strong>YOU MUST THEREFORE SUPPLY ALL THE INFORMATION REQUIRED</strong>
                                            </p>
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