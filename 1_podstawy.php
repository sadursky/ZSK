<?php
  echo 'ZSK<br>';
  echo 'ZSK<br>';

  $name="Janusz";
  echo 'Imię: $name<br>'; //Imię: $name
  echo "Imię: $name<br>"; //Imię: Janusz
  //ctrl+shift+D duplikacja


  // typy danych
  // całkowity

  $całkowita=10; //polskie znaki w nazwach zmiennych
  $bin=0b1011; //11
  $oct=011; //9
  $hex=0xA; //10
  echo "$całkowita<br>$bin<br>$oct<br>$hex<br>";
  // konkatenacja
  echo "text1"."text2";
  echo "<br>";
  // interpolacja
  echo "text1","text2";

  //typ zmiennoprzecinkowy
  $x=10.5;

  // logiczny
  $prawda=true; // 1
  $falsz=false; // nic nie wyswietli
  echo $falsz;

  // składnia heredoc
  $text = <<<ETYKIETA
  <hr>
  Imię: $name<br>
  <h3>Poznań</h3>
  <hr>
  ETYKIETA;

  echo $text;

  //nowdoc
  echo <<<'ETYKIETA'
  <hr>
  Imię: $name<br>
  <h3>Poznań</h3>
  <hr>
ETYKIETA;

  echo "Wartość zmiennej name: $name, nazwa zmiennej name: \$name";
?>
