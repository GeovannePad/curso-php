<?php
  // CLASSE DateTime, mesma função da date(), porém como é uma classe, tem alguns recursos a mais.
  // Instânciar/criar um objeto apartir de uma classe.
  // A variável $dt agora é uma variável de tipo object
  $dt = new DateTime();

  // format é praticamente igual a função date.
  echo $dt->format("d/m/Y H:i:s");