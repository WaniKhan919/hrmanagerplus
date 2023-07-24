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
                            <h4 class="header-title">References</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert-orange mt-2 mb-3">
                                <h4 class="orange-h4">Note</h4>
                                <p class="p-0 m-0">Before we can proceed with your application we require 2 character
                                    references from persons <strong class="p-0 m-0"> not related to you, not living at
                                        your address, not previous employers and known to you for at least the last 2
                                        years: </strong> Supply all the details below as we must write to them to
                                    progress your application: No address = Failed Application</p>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">
                                    <form action="references_action.php" method="POST">
                                        <div class="row">
                                            <h4>1 - Reference</h4>
                                            <hr>
                                            <div class="col-12 col-md-3">
                                            <input type="hidden" value="<?php echo $id?>" name="uuid">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" id="name" class="form-control" name="name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" id="email" class="form-control" name="email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="post_code" class="form-label"> Post Code</label>
                                                    <input type="text" id="post_code" class="form-control"
                                                        name="post_code[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="duration" class="form-label">How long you have known
                                                        this person</label>
                                                    <input type="date" name="duration[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="relationship" class="form-label"> Relationship</label>
                                                    <input type="text" id="relationship" class="form-control"
                                                        name="relationship[]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>2 - Reference</h4>
                                            <hr>
                                            <div class="col-12 col-md-3">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" id="name" class="form-control" name="name[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" id="email" class="form-control" name="email[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-3">
                                                    <label for="employer_address" class="form-label">Employer
                                                        Address</label>
                                                    <input type="text" id="employer_address" class="form-control"
                                                        name="employer_address[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="post_code" class="form-label"> Post Code</label>
                                                    <input type="text" id="post_code" class="form-control"
                                                        name="post_code[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input type="date" name="start_date[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="duration" class="form-label">How long you have known
                                                        this person</label>
                                                    <input type="date" name="duration[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <div class="mb-3">
                                                    <label for="relationship" class="form-label"> Relationship</label>
                                                    <input type="text" id="relationship" class="form-control"
                                                        name="relationship[]">
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
<?php
    include 'layouts/footer.php';
?>