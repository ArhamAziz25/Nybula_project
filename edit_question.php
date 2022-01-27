<?php
include "connection.php";
$id=$_GET["id"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ease Learn</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .header {
        background: #202020;
        height: 70px;
    }

    .logo {
        font-family: 'typo';
        font-size: 45px;
        color: white;
        margin: 15px;
    }

    .topnav {
        font-family: 'typo';
        position: relative;
        height: 49px;
        background-color: #333;
        overflow: hidden;
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

      /* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
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

    .registration{
    margin-top: 3vh;
    font-size: 45px;
 
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



    <a href="teacher_dashboard.php" >DASHBOARD</a>
        <a href="add_exam.php">ADD QUIZ</a>
        <a href="add_edit_question.php" class="active">ADD/VIEW QUESTION</a>
        
        <a href="index.php">LOGOUT</a>
        <div class="topnav-right">
    <a href="">Welcome!</a>
   
  </div>

    </div>
    <div class="text-center registration"><b>VIEW</b></div>

    <!-- Table -->
    
    <div class="container">
    <div class="table-responsive">

            
  <table class="table">
    <thead>
      <tr>
      
        <th><b>Id</b></th>
        <th><b>Questions</b></th>
        <th><b>Option 1</b></th>
        <th><b>Option 2</b></th>
        <th><b>Option 3</b></th>
         <th><b>Option 4</b></th>
         <th><b>Answer</b></th>
         
     
        
      </tr>
    </thead>
    <tbody>

    <?php

    $res=mysqli_query($link,"select * from questions ");
    while ($row=mysqli_fetch_array($res)){
    
        ?>
        <tr>
        <th><?php echo $row["question_no"];?></th>
        <td><?php echo $row["question"];?></td>
        <td><?php echo $row["option1"];?></td>
        <td><?php echo $row["option2"];?></td>
        <td><?php echo $row["option3"];?></td>
        <td><?php echo $row["option4"];?></td>
        <td><?php echo $row["answer"];?></td>

        
        

        
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