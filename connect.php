<?php
    $conn=mysqli_connect("localhost","root","","rental gallery");
    if(!$conn)
    {
        die("conmection failed".mysqli_connect_error());
    }
    // else
   // {  echo "connection done";}
  
?>