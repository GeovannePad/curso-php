<form>
    <input type="text" name="nome1">
    <input type="text" name="nome2">
    <input type="text" name="nome3">
    <input type="text" name="nome4">
    <input type="text" name="nome5">

    <input type="submit" value="OK">
</form>
<?php 


    foreach ($_GET as $key => $value) {
        echo $key . "<br>";
        echo $value . "<br>";
    }
