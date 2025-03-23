<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nairobi | Responsive Bootstrap 5 Admin Dashboard Template</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />
  <link rel="stylesheet" href="../assets/css/libs.min.css">
  <link rel="stylesheet" href="../assets/css/nairobi.css?v=1.0.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <style>
    .main-img .container {
      position: absolute;
      top: 45%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      color: #fff;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
    }
  </style>
</head>

<body style="background-color: #EDECE8;" class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
  <!-- loader Start -->
  <div id="loading">
    <div class="loader simple-loader">
      <div class="loader-body"></div>
    </div>
  </div>
  <!-- loader END -->
  <div>
    <div class="wrapper">
      <span class="uisheet screen-darken"></span>
      <div class="hash-tag-btn">
        <!-- <span>#BuildWithHopeUI</span> -->
      </div>
      <?PHP include "../include/admin_header.php"; ?>

      <?PHP include "../include/admin_sidebar.php"; ?>

      <div class="bd-cheatsheet container-fluid bg-trasprent mt-n5">
        <section id="components">

          <article id="input-group">

            <div class="card iq-document-card" style="background-color:#DED9D6;">
              <h5 style="color: #000000;">Add Stages</h5>

              <form action="add_stages_sql.php" method="POST" enctype="multipart/form-data" class="m-0 p-0">

                <div class="tab-content">
                  <div class="tab-pane bd-heading-1 fade show active" id="content-inputgroup-prv" role="tabpanel" aria-labelledby="typo-output">
                    <div class="bd-example">
                      <div class="row">
                        <div class="col-12">
                          <div class="input-group mb-3 mt-4" style="color:#000000;">
                            <input type="text" style="background-color: #ffffff;" class="form-control" id="stages" name="stages" placeholder="stages" required autocomplete="off">
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3 d-flex justify-content-center">
                        <button type="submit" name="submit" id="submit" class="btn btn-white   text-center style2-input text-dark   bg-white border-0 p-2">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane bd-heading-1 fade show" id="content-inputgroup-code" role="tabpanel" aria-labelledby="typo-output">
                    <div class="section-block">

                    </div>
                  </div>
                </div>
            </div>
            </form>
      </div>
      </article>
    </div>
  </div>
  </div>


  <!-- Backend Bundle JavaScript -->
  <script src="../assets/js/libs.min.js"></script>
  <!-- widgetchart JavaScript -->
  <script src="../assets/js/charts/widgetcharts.js"></script>
  <!-- dashboard JavaScript -->
  <script src="../assets/js/charts/dashboard.js"></script>

  <!-- fslightbox JavaScript -->
  <script src="../assets/js/fslightbox.js"></script>
  <!-- app JavaScript -->
  <script src="../assets/js/app.js"></script>
  <!-- apexchart JavaScript -->
  <script src="../assets/js/charts/apexcharts.js"></script>
  <!-- countdown JavaScript -->
  <script src="../assets/js/countdown.js"></script>
  <script src="assets/js/prism.mini.js"></script>
</body>

</html>