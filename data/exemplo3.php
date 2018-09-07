<?php
  // LC_all = Mude toda a configuração de localização que eu tenho para português, apenas neste exemplo.
  // Sempre usar os 3 por via das dúvidas, pois ele irá pegar o certo sempre depedendo do sistema, funcionando corretamente em qualquer sistema.
  setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

  // Formata/ mostra o formato da hora de acordo com as configurações impostas na função setlocale, que no caso, a hora está no padrão brasileiro.
  echo ucwords(strftime("%A %B"));
