<?php
 
    session_start();
      if (!(isset($_SESSION['admin']))){  
        header("location:../admin_login.php");
      } 
    
 include('../include/database.php'); 
 $id=$_POST["id"];
 $fullname=$_POST["fullname"];
  $mobile=$_POST["mobile"];
  $email=$_POST["email"];  
  $address=$_POST["address"]; 
//   $password=htmlspecialchars($_POST['password']);
//     $password=md5($password); 
   
  $SQL="update users set fullname='$fullname', mobile='$mobile',email='$email', address='$address' where id='$id'";
        
               //echo $SQL;
                if(mysqli_query($db_found,$SQL))
                {
                    echo "update Succesfully.....";
              header("Location:all_users.php");
                }else {
                    echo false;
                }
             
         
?>
