<?php


  require_once '../function/function.php';
  show();



  if (!empty($_POST['name'])) {
    echo stringValidate($_POST['name'], 6)."<br>".strlen(stringValidate($_POST['name'], 6));
  }


 ?>
