<?php

// Verifica se o formulario foi enviado 
if ($_SERVER["RESQUEST_METHOD"] == "POST") {
    $senha =$_POST["senha"];

    // Verifica se a senha bate
    if ($senha == "12345") {
        header("Location: 4b_bem_vindo.php");
    }else {
        // Mesagem de erro
        $erro = "Senha incorreta. Tente novamente";
    }
}
?>
<!DOCTYPE hmtl>
<html lang="pt-BR">
    <head>
        <meta> charset="UFT-8">
        <title>Página d login</title>


    </head>
</html>
<body>
    <h2>Digite sua senha:</h2>
    <form action="" method "post">
        <label for="senha">SEnha:</lebal>
        <input type="password" name="senha" required>
        <bottun type="submit">Entrar</bottun>
    </form>

    <?php
    if (isset($erro)) {
        echo "<p style='color: red';>$erro</p>";
    }
    ?>
</body>