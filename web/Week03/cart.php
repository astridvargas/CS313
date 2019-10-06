<?php
    session_start();

    // if(empty($_SESSION['cart'])) {
    //     $_SESSION['cart'] = array();
    // }

    // array_push($_SESSION['cart'], $_GET['id'])

    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['qty'];



    $product = array($name, $price, $quantity);
    // print_r($product);

    $_SESSION[$name] = $product;

    header('location:assignment03.php');
?>