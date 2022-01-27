<?php
include "connection.php";
$id=$_GET["id"];
$res=mysqli_query($link,"select * from exam where id=$id");
while($row=mysqli_fetch_array($res)){
    $exam_category=$row["category"];
    $exam_time=$row["exam_time"];
}
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


    <div class="text-center registration"><b>Edit Exam</b></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="register" style="min-height: 248px;">
                <!-- registration form begins -->
                <form action="" name="form1" method="POST">
                    
                   
                    <div class="form-group">
                        <label for="category">New Exam Category</label>
                        <input type="text" class="form-control" placeholder="Category Of exam.." name="new_category" 
                        value="<?php echo $exam_category;?>">
                    </div>
                   
                   
                    <div class="form-group">
                        <label for="exam_time">Minimum Passing Marks</label>
                        <input type="number" class="form-control" placeholder="Enter passing marks.." name="new_exam_time"
                        value="<?php echo $exam_time?>">
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-success" name="update"><b>Update</b></button>
                    <a href="teacher_dashboard.php" class="btn btn-success"><b>Back</b></a>
                    
                    </div>
                </form>

                <!-- registration form ends -->

            

            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['update'])){
        mysqli_query($link,"update exam set category='$_POST[new_category]',
        exam_time='$_POST[new_exam_time]' where id=$id");
        ?>
        <script>
            window.location='teacher_dashboard.php';
        </script>
        <?php

    }
    ?>

 


        




</body>

</html>