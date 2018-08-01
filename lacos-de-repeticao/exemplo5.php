<!--Se não tem method, então o padrão é GET e se não tem action o padrão é a mesma página que o formulário se encontra -->
<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
</form>

<?php
    // Mostrará o nome e o valor de cada campo do array super global $_GET.
    if(isset($_GET)) {
        foreach ($_GET as $key => $value) {
            echo "Nome do campo: " . $key . "<br>";
            echo "Valor do campo: " . $value;
            echo "<hr>";
        }
    }
    