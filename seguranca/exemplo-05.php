<form method="post">
  <input type="text" name="busca">
  <button type="submit">Enviar</button>
</form>

<?php

$_POST["busca"] = "<script>alert('oi')</script>";
// É recomendável fazer esse tratamento em todos os campos de entrada do seu site.
if (isset($_POST["busca"])) {
  // Função strip_tags() remove qualquer TAG html, incluindo TAG script.
  // 1º parâmetro é a variável em que os dados a serem tratados estão localizados e o 2º parâmetro é onde pode colocar as tags que serão ignoradas e não seram retiradas.
  // Neste caso, apenas a tag <strong> ficará, todas as outras seram retiradas.

  echo strip_tags($_POST["busca"], "<strong>");

  // Imprimi tudo como se fosse uma string, inclusive as tags vinda pelo POST
  // echo htmlentities($_POST["busca"]);
}

?>