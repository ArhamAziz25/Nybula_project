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


    <div class="text-center registration"><b><mark class="bg-primary">Sign Up</mark></b></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="register">
                <!-- registration form begins -->
                <form action="" name="form1" method="POST">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name.." name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name.." name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control" placeholder="Username.." name="username">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="number" class="form-control" placeholder="phone no.." name="contact" min="0">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="E-Mail.." name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="password.." name="password">
                    </div>

                    <button type="submit" class="btn btn-info" name="submit1">SUBMIT</button>
                </form>

                <!-- registration form ends -->
                <div class="alert alert-success text-center" role="alert" id="success">
                   <strong>Registration Successfull!</strong> 
                </div>
                <div class="alert alert-danger text-center" role="alert" id="danger">
                    <strong>Already Registered!</strong>
                </div>
                <div class="fact"><p class="Fact1">* Use your school Email ID for SignUp </p></div>

            </div>
        </div>
    </div>


    <?php

    if (isset($_POST["submit1"])) {

        $count=0;
        $res=mysqli_query($link,"select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);

        
    
    if($count>0)
    {
        ?>
        <script>
            document.getElementById("danger").style.display="block";
            document.getElementById("success").style.display="none";
        </script>

        <?php
    }

    else
    {
        mysqli_query($link,"insert into registration values (NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[contact]','$_POST[email]','$_POST[password]')") or die(mysqli_error($link));
    
        ?>
        <script>
            document.getElementById("success").style.display="block";
            document.getElementById("danger").style.display="none";
        </script>
        <?php
        
    }

}
?>

        




</body>

</html>