<?php
 
    session_start();
      if (!(isset($_SESSION['admin']))){  
        header("location:../admin_login.php");
      } 
    
 include('../include/database.php'); 
 $id=$_POST["id"]; 
 $stage=$_POST["stage"];
   
   
  $SQL="update stages set stage='$stage' where id='$id'";
        
              //echo $SQL;
                if(mysqli_query($db_found,$SQL))
                {
                    echo "update Succesfully.....";
              header("Location:all_stages.php");
                }else {
                    echo false;
                }
             
         
?>
