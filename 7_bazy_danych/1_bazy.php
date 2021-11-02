<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h3>Użytkownicy</h3>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsk_4bgr2_baza1");
      $sql = "SELECT * FROM `users`;";
      $result = $connect->query($sql);


      while ($row = $result->fetch_assoc()) {
        echo <<< ROW
          id: $row[user_id]
          <br>
          imię: $row[name], nazwisko: $row[surname]
          <br>
          data urodzenia: $row[birthday]
          <hr>
        ROW;
      }




     ?>
  </body>
</html>
