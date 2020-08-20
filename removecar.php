<?php 
    session_start();

    $id_produto = $_GET['id'];

    unset($_SESSION['carrinho'][$id_produto]);

    header('location:carrinho.php')

?>