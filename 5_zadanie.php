<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
<?php
  if (!isset($_POST['memberCount']) && !isset($_POST['buttonAvg'])) {
    echo <<< FORMFAMILYMEMBERCOUNT

    <h3>Ilość osób w rodzinie</h3>
    <form method="post">
      <input type="number" name="memberCount" placeholder="Podaj ilość osób">
      <br><br>
      <input type="submit" value="Zatwierdz">
    </form>

FORMFAMILYMEMBERCOUNT;
}
if (!empty($_POST['memberCount'])) {
  echo <<< FORMFAMILYAGE
  <form method="post">
FORMFAMILYAGE;

for ($i=1; $i <= $_POST['memberCount'] ; $i++) {
  echo "<input type='number' name='age$i' placeholder='Podaj wiek osoby $i'></input><br><br>";
}
  echo <<< FORMFAMILYAGE
    <input type="submit" name="buttonAvg" value="Zatwierdz">
  </form>
FORMFAMILYAGE;

}

  if (isset($_POST['buttonAvg'])) {
    $avg = 0;
    $count=0;
    foreach ($_POST as $key => $value) {
      if($key != 'buttonAvg') {
        $avg += $value;
        $count++;
      }
    }
    echo "Średni wiek: ".number_format($avg/$count, 2)." lat<hr>";
    echo '<a href="./5_zadanie.php">Strona główna</a>';
  }
?>

  </body>
</html>
