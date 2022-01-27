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


    <div class="text-center registration"><b> <mark class="bg-danger"> Add Exam </mark> </b></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="register" style="min-height: 248px;">
                <!-- registration form begins -->
                <form action="" name="form1" method="POST">
                    
                   
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" placeholder="Category Of exam.." name="category">
                    </div>
                   
                   
                    <div class="form-group">
                        <label for="exam_time">Time Allowed</label>
                        <input type="number" class="form-control" placeholder="Time Allowed.." name="exam_time">
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-success" name="add"><b>Add</b></button>
                    <a href="teacher_dashboard.php" class="btn btn-success"><b>Back</b></a>
                    
                    </div>
                </form>

                <!-- registration form ends -->

                <div class="alert alert-success text-center" role="alert" id="success" style="margin: 20px;">
                    <strong>Exam added Successully!</strong>
                </div>
                

            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['add'])){
        
        mysqli_query($link,"insert into exam values(NULL,'$_POST[category]','$_POST[exam_time]')");
        ?>
        <script>
             document.getElementById("success").style.display="block";
        </script>
        <?php
    }
    ?>

 


        




</body>

</html>