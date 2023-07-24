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
                            <h4 class="header-title">Create Financial History</h4>
                        </div>
                        <div class="card-body">
                            <p class="h5">List any Bankruptcy, County Court Judgements etc in the last 6 years,</p>
                            <p class="h6">(In accordance with BS 7858:2012 a Credit Reference Check will be carried out.
                                Failure to disclose anything will result in a failed application)</p>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="input-types-preview">
                                    <form action="financial_action.php" method="POST" class="mt-3">
                                    <input type="hidden" value="<?php echo $id?>" name="uuid">
                                        <div class="row">
                                            <h4 class="h4">1 - Financial History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="date" class="form-label">Date</label>
                                                    <input type="date" id="date" class="form-control" name="date[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="mb-3">
                                                    <label for="court" class="form-label">Court</label>
                                                    <input type="text" id="court" class="form-control" name="court[]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="Details" class="form-label"> Details</label>
                                                    <textarea name="details[]" id="" cols="30" rows="10"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4 class="h4">2 - Financial History</h4>
                                            <hr>
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label for="date" class="form-label">Date</label>
                                                    <input type="date" id="date" class="form-control" name="date[]">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="mb-3">
                                                    <label for="court" class="form-label">Court</label>
                                                    <input type="text" id="court" class="form-control" name="court[]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="Details" class="form-label"> Details</label>
                                                    <textarea name="details[]" id="" cols="30" rows="10"
                                                        class="form-control"></textarea>
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