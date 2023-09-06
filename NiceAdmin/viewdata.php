<?php
require_once 'config.php';

if ($conn) {
  echo "Connection is established.";
} else {
  echo "Connection is not established.";
  exit(); // Stop script execution if connection is not established
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FDA Clinical Trial Registry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">FDA Clinical Trial Registry</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"></span>
          </a><!-- End Notification Icon -->

  </header><!-- End Header -->

 

  <main id="main" class="main main-2">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tables-data.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

        <?php

          if(isset($_GET['viewdata'])){

              $edit_id = $_GET['viewdata'];

              $get_p = "SELECT fdadats.No,fdadats.Application,fdadats.Title,fdadats.Name,fdadats.PI,fdadats.ClinicalTrial,fdadats.TrialPhase,
              fdadats.TypeOfproduct,fdadats.Notargetedparticipants,fdadats.InvestigationalProduct,fdadats.Trialduration,fdadats.AWRDate,fdadats.CertRefNo,fdadats.CurRegStat,fdadats.DoCE,fdadats.CITS
              FROM fdadats WHERE fdadats.No= $edit_id;";


              $run_edit = mysqli_query($conn,$get_p);

              $row_edit = mysqli_fetch_array($run_edit);
              $no = $row_edit['No'];
              $Title = $row_edit['Title'];
              $PI = $row_edit['PI'];
              $TrialPhase = $row_edit['TrialPhase'];
              $Notargetedparticipants = $row_edit['Notargetedparticipants'];
              $Trialduration = $row_edit['Trialduration'];
              $ClinicalTrial = $row_edit['ClinicalTrial'];
              $InvestigationalProduct = $row_edit['InvestigationalProduct'];
              $appno = $row_edit['Application'];
              $typeofprod = $row_edit['TypeOfproduct'];
              $name = $row_edit['Name'];
              $CertRefNo= $row_edit['CertRefNo'];
              $AWRDate= $row_edit['AWRDate'];
              $DoCE= $row_edit['DoCE'];
              $CITS= $row_edit['CITS'];
              $CurRegStat = $row_edit['CurRegStat'];

          }

          ?>

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <div class="social-links mt-2">

                <h5 class="card-title">Clinical Trial Profile: #<?php echo $no; ?></h5>

                <h5 class="card-title">Application Reference Number: <?php echo $appno; ?></h5>

                <h5 class="card-title">Type of Product: <?php echo $typeofprod; ?></h5>

                <h5 class="card-title">Name of Sponsor: <?php echo $name; ?></h5>

                <h5 class="card-title">Certificate Reference Number: #<?php echo $CertRefNo; ?></h5>

                <h5 class="card-title">FDA Approval/Withdrawal/Rejection Date: <?php echo $AWRDate; ?></h5>

                <h5 class="card-title">Date of Certificate Expiration: <?php echo  $DoCE; ?></h5>

                <h5 class="card-title">Current Implementation Status: <?php 
                
                if($CITS == "completed") {
                    echo "<span class='badge border-success border-1 text-success'>$CITS</span>";
                  } elseif($CITS == "Withdrawn") {
                    echo "<span class='badge border-warning border-1 text-danger'>$CITS</span>";
                  }
                  elseif($CITS == "Ongoing Implementation") {
                    echo "<span class='badge border-warning border-1 text-warning'>$CITS</span>";
                  }
                  elseif($CITS == "Under recruitment"){
                    echo "<span class='badge border-info border-1 text-info'>$CITS</span>";
                  }
                  elseif($CITS == "Site Initiation"){
                    echo "<span class='badge border-info border-1 text-info'>$CITS</span>";
                  }

                  elseif($CITS == "stopped"){
                    echo "<span class='badge border-light border-1 text-black-50'>$CITS</span>";
                  }
                  elseif ($CITS == "Suspended by Sponsor") {
                    echo "<span class='badge border-warning border-1 text-danger'>$CITS</span>";
                  }

                                ?></h5>


                  <h5 class="card-title">Current Regulatory Status: <?php 
                  if ($CurRegStat == "Approved") {
                    echo "<span class='badge border-success border-1 text-success'>$CurRegStat</span>";
                  } else {
                    echo "<span class='badge border-success border-1 text-danger'>$CurRegStat</span>";
                  }

                  ?></h5>
          
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"><span class="card-title">Title of the clinical trial product:</span> <?php echo  $Title; ?> </button>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Principal Investigator</h5>
                  <p class="small fst-normal"><?php echo  $PI; ?></p>

                </div>

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Clinical Trial Site</h5>
                  <p class="small fst-normal"><?php echo  $ClinicalTrial; ?></p>

                </div>

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Trial Phase</h5>
                  <p class="small fst-normal"><?php echo  $TrialPhase; ?></p>

                </div>

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Investigational Product (s)</h5>
                  <p class="small fst-normal"><?php echo  $InvestigationalProduct; ?></p>

                </div>


                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title"># Targeted trial Participants</h5>
                  <p class="small fst-normal"><?php echo  $Notargetedparticipants; ?></p>

                </div>


                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Trial Duration</h5>
                  <p class="small fst-normal"><?php echo  $Trialduration; ?></p>

                </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Africa Quantitative Sciences</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://africaqs.com/">Africa Quantitative Sciences</a>
    </div> -->
  <!-- </footer> --> 
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>