<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><menu></menu></title>
</head>
<body>
    <ul>

        <li><a href="index.php"></a></li>

        <?php
            include('inicia_sessao.php');
            if(empty($_SESSION['login'])):
        ?>
            <li><a href="CadastroCidade.php"></a></li>
            <li><a href="ListarCidade.php"></a></li>
            <li><a href="CadastroCliente.php"></a></li>
            <li><a href="ListarCliente.php"></a></li>
            <li><a href="logout.php"></a></li>
        <?php
            echo "<li><a> Olá " . $_SESSION['login'] ['nome'] . "</a></li>";
            endif;
        ?>
    </ul>
</body>
</html>