<?php
  function show() {
    echo "SHOW<br>";
  }

  function show1($name) {
    echo $name;
  }

/*
  Zdefiniuj funkcje o nazwie stringValidate, która wykona następujące
*/

function stringValidate($string, $length) {
  $string = ucfirst(strtolower(trim($string)));
  return substr($string, 0, $length);
}

 ?>
