<?php 

include "../include/database.php";
 
session_start();
  if (!(isset($_SESSION['admin']))){  
   header("location:../admin_login.php");
  } 
 
// $pass=htmlspecialchars($_POST['password']);
$user_id=htmlspecialchars($_POST['user_id']);

// code updated by akash on 21-11-2023 
$q="SELECT * FROM `users` WHERE `id`='$user_id' ";
// echo $q;
  $res=mysqli_query($db_found,$q);
  $row=mysqli_fetch_assoc($res);

    
  if($row['id']==$user_id )
      {
   $sql = "DELETE FROM users WHERE id='$user_id'";
   //echo $sql;
         if(mysqli_query($db_found,$sql)){
           
            $_SESSION['msg']= 1; 
         }
        else{ 
         $_SESSION['msg']= 0; 
         
        }     
    
}else{
// }

// }else{
  $_SESSION['msg']= '-1'; 

}
header("Location:all_users.php");
?>
