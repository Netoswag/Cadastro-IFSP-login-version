<?php
    include('inicia_sessao.php');
    // Limpa variáveis da sessão
    session_unset();
    //Destrói a sessão
    session_destroy();
    // Vlota para página inicial
    header('Location: index.php');
?>