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
                                    <h4 class="header-title">References</h4>
                                </div>
                                <div class="card-body">
                                    <div class="alert-orange mt-2 mb-3">
                                        <h4 class="orange-h4">Note</h4>
                                        <p class="p-0 m-0">Before we can proceed with your application we require 2 character references from persons <strong class="p-0 m-0"> not related to you, not living at your address, not previous employers and known to you for at least the last 2 years: </strong> Supply all the details below as we must write to them to progress your application: No address = Failed Application</p>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="input-types-preview">
                                            <form action="">
                                                <div class="row">                
                                                    <h4>1 - Reference</h4>
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
                                                            <label for="employer_address" class="form-label">Employer Address</label>
                                                            <input type="text" id="employer_address" class="form-control" name="employer_address[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="post_code" class="form-label"> Post Code</label>
                                                            <input type="text" id="post_code" class="form-control" name="post_code[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="telephone" class="form-label">Start Date</label>
                                                            <input type="date" name="telephone[]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="duration" class="form-label">How long you have known this person</label>
                                                            <input type="date" name="duration[]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="relationship" class="form-label"> Relationship</label>
                                                            <input type="text" id="relationship" class="form-control" name="relationship[]">
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
                                                            <label for="employer_address" class="form-label">Employer Address</label>
                                                            <input type="text" id="employer_address" class="form-control" name="employer_address[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="post_code" class="form-label"> Post Code</label>
                                                            <input type="text" id="post_code" class="form-control" name="post_code[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="telephone" class="form-label">Start Date</label>
                                                            <input type="date" name="telephone[]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="duration" class="form-label">How long you have known this person</label>
                                                            <input type="date" name="duration[]" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="relationship" class="form-label"> Relationship</label>
                                                            <input type="text" id="relationship" class="form-control" name="relationship[]">
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