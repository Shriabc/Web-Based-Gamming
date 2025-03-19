

<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Nairobi | Responsive Bootstrap 5 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico" />
      <link rel="stylesheet" href="assets/css/libs.min.css">
      <link rel="stylesheet" href="assets/css/nairobi.css?v=1.0.0">  
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
    <div class="header "  >
        <div class="container ">
        <nav class="nav navbar navbar-dark bg-dark navbar-expand-lg  top-1 rounded">
                <div class="container-fluid">
                    <a class="navbar-brand mx-2" href="#">
                        <svg width="18" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="5.43395" height="22" fill="#FE1F27"/>
                            <rect x="12.5664" width="5.43395" height="22" fill="#FE1F27"/>
                            <path d="M0 0H5.43395L18 22H12.566L0 0Z" fill="#FE1F27"/>
                        </svg>
                        <h5 class="logo-title">NAIROBI</h5>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-2" aria-controls="navbar-2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-2">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-start">
                            <!-- <li class="nav-item">
                                <a class="nav-link me-5" aria-current="page" href="https://templates.iqonic.design/lite/nairobi/documentation/html/dist/main/index.html"><p class="mb-0">Documentation</p></a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link me-5 text-white" aria-current="page" href="login.php"><p class="mb-0">Login</p></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <form class=" " action="register_sql.php" method="post" >
        <div class="slider-content position-relative">
            <div class="main-img vh-100">
                <div class="container">
                <div class="row">
                <div class="col-6 mx-auto p-4" style="border: 1px solid white;">
                <div class="bd-example">
        <div class="input-group mb-3">
            
            <input type="text" class="form-control bg-white text-black " id="fullname" name="fullname" placeholder="Fullname"  required autocomplete="off">
            
        </div>
        <div class="input-group mb-3">
         
            <input type="text" class="form-control bg-white text-black" id="mobile" oninput="validationmobile()" name="mobile"  placeholder="Mobile No"   maxlength="10" required autocomplete="off">
        </div>
        <span id="mobileerror" class="text-danger"  ></span> 

        <div class="input-group mb-3">
         
         <input type="text" class="form-control bg-white text-black"   oninput="Check_email();"id="email" name="email"  placeholder="Email"   required autocomplete="off">
     </div>
     <span id="emailerror" class="text-danger"></span>
     <div class="input-group mb-3">
         
         <textarea class="form-control bg-white text-black" id="address" name="address"  placeholder="Address"   required autocomplete="off"></textarea>
     </div>
     <div class="input-group mb-3">
         
         <input type="password" class="form-control bg-white text-black" id="password" name="password"  placeholder="Password" oninput="return verifyPassword()"  required autocomplete="off">
     </div>
     <span id="passworderror" class="text-danger"> </span> 

     <div class="input-group mb-3">
         
         <input type="text" class="form-control bg-white text-black" id="c_password" name="c_password"  placeholder="Confirm Password"  oninput="check_password()"  required autocomplete="off">
     </div>
     <span id="cpassworderror" class="text-danger"></span>

        <div class="input-group mb-3 d-flex justify-content-center">
       
        <button type="submit" name="Submit" id="Submit" class="btn btn-white   text-center style2-input text-dark   bg-white border-0 p-2" disabled>Sign Up</button>
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
      


<script>  
function verifyPassword() {  
 
var password1 = document.getElementById("password").value;
     
        filter =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
        
        if (filter.test(password.value)) {
            document.getElementById('passworderror').innerHTML = "";
            document.getElementById('Submit').disabled = false;

            return true;
        } else {
            document.getElementById("passworderror").innerHTML = "Must contain 1 Uppercase & Lowercase Alphabate,  Digits & Symbol. ";
           document.getElementById('Submit').disabled = true;

            return false;
        }
    }
 
</script>

<script type="text/javascript">
 function check_password() {
    if(document.getElementById('password').value ===
            document.getElementById('c_password').value) {
        document.getElementById('cpassworderror').innerHTML = "";
        document.getElementById('Submit').disabled = false;
        return true;
    } else {
        document.getElementById('cpassworderror').innerHTML = "Password does not match";
         document.getElementById('Submit').disabled = true;
        return false;
    }
}
</script> 
<script type="text/javascript">
    function validationmobile() {

      // document.getElementById("Submit").disabled = true;
      // document.getElementById('otpbtn').disabled = true;
      // document.getElementById('mobileerror').innerHTML = "";

      var mob = document.getElementById("mobile").value;
      var mob2 = String(mob);
      var size = mob.length
      filter = /^[789][0-9]{9}$/;
      filter1 = /^[789]$/;
      if (mob2.charAt(0) == "") {
        document.getElementById('mobileerror').innerHTML = "";
      } else if (!(filter1.test(mob2.charAt(0)))) {
        document.getElementById("mobileerror").innerHTML = "**mobile_no is invalid";
      }
      if (filter.test(mob) && mob.length == 10) {
        // console.log("filter")
        document.getElementById('mobileerror').innerHTML = "";
    
      //   document.getElementById('Submit').disabled = true;

        check_data("mobile");
        if (document.getElementById('mobileerror').innerHTML == "") {

          return true;

        } else {
          return false;
        }
      } else if (mob.length == 10) {
        document.getElementById("mobileerror").innerHTML = "**mobile_no is invalid";
        //return false;
      } else {

      }


    }
  </script>
  
<script type="text/javascript">
  
  
  function Check_email() {
  
     var x = document.getElementById("email").value;
   if (x == "") {
     document.getElementById('emailerror').innerHTML = " ";
     return true;
   }
 else{
 
         var email_x = document.getElementById("email").value;
         filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         if (filter.test(email.value)) 
         {
           //  document.getElementById("email").style.border = "3px solid green";
             document.getElementById('emailerror').innerHTML = " ";
             check_data("email")
             if(document.getElementById('emailerror').innerHTML=="")
                 return true;
               else
               {
                 return false;
               } 
         } else {
             document.getElementById("emailerror").innerHTML = "**Email is invalid";
             return false;
         }
 
 
     }
 }
     
 </script> 

<script>

 
function check_data(x)
{

if(x=="mobile")
{
    var mob=document.getElementById(x).value;;
    console.log(mob);   
}else{
    var email=document.getElementById(x).value;
}
    console.log(email);
    document.getElementById("mobileerror").innerHTML =""; 
    document.getElementById("emailerror").innerHTML =""; 

    $.ajax({ 
        method: "POST", 
        url: "valid_user_sql.php", 
        data:{
           mob:mob,email:email

        }, 
        success: function(res)
        {

            if(res){
               document.getElementById("mobileerror").innerHTML =""; 
               document.getElementById("emailerror").innerHTML = ""; 
               document.getElementById("Submit").disabled=True;
               
            }else
            {
                document.getElementById("Submit").disabled=true;

              if(x=="mobile")
                {
                    document.getElementById("mobileerror").innerHTML = "Already Exists Please Sign In "; 
                    //document.getElementById('otpbtn').disabled=true;

                }else
                document.getElementById("emailerror").innerHTML = "Already Exists Please Sign In"; 

            }
        },
        error:function(er){
          alert(er)//Success alert
        } 

    });
}
</script>


    
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