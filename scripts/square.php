<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
      <input type="submit" value="Oblicz">
    </form>

<?php

  if (!empty($_GET['sideA'])) {
    $sideA = str_replace(',','.',$_GET['sideA']);
    $area = pow($sideA, 2);
    $perimeter=4*$sideA;

    echo <<< RESULT
      <hr>
      Pole kwadratu wynosi: $area cm<sup>2</sup><br>
      Obwód kwadratu wynosi: $perimeter cm<br>
RESULT;
}


?>
  </body>
</html>
