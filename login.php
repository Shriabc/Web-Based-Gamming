<?PHP
session_start();
  if ((isset($_SESSION['user']))){  
    header("location:login_index.php");
  } 
  ?>

<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> Nairobi | Responsive Bootstrap 5 Admin Dashboard Template </title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico" />
      <link rel="stylesheet" href="assets/css/libs.min.css">
      <link rel="stylesheet" href="assets/css/nairobi.css?v=1.0.0">  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      
      <script>    
    function showAlert(msg)
    {
      $('#alertDiv').html("<h4>"+msg+"</h4>");
      $('#alertDiv').show();
      setTimeout(() => {
        $('#alertDiv').hide();
      }, 3000);  
    }     
  </script>

    <style>
    .main-img .container {
    position: absolute;
    top: 40%;
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
  <body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
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
    <div class="header">
        <div class="container ">
        <nav class="nav navbar navbar-dark bg-dark navbar-expand-lg  top-1 rounded">
                <div class="container-fluid">
                    <a class="navbar-brand mx-2" href="#">
                        <svg width="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="5.43395" height="22" fill="#FE1F27"/>
                            <rect x="12.5664" width="5.43395" height="22" fill="#FE1F27"/>
                            <path d="M0 0H5.43395L18 22H12.566L0 0Z" fill="#FE1F27"/>
                        </svg>
                        <h5 class="logo-title">Online Gamming</h5>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-2" aria-controls="navbar-2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-2">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-start">                           
                            <li class="nav-item">
                                <a class="nav-link me-5 text-white" aria-current="page" href="register.php"><p class="mb-0">Register</p></a>
                            </li>                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="card-body mt-5 pt-5">
          <div id="alertDiv" class="alert alert-danger" role="alert"  style="display:none">      
        </div>
        <?PHP
              if (isset($_SESSION['msg']))
                { 
               if( $_SESSION['msg']=='0')
                  {
                   echo "<script type='text/javascript'>showAlert('Invalid Mobile or Pass..')</script>";

                    unset($_SESSION['msg']);

                    }else{
                    
                     unset($_SESSION['msg']);
                               
                      }
                }
                     ?>   
                      <?PHP
              if (isset($_SESSION['thanku_msg']))
                { 
               if( $_SESSION['thanku_msg']=='1')
                  {
                   echo "<script type='text/javascript'>showAlert('Thank you ! You have Registered Successfully')</script>";

                    unset($_SESSION['thanku_msg']);

                    }else{
                    
                     unset($_SESSION['thanku_msg']);
                               
                      }
                }
                     ?>  
        <form class=" " action="login_sql.php" method="post" >
        <div class="slider-content position-relative">
            <div class="main-img vh-100">
                <div class="container">
                <div class="row">
                <div class="col-6 mx-auto p-4" style="border: 1px solid white;">
                <h4 class="my-4">Login</h4>
                <div class="bd-example">
        <div class="input-group mb-3">
            <span class="input-group-text bg-white" id="basic-addon1"><i class="fa fa-user text-black" aria-hidden="true"></i></span>
            <input type="text" class="form-control bg-white text-black" id="user_id" name="user_id" placeholder="Username"  required autocomplete="off">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text bg-white" id="basic-addon1"><i class="fa fa-lock text-black" aria-hidden="true"></i></span>
            <input type="password" class="form-control bg-white text-black" id="password" name="password"  placeholder="Password"   required autocomplete="off">
        </div>

        <div class="input-group mb-3 d-flex justify-content-start">
           <a href="check_email.php" class="btn btn-sm   btn-primary">Forget Password ?</a>
        </div>

        <div class="input-group mb-3 d-flex justify-content-center">
       
        <button type="submit" name="submit" id="submit" class="btn btn-white   text-center style2-input text-dark   bg-white border-0 p-2">Login</button>
        </div>
    </div>
    </div>
                </div>
            </div> 
           
            </div>        
        </div>
</form >
    </div>
</DIV>
      
    
    <!-- Backend Bundle JavaScript -->
    <script src="assets/js/libs.min.js"></script>
    <!-- widgetchart JavaScript -->
    <script src="assets/js/charts/widgetcharts.js"></script>
    <!-- dashboard JavaScript -->
    <script src="assets/js/charts/dashboard.js"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="assets/js/fslightbox.js"></script>
    <!-- app JavaScript -->
    <script src="assets/js/app.js"></script>
    <!-- apexchart JavaScript -->
    <script src="assets/js/charts/apexcharts.js"></script>
    <!-- countdown JavaScript -->
    <script src="assets/js/countdown.js" ></script>        <script src="assets/js/prism.mini.js"></script>
  </body>
</html>