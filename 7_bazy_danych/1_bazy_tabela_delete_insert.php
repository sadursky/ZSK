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
      require_once './scripts/connect.php';
      $sql = "SELECT users.user_id, users.city_id, users.name, users.surname, users.birthday, cities.city FROM `users` INNER JOIN `cities` ON users.city_id=cities.city_id;";
      $result = $connect->query($sql);

      if (isset($_GET['deletedUser'])) {
        echo "Prawidłowe usunięcie użytkownika o id: $_GET[deletedUser]";
      }
      echo <<< TABLE
        <table>
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Miasto</th>
          </tr>

      TABLE;
      while ($row = $result->fetch_assoc()) {
        echo <<< ROW
          <tr>
            <td>$row[user_id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td>$row[city]</td>
            <td><a href="./scripts/delete.php?id=$row[user_id]">Usuń</a></td>
          </tr>
        ROW;
      }
      echo "</table><br>";

      if(isset($_GET['error'])) {
        echo "<br>$_GET[error]";
      }
      if (isset($_GET['addUser'])) {
        echo <<< FORMADDUSER
          <h4> Dodawanie użytkownika </h4>
          <form action="./scripts/insert.php" method="post">
             <input type="text" name="name" placeholder="Podaj imię"><br><br>
             <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
             <input type="date" name="birthday" placeholder="Podaj datę urodzenia"><br><br>
             <select name="city_id">
        FORMADDUSER;
        $sql="SELECT * FROM `cities` ORDER BY `city`";
        $result=$connect->query($sql);
        while ($city=$result->fetch_assoc()) {
          echo "<option value=\"$city[city_id]\">$city[city]</option>";
        }


          echo <<< FORMADDUSER
             </select>
             <input type="text" name="city_id" placeholder="Podaj id miasta"><br><br>
             <input type="submit" value="Dodaj użytkownika">
          </form>
        FORMADDUSER;
      }
      else echo '<a href="./1_bazy_tabela_delete_insert.php?addUser=">Dodaj użytkownika</a>';


     ?>

  </body>
</html>
