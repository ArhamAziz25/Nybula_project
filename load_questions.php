<?php

session_start();
include("connection.php");

$questionno="";
$option1="";
$option2="";
$option3="";
$option4="";
$answer="";
$count=0;

$ans="";

$que_no=$_GET("question_no");

if(isset($_SESSION["answer"]["que_no"]))
{
    $ans=$_SESSION["answer"]["que_no"];

}

$resl=mysqli_query($link,"select * from questions where category ='$_SESSION[exam_category]' 
&&questionno=$_GET[question_no]");
$count=mysqli_num_rows($resl);

if($count==0)
{
    echo "over";
}

else{
    while($row=mysqli_fetch_array($resl)){
        $questionno=$row["question_no"];
        $question=$row["question"];
        $option1=$row["option1"];
        $option2=$row["option2"];
        $option3=$row["option3"];
        $option4=$row["option4"];

        
    }
    ?>
    <table>
        <tr>
            <td style="font-weight: bold;font-size:18px; padding-left:5px" colspan="2">
            <?php echo"(".$questionno.")".$question; ?></td>
        </tr>
    </table>

    <table>
        <tr>
            <td>
                <input type="radio" name="rl" id="rl1" value="<?php echo $option1;?>"  onclick="radioclick(this.value,<?php echo $questiono ?>)"
<?php
 if($ans==$option1){
    echo "checked";
}
?>>
            </td>
            <td>
                <input type="radio" name="r2" id="rl2" value="<?php echo $option2;?>"  onclick="radioclick(this.value,<?php echo $questiono ?>)"
<?php
 if($ans==$option2){
    echo "checked";
}
?>>
    <td>
                <input type="radio" name="r3" id="rl3" value="<?php echo $option3;?>" onclick="radioclick(this.value,<?php echo $questiono ?>)"
<?php
 if($ans==$option3){
    echo "checked";
}
?>>
            </td>
            <td>
                <input type="radio" name="r4" id="rl4" value="<?php echo $option4;?>"  onclick="radioclick(this.value,<?php echo $questiono ?>)"
<?php
 if($ans==$option4){
    echo "checked";
}
?>>
            </td>
            </td>
            
        </tr>
    </table>
    <?php
   
}
?>