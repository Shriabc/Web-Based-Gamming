<?php
 
    session_start();
      if (!(isset($_SESSION['admin']))){  
        header("location:../admin_login.php");
      } 
    
 include('../include/database.php'); 
 $stages=$_POST["stages"];
   
 $SQL="INSERT INTO stages (`stage`) VALUES('$stages')";
        
               //echo $SQL;
                if(mysqli_query($db_found,$SQL))
                {
                    echo "update Succesfully.....";
              header("Location:all_stages.php");
                }else {
                    echo false;
                }
             
         
?>
