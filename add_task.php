<?php
include 'index.php';

if ($_SERVER['REQUEST_METHOD'] =='POST')
{
  $task = $_POST['task'];
  $sql = "INSERT INTO task (task)
  VALUES ('$task')";

$conn -> query($sql);
  header ("Location: index.php");
}

?>
