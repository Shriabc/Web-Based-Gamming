
<?PHP
 
session_start();
if(!isset($_SESSION['admin'])){
    header('location:../admin_login.php');
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
      <link rel="stylesheet" href="../assets/css/nairobi.css?v=1.0.0">
      
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- showalert  start -->
	<script>
		function showAlert(msg) {
			$('#alertDiv').html("<h4>" + msg + "</h4>");
			$('#alertDiv').show();
			setTimeout(() => {
				$('#alertDiv').hide();
			}, 3000);

		}
	</script>
	<!-- showalert  start -->
    </head>

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

        <div class="card-body" > 
             <div   id="alertDiv" class="alert alert-danger" role="alert" style="display:none">
             
             <?php
          
         if (isset($_SESSION['msg']))
          { 
          if( $_SESSION['msg']=='1')
              {
                echo "<script type='text/javascript'>showAlert('Deleted Successfully..')</script>";
                 //unset($_SESSION['msg']);
                //  unset($_SESSION['msg']);
                // header("location:index.php");
               }else if($_SESSION['msg']=='-1'){
                echo "<script type='text/javascript'>showAlert('Wrong Password')</script>";
             
               }else{
                echo "<script type='text/javascript'>showAlert('Error')</script>";
         
               }
               unset($_SESSION['msg']);
           }
         ?>  
         </div>
            <section id="components">
                <article id="tables">
                    <div class="card iq-document-card"  style="background-color:#DED9D6;">
                    <h5 style="color: #000000;">Car Game Score</h5>
                       
                        <div class="tab-content mt-4">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-table-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example table-responsive pb-4" style="background-color:#333333;">
                                <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Score</th> 
                                            <!-- <th scope="col">Action</th> --> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
                                        $id=$_SESSION['id'];
                                        
                                      $i=1;
                                      include "../include/database.php";
                                     $sql = "SELECT * FROM `car_score_board` ";
                                    //  $sql = "SELECT * FROM car_score_board WHERE last_lap = (SELECT MAX(last_lap) FROM car_score_board) AND user_id='$id'" ;     
                                      $i=1;
                                     $result = mysqli_query($db_found, $sql);
                                     while ($row = mysqli_fetch_assoc($result)) {
                                      $useId=$row['user_id'];
                                  

                                      $usql = "SELECT * FROM `users` where `id`=$useId ";
                                    
                                     $uresult = mysqli_query($db_found, $usql);
                                     $urow = mysqli_fetch_assoc($uresult);

                                     ?>
                                        <tr>
                                        <tH><?php echo  $i; $i++;?></tH> 
                                            <td><?php echo  $urow['fullname']?></td>
                                            <td><?php echo  $row['level']?></td>
                                            <td><?php echo  $row['last_lap']?></td>
                                         
                                            <!-- <td>  <ul class="list-inline m-0">
                                                <li class="list-inline-item float-left">
                                                <a class="btn btn-success p-1 " href="edit_users.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a> 
                                                </li>
                                                <li class="list-inline-item float-left" >
                                              
                                                <a href=" #" data-bs-toggle="modal" data-bs-target="#add-new-events" onclick="showdelmodal(<?php echo $row['id']; ?>)" class="btn btn-sm btn-danger p-1 m-0 "><i class="fa fa-trash"></i></a>
                                                </li>
                                                
                                                <li class="list-inline-item float-left">
                                                <a class="btn btn-info p-1 " href="view_users.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></a> 
                                                </li>
                                                 
                                              </ul></td> -->
                                        </tr>
                                       <?PHP } ?>
                                        </tbody>
                                    </table>

                                       <!-- Modal Delete -->

                            <div class="modal fade none-border" id="add-new-events">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title"><strong>Delete</strong> Modal</h4>
                                    <button type="button" class=" btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form action="delete_users_sql.php" method="POST">
                                    <input type="hidden" class="col" value="<?php echo $row['id']; ?>" id="user_id" name="user_id">
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h6>Are you sure you want to delete this </h6>
<!-- 
                                          <label class="form-label">Password</label>
                                          <input class="form-control py-0 form-white" placeholder="Enter Password" type="password" name="password" id="password" required autocomplete="off" /> -->
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <input type="submit" class="btn  btn-sm btn-success" value="Delete">
                                      <span class="btn  btn-sm btn-danger" data-bs-dismiss="modal">Close</span>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <!-- END MODAL DELETE -->
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    
                </article>

              
                              

        </div>

        </div>
      </div>
      <script>
 
        function showdelmodal(id) {
          document.getElementById('user_id').value = id;
        
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
    <script src="../assets/js/countdown.js" ></script>        <script src="../assets/js/prism.mini.js"></script>
  </body>
</html>