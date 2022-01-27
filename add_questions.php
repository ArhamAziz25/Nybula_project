<?php
include "connection.php";
$id = $_GET["id"];
$exam_category = "";
$res = mysqli_query($link, "select * from exam where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $exam_category = $row['category'];
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


    <div class="text-center registration"><b>Add Questions in <?php echo $exam_category ?></b></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="register" style="min-height: 248px;">
                <!-- registration form begins -->
                <form action="" name="form1" method="POST">


                    <div class="form-group">
                        <label for="category">Question</label>
                        <input type="text" class="form-control" placeholder="Question.." name="question" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Option 1</label>
                        <input type="text" class="form-control" placeholder="Add option1.." name="option1" >
                    </div>


                    <div class="form-group">
                        <label for="category">Option 2</label>
                        <input type="text" class="form-control" placeholder="Add option2.." name="option2" >
                    </div>

                    <div class="form-group">
                        <label for="category">Option 3</label>
                        <input type="text" class="form-control" placeholder="Add option3.." name="option3" >
                    </div>

                    <div class="form-group">
                        <label for="category">Option 4</label>
                        <input type="text" class="form-control" placeholder="Add option4.." name="option4" >
                    </div>

                    <div class="form-group">
                        <label for="category">Answer</label>
                        <input type="text" class="form-control" placeholder="Add answer.." name="answer" >
                    </div>

                    <div class="text-center" style="margin-bottom: 2rem;">
                        <button type="submit" class="btn btn-success" name="add"><b>ADD QUESTION</b></button>
                        <a href="teacher_dashboard.php" class="btn btn-success"><b>BACK</b></a>

                    </div>
                </form>

                <!-- registration form ends -->


            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['add'])) {
      $loop=0;
      $count=0;
      $res=mysqli_query($link,"select * from questions where category='$exam_category' order by id asc") 
      or die (mysqli_error($link));
      $count=mysqli_num_rows($res);

      if($count==0){

      }

      else{
          while($row=mysqli_fetch_array($res)){
           $loop=$loop+1;
           mysqli_query($link,"update questions set question_no='$loop' where id= $row[id]");
          }
      }
    
      $loop=$loop+1;
      mysqli_query($link,"insert into questions values (NULL,'$loop','$_POST[question]','$_POST[option1]','$_POST[option2]',
      '$_POST[option3]','$_POST[option4]','$_POST[answer]','$exam_category')")
       or die(mysqli_error($link));
       ?>
       <script>
         alert("Question Added Succesfully");
            
          
        </script>
        <?php
    }
    ?>









</body>

</html>