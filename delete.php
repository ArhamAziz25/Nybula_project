<?php
include"connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from exam where id=$id");
?>

<script>
    window.location='teacher_dashboard.php';
</script>