<?php
include"connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from questions where id=$id");
?>

<script>
    window.location='edit_questions.php';
</script>