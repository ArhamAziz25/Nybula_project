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
  <title>Ease Learn</title>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/form.css">
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

  .registration{
    margin-top: 3vh;
    font-size: 45px;
 
}

  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #58CCED;
    color: white;
  }

  body{
    background-color: #eee;

}

.col-lg-push-10{
    margin-top: 1rem;
    font-family:'typo' ;
    font-weight: 600;
    font-size: 3rem;
}
</style>

<body>
  <!-- navigation bar begins -->
  <div class="header">

    <div class="col-lg-6">
      <span class="logo">Ease Learn</span>
    </div>

  </div>
  <!-- navigation bar ends -->

  <!-- Top navigation -->
  <div class="topnav">
    <a href="student_dashboard.php" class="active">TAKE QUIZ</a>
   <a href="#home">LAST RESULTS</a>
    <a href="index.php">LOGOUT</a>
    
   
  </div>
  

  </div>
  <div class="text-center registration"><b><?php echo $exam_category ?> Quiz</b></div>
  <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="register">
             <div class="col-lg-push-10">
                 <div id="current_que" style="float: right;">0</div>
                 <div style="float: right;">/</div>
                 <div id="total_que" style="float: right;">0</div>
             </div>


             <div class="row" style="margin-top:30px;">
             <div class="row">
                 <div class="col-lg-10 col-lg-push-10" id="load_questions">
                     
                 </div>
             </div>
            </div>

            <div class="text-center" style="margin-bottom: 2rem;">
                        <input type="button" class="btn btn-success" value="Previous" onclick="load_previous();" >
                        </button>
                        <input type="button" class="btn btn-success" value="Next" onclick="load_next();" >
                        <b></b></button>
                      

                    </div>

            </div>
        </div>
    </div>

    <script>
        function load_total_ques(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 &&xmlhttp.status==200){
                    document.getElementById("total_que").innerHTML=xmlhttp.responseText;
                   
                }
            };
            xmlhttp.open("GET","load_total_que.php",true);
            xmlhttp.send(null);
        }

        var question_no=1;
        load_questions(question_no);

        function load_questions(question_no){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 &&xmlhttp.status==200){
                    if(xmlhttp.responseText=="over")
                    {
                        window.loaction="result.php";
                    }
                    else{
                        document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                        load_total_ques();

                    }
                }
            };
            xmlhttp.open("GET","load_questions.php",true);
            xmlhttp.send(null);

        }

        function load_previous(){
           if(question_no=="1"){
               load_questions(question_no);
           }
           else{
               question_no=eval(question_no)-1;
               load_questions(question_no);
           }
        }

        function load_next(){
            question_no=eval(question_no)+1;
               load_questions(question_no);
        }
    </script>
    
   





</body>

</html>