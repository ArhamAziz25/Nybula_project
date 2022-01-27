<?php
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Portal</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/form.css">

</head>

<body>


    <div class="text-center registration"><b><mark class="bg-primary">Log In</mark></b></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="register" style="min-height: 248px;">
                <!-- registration form begins -->
                <form action="" name="form1" method="POST">
                    
                   
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control" placeholder="Enter Username.." name="username">
                    </div>
                   
                   
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password.." name="password">
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-success" name="login"><b>LogIn</b></button>
                    <a href="register.php" class="btn btn-success"><b>SignUp</b></a>
                    
                    </div>
                </form>

                <!-- registration form ends -->

                <div class="alert alert-danger text-center" role="alert" id="danger" style="margin: 20px;">
                    <strong>Invalid Username or Password!</strong>
                </div>
                <div class="fact"><p class="Fact1">Today a Reader, Tomorrow a Leader.
                    Study Hard CHAMP!!!
                </p></div>

            </div>
        </div>
    </div>

    <?php

    if (isset($_POST["login"])) {
        $count=0;
        $res=mysqli_query($link,"select * from registration where username='$_POST[username]'&& password='$_POST[password]'");
        $count=mysqli_num_rows($res);

        
    
        if($count==0)
    {  ?>
    <script>
          document.getElementById("danger").style.display="block";
            
    </script> 
     <?php
    }

    else
    { ?>
    <script>
    window.location="student_dashboard.php";
    </script>
        <?php
        
    }

}
?>


        




</body>

</html>