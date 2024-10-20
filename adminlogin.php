<?php 
 require("connectadmin.php");
 ?>

<html>
    <head>
        <title>Admin  Login Panel</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-ti-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="mycss.css" >
    </head>
   <body>

    <div class="admin-form">
        <h2>ADMIN  Login PANEL</h2>
        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Admin Name" name="Adminname">
            </div>

            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="Adminpass">
            </div>

            <button type="submit" name="Signin">Sing In</button>

            <div class="extra">
                <a href="#">Forgot Password ?</a>
            </div>            
        </form>
    </div>



<?php
if (isset($_POST['Signin'])) {
    // Sanitize input
    $adminName = mysqli_real_escape_string($conn, $_POST['Adminname']);
    $adminPass = mysqli_real_escape_string($conn, $_POST['Adminpass']);

    // Prepare query
    $query = "SELECT * FROM `admin_login` WHERE `Admin_name`='$adminName' AND `Admin_pass`='$adminPass'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result) {
        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['AdminLoginId'] = $adminName;
            header("Location: home.php");
        } else {
            echo "<script>alert('Incorrect Username or Password');</script>";
        }
    } else {
        echo "<script>alert('Query Failed: " . addslashes(mysqli_error($conn)) . "');</script>";


    }
}
?>

   </body> 
</html>



