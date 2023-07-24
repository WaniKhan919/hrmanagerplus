<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>MPD FM Application</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.icon">

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
    <?php
    include 'sidebar.php';
    ?>
    <!-- ========== Left Sidebar End ========== -->

    <!-- ============================================================== -->
