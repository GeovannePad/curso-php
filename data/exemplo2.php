<?php
  // Pega o time stamp da data 2001-09-11
  //$ts = strtotime("2001-09-11");
  // Também aceita expressões, exemplo, +1 day, +1 week, +20 days etc etc. Podendo juntar tudo day, week, year e assim vai.
  $ts = strtotime("+1 week");

  echo date("l, d/m/Y", $ts);