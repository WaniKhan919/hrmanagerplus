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
                            <h4 class="header-title">Add Qualifications (Degrees & Trainings)</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert-orange mt-2 mb-3">
                                <h4 class="orange-h4">Notice</h4>
                                <div class="d-flex justify-content-between">
                                    <p>Give your educational detail from 11 years old and qualifications obtained</p>
                                    <button class="btn btn-primary" id="addMoreButton">Add More</button>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">
                                    <form action="education_action.php" method="POST">
                                        <input type="hidden" value="<?php echo $id?>" name="uuid">
                                        <div class="row">
                                            <h4 class="h4">Education Details</h4>
                                            <hr>
                                            <div class="col-12 col-md-8">
                                                <div class="mb-3">
                                                    <label for="institute" class="form-label">Institute</label>
                                                    <input type="text" id="institute" class="form-control"
                                                        name="institute[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" id="email" class="form-control" name="email[]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="qualification" class="form-label"> Qualification</label>
                                                    <input type="text" id="qualification" class="form-control"
                                                        name="qualification[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="type" class="form-label">Type</label>
                                                    <select name="type[]" id="" class="form-control">
                                                        <option value=""></option>
                                                        <option value="Degree">Degree</option>
                                                        <option value="Training">Training</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="starting_from" class="form-label"> From</label>
                                                    <input type="date" id="starting_from" class="form-control"
                                                        name="starting_from[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="end_to" class="form-label"> To</label>
                                                    <input type="date" id="end_to[]" class="form-control" name="end_to">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="add_more_div">

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
<script>
  document.getElementById('addMoreButton').addEventListener('click', function() {
    var educationDetailsContainer = document.getElementById('add_more_div');

    var newEducationDiv = document.createElement('div');
    newEducationDiv.className = 'row';

    // Append the HTML content for education details to the newEducationDiv
    newEducationDiv.innerHTML = `
    <div class="row">
        <h4 class="h4">Education Details</h4>
        <hr>
        <div class="col-12 col-md-8">
            <div class="mb-3">
                <label for="institute" class="form-label">Institute</label>
                <input type="text" id="institute" class="form-control"
                    name="institute[]">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email[]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="mb-3">
                <label for="qualification" class="form-label"> Qualification</label>
                <input type="text" id="qualification" class="form-control"
                    name="qualification[]">
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type[]" id="" class="form-control">
                    <option value=""></option>
                    <option value="Degree">Degree</option>
                    <option value="Training">Training</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="mb-3">
                <label for="starting_from" class="form-label"> From</label>
                <input type="date" id="starting_from" class="form-control"
                    name="starting_from[]">
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="mb-3">
                <label for="end_to" class="form-label"> To</label>
                <input type="date" id="end_to[]" class="form-control" name="end_to">
            </div>
        </div>
    </div>
    `;

    educationDetailsContainer.appendChild(newEducationDiv);
  });
</script>

<!-- ============================================================== -->
<?php
    include 'layouts/footer.php';
?>