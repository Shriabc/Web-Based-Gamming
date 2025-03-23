
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
  <body style="background-color: #EDECE8;" class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
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
                    <h5 style="color: #000000;">Update Users</h5>
                        
                        <?PHP
                                 include "../include/database.php";
                                $id=$_GET['id'];
                                //echo $id;
                              
                                $query = "SELECT * from users where id='".$id."'"; 
                            //  //echo $query;
                                $result = mysqli_query($db_found, $query) ;
                                $row= mysqli_fetch_assoc($result);
               
                                ?>
                                 <form  action="edit_users_sql.php" method="POST" enctype="multipart/form-data" class="m-0 p-0 mt-5">
                            <input type="hidden" class="col  " value="<?php echo $row['id'];?>"  id="id" name="id">
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-inputgroup-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                <div class="row">
                                <div class="col-6">
                                <div class="input-group mb-3">
            
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" value ="<?PHP echo $row['fullname']?>"  required autocomplete="off">
                                </div>
                                </div>
                                <div class="col-6">
                                
                                <div class="input-group mb-3">
                                
                                    <input type="number" class="form-control" id="mobile" oninput="validationmobile()" value ="<?PHP echo $row['mobile']?>" name="mobile"  placeholder="Mobile No"   required autocomplete="off">
                                </div>
                                 
                                <span id="mobileerror" class="text-danger"  ></span> 
                                </div>
                                </div>
                                <div class="input-group mb-3">
                                
                                <input type="text" class="form-control"   oninput="Check_email();"id="email" name="email" value ="<?PHP echo $row['email']?>" placeholder="Email"   required autocomplete="off">
                            </div>
                            <span id="emailerror" class="text-danger"></span>
                            <div class="input-group mb-3">
                                
                                <textarea class="form-control" id="address" name="address"  placeholder="Address"   required autocomplete="off"><?PHP echo $row['address']?></textarea>
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
      </script> 
<script type="text/javascript">
    function validationmobile() {
      //  document.getElementById("Submit").disabled = true;

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

//validate mobile and email   :) `Akash`
function check_data(x)
{

if(x=="mobile_no")
{
    var mob=document.getElementById(x).value;;
        
}else{
    var email=document.getElementById(x).value;
}
    // console.log(email);
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

              if(x=="mobile_no")
                {
                    document.getElementById("mobileerror").innerHTML = "Already Exists Please Sign In "; 
                    document.getElementById('otpbtn').disabled=true;

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