<?php 
 include("../connect/connect.php"); 

$id=$_GET['id'];
$query="DELETE FROM articles WHERE id=$id";
$pdo->exec($query);

header("Location: ../index.php?view_article&suppr_ok");


