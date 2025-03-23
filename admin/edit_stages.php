
<?PHP
session_start();
  if (!(isset($_SESSION['admin']))){  
    header("location:../admin_login.php");
  } 
  ?>

<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Nairobi | Responsive Bootstrap 5 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/libs.min.css">
      <link rel="stylesheet" href="../assets/css/nairobi.css?v=1.0.0">  </head>
  <body  style="background-color: #EDECE8;" class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
      <div >  
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
                    <h5 style="color: #000000;">Update Stages</h5>
                       
                        <?PHP
                                 include "../include/database.php";
                                $id=$_GET['id'];
                                //echo $id;
                              
                                $query = "SELECT * from stages where id='".$id."'"; 
                            //  //echo $query;
                                $result = mysqli_query($db_found, $query) ;
                                $row= mysqli_fetch_assoc($result);
               
                                ?>
                                 <form  action="edit_stages_sql.php" method="POST" enctype="multipart/form-data" class="m-0 p-0 mt-5">
                            <input type="hidden" class="col  " value="<?php echo $row['id'];?>"  id="id" name="id">
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-inputgroup-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                <div class="row">
                                <div class="col-12">
                                <div class="input-group mb-3">
            
                                    <input style="background-color: #ffffff;" type="text" class="form-control" id="stage" name="stage" placeholder="Fullname" value ="<?PHP echo $row['stage']?>"  required autocomplete="off">
                                </div>
                                </div> 
                                </div>
                                
                             
                                <div class="input-group mb-3 d-flex justify-content-center">
                              
                                <button type="submit" name="submit" id="submit" class="btn btn-white   text-center style2-input text-dark   bg-white border-0 p-2">Update</button>
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
    <script src="../assets/js/countdown.js" ></script>   
         <script src="../assets/js/prism.mini.js"></script>
  </body>
</html>