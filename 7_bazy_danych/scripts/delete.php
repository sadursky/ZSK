<?php
  // połączenie
  // wysłać zapytanie do db (wykorzystać $_GET['id'])
  // sprawdzić czy usunęło rekord (affected_rows)

  require_once './connect.php';
  if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `users`.`user_id` = $id";
    $result = $connect->query($sql);
    if ($connect->affected_rows) {
      // header("location: ../1_bazy_tabela_delete.php?deletedUser=$id");
      header("location: ../1_bazy_tabela_delete_insert.php?deletedUser=$id");
    }
    else {
      echo "Nie usunięto rekordu";
    }
  }
  else {
    header('location: ../1_bazy_tabela_delete_insert.php');
  }


 ?>
