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
    background: #202020;
    height: 70px;
  }

  .logo {
    background-color: white;
    border-radius: 7px;
    font-family: 'typo';
    font-size: 45px;
    
    margin: 15px;
  }

  .topnav {
    font-family: 'typo';
    position: relative;
    height: 49px;
    background-color: #788403;    overflow: hidden;
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

  .registration{
    margin-top: 3vh;
    font-size: 45px;
 
}

  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #58CCED;
    color: white;
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
    <a href="student_dashboard.php" class="active">TAKE QUIZ</a>
   
    <a href="index.php">LOGOUT</a>
    
   
  </div>
  

  </div>
  <div class="text-center registration"><b> <mark class="bg-success">Ongoing Quizes </mark> </b></div>

   <!-- Table -->
    
   <div class="container">
    <div class="table-responsive">

            
  <table class="table">
    <thead>
      <tr>
        <th><b>Id</b></th>
        <th><b>Exam Category</b></th>
        <th><b>Exam Passing Marks</b></th>
        <th><b>Attempt</b></th>
       
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
        <td><a href="attempt.php?id=<?php echo $row["id"];?>" class="btn btn-success"><b>ATTEMPT</b></a></td>
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