<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MPD FM Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Select2 css -->
    <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="/" class="logo-light">
                                <span class="logo-lg">
                                    <img src="https://hrmanagerplus.com/img/hr_manager_plus.png" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="https://hrmanagerplus.com/img/hr_manager_plus.png" alt="small logo">
                                </span>
                            </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="bi bi-border-width"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown d-none d-lg-block">
                        <p class="mt-2">Apply for Job</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="/" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="https://hrmanagerplus.com/img/hr_manager_plus.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="https://hrmanagerplus.com/img/hr_manager_plus.png" alt="small logo">
                    </span>
                </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.html">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name mt-2">Dominic Keller</span>
                        </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Application Steps</li>

                    <li class="side-nav-item">
                        <a href="javascript:void(0)" class="side-nav-link">
                            <span> - Personal Information </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="javascript:void(0)" class="side-nav-link">
                            <span> - Personal Information </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="javascript:void(0)" class="side-nav-link">
                            <span>  - Education / Trainings </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="javascript:void(0)" class="side-nav-link">
                            <span> - Financial History</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="javascript:void(0)" class="side-nav-link">
                            <span>  - Previous History</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="javascript:void(0)" class="side-nav-link">
                            <span>  - References</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="javascript:void(0)" class="side-nav-link">
                            <span> - Data Protection Policy</span>
                        </a>
                    </li>

                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
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
                                            <button class="btn btn-primary">Add More</button>
                                        </div>
                                    </div>
                                    <h4 class="h4">Education Details</h4>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="input-types-preview">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-12 col-md-8">
                                                        <div class="mb-3">
                                                            <label for="institute" class="form-label">Institute</label>
                                                            <input type="text" id="institute" class="form-control" name="institute">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" id="email" class="form-control" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="qualification" class="form-label"> Qualification</label>
                                                            <input type="text" id="qualification" class="form-control" name="qualification">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="type" class="form-label">Type</label>
                                                            <select name="type" id="" class="form-control">
                                                                <option value=""></option>
                                                                <option value="Degree">Degree</option>
                                                                <option value="Training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="starting_from" class="form-label"> From</label>
                                                            <input type="date" id="starting_from" class="form-control" name="starting_from">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="end_to" class="form-label"> To</label>
                                                            <input type="date" id="end_to" class="form-control" name="end_to">
                                                        </div>
                                                    </div>
                                                </div><div class="row mb-3">
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
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Code Highlight js -->
    <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/vendor/clipboard/clipboard.min.js"></script>
    <script src="assets/js/hyper-syntax.js"></script>

    <!--  Select2 Plugin Js -->
    <script src="assets/vendor/select2/js/select2.min.js"></script>
    
    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>