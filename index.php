<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posso votar?</title>
</head>
<body>
    <h2>Posso votar?</h2>
    <form method='post' action="<?php echo $_SERVER['PHP_SELF'];?>">
        Idade <input type="number" name="idade"><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    //verifica se a idade foi enviada pelo formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //verifica se o campo foi preenchido
        if (!empty($_POST['idade'])) {
            //obtém o valor da idade do formulário
            $idade = $_POST['idade'];

            // verifica se a idade é maior ou menor que 16
            if ($idade < 16) {
                echo "<h3>Você tem $idade e não pode votar ainda.<h3>";
            } else {
                echo "<h3>Você tem $idade pode votar!<h3>";
            }
        } else {
            //Caso o campo não tenha sido preenchido, exibe uma mensagem de erro
            echo "<h3>Preencha o campo com sua idade.<h3>";
        }
    }
    ?>
</body>
</html>
