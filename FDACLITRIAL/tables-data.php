<?php
require_once 'config.php';
$db = new DB_Connect();
$conn = $db->connect();

if ($conn) {
  echo "Connection is established.";
} else {
  echo "Connection is not established.";
  exit(); // Stop script execution if connection is not established
}

?>

<?php

                if(isset($_GET['tables-data'])){

                    include("tables-data.php");

                }

                if(isset($_GET['viewdata'])){

                    include("viewdata.php");

                }
                if(isset($_GET['blank'])){

                  include("blank.php");

              }
                if(isset($_GET['users-profile'])){

                  include("users-profile.php");

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
  <a href="tables-data.php" class="logo d-flex align-items-center">
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <span class="d-none d-lg-block">FDA CLINICAL TRIAL REGISTRY</span>
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

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->




  <main id="main" class="main">

        <div class="pagetitle">
          <h1> FDA Clinical Trial Data Tables</h1>
        </div><!-- End Page Title -->

        <section class="section">
          <div class="row">
            <div class="col-lg-12">

              <div class="card" >
                <div class="card-body">
                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Application Reference Number</th>
                        <th scope="col">Title of the clinical trial Protocol</th>
                        <th scope="col">Trial Phase</th>
                        <th scope="col">Current regulatory Status</th>
                        <th scope="col">Current Implementation Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>


                    <?php

    $i = 0;

    $get_pro = "select * from fdadats";

    $run_pro = mysqli_query($conn,$get_pro);

    while($row_pro=mysqli_fetch_array($run_pro)){

      $no = $row_pro['No'];
      $Title = $row_pro['Title'];
      $PI = $row_pro['PI'];
      $TrialPhase = $row_pro['TrialPhase'];
      $Notargetedparticipants = $row_pro['Notargetedparticipants'];
      $Trialduration = $row_pro['Trialduration'];
      $ClinicalTrial = $row_pro['ClinicalTrial'];
      $InvestigationalProduct = $row_pro['InvestigationalProduct'];
      $appno = $row_pro['Application'];
      $typeofprod = $row_pro['TypeOfproduct'];
      $name = $row_pro['Name'];
      $CertRefNo= $row_pro['CertRefNo'];
      $AWRDate= $row_pro['AWRDate'];
      $DoCE= $row_pro['DoCE'];
      $CITS= $row_pro['CITS'];
      $CurRegStat = $row_pro['CurRegStat'];

    $i++;

    ?>

    <tbody>
        <?php 
        // Assuming a loop here, for example: while($row = $someQueryResult->fetch_assoc()) {
        // Initialize your variables like $no, $Application, $Title, etc. here
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $appno ; ?></td>
            <td><?php echo $Title; ?></td>
            <td><?php echo $TrialPhase; ?></td>
            <td>
                <?php 
                if ($CurRegStat == "Approved") {
                    echo "<span class='badge bg-success'>$CurRegStat</span>";
                } else {
                    echo "<span class='badge bg-danger'>$CurRegStat</span>";
                }
                ?>
            </td>

            <td>
                  <?php 
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
      ?>
                        </td>
            <!-- Uncomment the below line if you want to add a 'View More' button -->
            <!-- <td>
            <button type="button" class="btn btn-outline-primary">More</button>
            </td> -->

            <td>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable<?php echo $no; ?>" data-id="<?php echo $no; ?>">
  More

</button>
<div class="modal fade" id="modalDialogScrollable<?php echo $no; ?>" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable" >
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Clinical Trial Profile</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5 class="modal-title">Clinical Trial Site</h5>
                    <p class="small fst-normal"><?php echo  $ClinicalTrial; ?></p>
                    <h5 class="card-title">Application Reference Number</h5>
                    <p class="small fst-normal"><?php echo  $appno; ?></p>
                    <h5 class="card-title">Principal Investigator</h5>
                    <p class="small fst-normal"><?php echo  $PI; ?></p>
                    <h5 class="card-title">Type of Product</h5>
                    <p class="small fst-normal"><?php echo  $typeofprod; ?></p>
                    <h5 class="card-title">Name of Sponsor</h5>
                    <p class="small fst-normal"><?php echo  $name; ?></p>
                    <h5 class="card-title">Certificate Reference Number</h5>
                    <p class="small fst-normal"><?php echo  $CertRefNo; ?></p>
                    <h5 class="card-title">FDA/Approval/Withdrawal/Rejection Date</h5>
                    <p class="small fst-normal"><?php echo  $AWRDate; ?></p>
                    <h5 class="card-title">Investigational Product (s)</h5>
                    <p class="small fst-normal"><?php echo  $InvestigationalProduct; ?></p>
                    <h5 class="card-title"># Targeted trial Participants</h5>
                    <p class="small fst-normal"><?php echo  $Notargetedparticipants; ?></p>
                    <h5 class="card-title">Date of Certificate Expiration</h5>
                    <p class="small fst-normal"><?php echo  $DoCE; ?></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

    </a>

    </td>


        </tr>
        <?php }?>
    </tbody>

              


              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Africa Quantitative Sciences</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://africaqs.com/"> Africa Quantitative Sciences</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <!-- <script src="assets/vendor/tinymce/tinymce.min.js"></script> -->
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
