<?php
include '../db.php';
$sql = "SELECT * FROM user_information";
$run = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Admin | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.icon">
  <link href="../assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
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
  <div class="wrapper">
    <!-- ========== Topbar Start ========== -->
    <div class="navbar-custom">
      <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-lg-2 gap-1">

          <!-- Topbar Brand Logo -->
          <div class="logo-topbar">
            <!-- Logo light -->
            <a href="dashboard.php" class="logo-light">
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
        </div>
      </div>
    </div>
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

      <!-- Brand Logo Light -->
      <a href="dashboard.php" class="logo logo-light">
        <span class="logo-lg">
          <img src="https://hrmanagerplus.com/img/hr_manager_plus.png" alt="logo">
        </span>
        <span class="logo-sm">
          <img src="https://hrmanagerplus.com/img/hr_manager_plus.png" alt="small logo">
        </span>
      </a>

      <!-- Brand Logo Dark -->
      <a href="dashboard.php" class="logo logo-dark">
        <span class="logo-lg">
          <img src="https://hrmanagerplus.com/img/hr_manager_plus.png" alt="dark logo">
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
        <!--- Sidemenu -->
        <ul class="side-nav">

        <li class="side-nav-item">
          <a href="javascript:void(0)" class="side-nav-link">
            <span> - Dashboard </span>
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
      <div class="content mt-3">

        <!-- Start Content-->
        <div class="container-fluid ">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="col-sm-5">
                      <h4 class="page-title">User Information</h4>
                    </div>
                    <!-- end col-->
                  </div>

                  <div class="table-responsive">
                    <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                      <thead class="table-light">
                        <tr>
                          <th class="all" style="width: 20px;">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="customCheck1">
                              <label class="form-check-label" for="customCheck1">&nbsp;</label>
                            </div>
                          </th>
                          <th class="all">First Name</th>
                          <th>Middle Name</th>
                          <th>Surname</th>
                          <th>Title</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th style="width: 85px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while($row = $run->fetch_assoc()){
                        ?>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="customCheck2">
                              <label class="form-check-label" for="customCheck2">&nbsp;</label>
                            </div>
                          </td>
                          <td>
                            <p class="m-0 d-inline-block align-middle font-16">
                              <a href="" class="text-body"><?php echo $row['first_name']  ?? 'N/A'?></a>
                            </p>
                          </td>
                          <td>
                            <?php echo $row['middle_name'] ?? 'N/A'?>
                          </td>
                          <td>
                            <?php echo $row['surname'] ?? 'N/A'?>
                          </td>
                          <td>
                            <?php echo $row['title'] ?? 'N/A'?>
                          </td>

                          <td>
                            <?php echo $row['address'] ?? 'N/A'?>
                          </td>
                          <td>
                            <?php echo $row['phone'] ?? 'N/A'?>
                          </td>

                          <td class="table-action">
                            <a href="preview.php?uuid=<?php echo $row['uu_id']?>" class="action-icon"> <i class="bi bi-eye"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
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

  <!-- Vendor js -->
  <script src="../assets/js/vendor.min.js"></script>
  <script src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
  <script src="../assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
  <script src="../assets/vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js"></script>
  <script src="../assets/js/pages/demo.products.js"></script>
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