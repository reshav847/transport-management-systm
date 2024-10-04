<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost:3307','root','','transport management'); 

   $sql="DELETE FROM `booking` WHERE booking_id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: bookinglist.php");
   }else{
         echo "Not deleted";
   }
   
?>
