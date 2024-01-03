<?php 
    session_start();
    //remover ìndices do array de sessão 
    //unset() --> qualquerarray

    //destruir a variável e sessão 
    //session_destroy()
    session_destroy();
    header('location: index.php');
?>