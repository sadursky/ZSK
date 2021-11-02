<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <h3>Użytkownicy</h3>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsk_4bgr2_baza1");
      $sql = "SELECT * FROM `users`;";
      $result = $connect->query($sql);

      echo <<< TABLE
        <table>
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
          </tr>

      TABLE;
      while ($row = $result->fetch_assoc()) {
        echo <<< ROW
          <tr>
            <td>$row[user_id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
          </tr>
        ROW;
      }
      echo "</table>";



     ?>
  </body>
</html>
