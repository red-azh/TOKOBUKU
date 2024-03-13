<?php
require "../config.php";


$id = $_GET["id"];
$query = "DELETE FROM penerbit WHERE id=$id"; //select database
$edit = mysqli_query($connect, $query);

header("location:admin.php");
