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
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .header {
        color: #f2f2f2;
        height: 70px;
    }

    .logo {
        font-family:fantasy;
        font-size: 45px;
        color: black;
        margin: 15px;
        background-color: yellowgreen;
        border-radius: 11px;
    }

    .topnav {
        font-family: 'typo';
        position: relative;
        height: 49px;
        background-color: #808433;
        overflow: hidden;
    }

    .registration{
    margin-top: 3vh;
    font-size: 45px;
 
}

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        color: #f2f2f2;
        margin-right: 1rem;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #58CCED;
        color: white;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
        background-color: #58CCED;
        color: white;
    }

    .topnav-right{
        float:right;
    }


    .container{
        margin-top: 5rem;
    }
</style>

<body>
    <!-- navigation bar begins -->
    <div class="header">

        <div class="col-lg-6">
            <span class="logo">School Portal</span>
        </div>

    </div>
    <!-- navigation bar ends -->

    <!-- Top navigation -->
    <div class="topnav">



    <a href="teacher_dashboard.php"  >DASHBOARD</a>
        <a href="add_exam.php">ADD QUIZ</a>
        <a href="add_edit_question.php" class="active">ADD/EDIT QUESTION</a>
        
        <a href="index.php">LOGOUT</a>
        <div class="topnav-right">
    <a href="">Welcome!</a>
   
  </div>

    </div>

    <div class="text-center registration"><b> Select exam categories to add/edit/view questions</b></div>

    <!-- Table -->

    <div class="container">
    <div class="table-responsive">

            
  <table class="table">
    <thead>
      <tr>
        <th><b>Id</b></th>
        <th><b>Exam Category</b></th>
        <th><b>Exam Time</b></th>
        <th><b>Add</b></th>
        <th><b>Edit</b></th>
        
        
      </tr>
    </thead>
    <tbody>

    <?php
    $count=0;
    $res=mysqli_query($link,"select * from exam ");
    while ($row=mysqli_fetch_array($res)){
        $count=$count+1;
        ?>
        <tr>
        <th><?php echo $count;?></th>
        <td><?php echo $row["category"];?></td>
        <td><?php echo $row["exam_time"];?></td>
        <td><a href="add_questions.php?id=<?php echo $row["id"];?>">ADD</a></td>
        <td><a href="edit_question.php?id=<?php echo $row["id"];?>">EDIT</a></td>
        

      </tr>

        <?php
    }
    ?>
      
    
    </tbody>
  </table>
    </div>
</div>



</body>

</html>