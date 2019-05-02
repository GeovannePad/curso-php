<!-- Forma para integrar o ReCaptcha v3 -->

<script src="https://www.google.com/recaptcha/api.js?render=6LcTKqEUAAAAAKIOzWRs2V8MDa3cy0a-fJDXai3x"></script>

<form action="cadastrar.php" method="post">

  <input type="email" name="inputEmail">
  <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
  <button type="submit">Enviar</button>

</form>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6LcTKqEUAAAAAKIOzWRs2V8MDa3cy0a-fJDXai3x', {
      action: 'homepage'
    }).then(function(token) {
      document.getElementById("g-recaptcha-response").value = token;
    });
  });
</script>